<?php
header("Content-Type: text/html;charset=utf-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!defined('_PS_ADMIN_DIR_'))
define('_PS_ADMIN_DIR_', getcwd());
include(_PS_ADMIN_DIR_.'/../config/config.inc.php');
include(_PS_ADMIN_DIR_.'/functions.php');
include_once '../controllers/admin/AdminImportController.php';


set_time_limit(0);

	function copyImg($id_entity, $id_image, $url, $entity = 'products', $regenerate = true) {
        $tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'ps_import');
        $watermark_types = explode(',', Configuration::get('WATERMARK_TYPES'));

          switch ($entity) {
              default:
              case 'products':
                  $image_obj = new Image($id_image);
                  $path = $image_obj->getPathForCreation();
                  break;
              case 'categories':
                  $path = _PS_CAT_IMG_DIR_ . (int) $id_entity;
                  break;
              case 'manufacturers':
                  $path = _PS_MANU_IMG_DIR_ . (int) $id_entity;
                  break;
              case 'suppliers':
                  $path = _PS_SUPP_IMG_DIR_ . (int) $id_entity;
                  break;
          }
          $url = str_replace(' ', '%20', trim($url));


          // Evaluate the memory required to resize the image: if it's too much, you can't resize it.
          if (!ImageManager::checkImageMemoryLimit($url))
              return false;


          // 'file_exists' doesn't work on distant file, and getimagesize makes the import slower.
          // Just hide the warning, the processing will be the same.
          if (Tools::copy($url, $tmpfile)) {
              ImageManager::resize($tmpfile, $path . '.jpg');
              $images_types = ImageType::getImagesTypes($entity);


              if ($regenerate)
                  foreach ($images_types as $image_type) {
                      ImageManager::resize($tmpfile, $path . '-' . stripslashes($image_type['name']) . '.jpg', $image_type['width'], $image_type['height']);
                      if (in_array($image_type['id_image_type'], $watermark_types))
                          Hook::exec('actionWatermark', array('id_image' => $id_image, 'id_product' => $id_entity));
                  }
          }
          else {
              unlink($tmpfile);
              return false;
          }
          unlink($tmpfile);
          return true;
	}
	
 
	$import = New AdminImportController();
	
	
	loadProductsPost();
    $import->productImport();	
		
	
	function loadProductsPost() {
								
								$_POST = array (
								'tab' => 'AdminImportController',
								'truncate'=>'0',
								'forceIDs' => '1',
								'match_ref' => '1',
								'skip' => '0',
								'csv' => '../../../dropbox/nuevos.csv', // Por comodidad se almacena el archivo en una carpeta que no es adminxxx/import
								'entity' => '1',
								'separator' => ';',
								'multiple_value_separator' => ',',
								'iso_lang' => 'es',
								'convert' => '',
								'import' => '1',	
								"type_value" => array(								
										  0 => 'id', //el archivo tiene el ID que será necesario para importar imágenes
										  1 => 'reference',
										  2 => 'name',
										  3 => 'quantity',
										  4 => 'price_tex',							  
										  5 => 'category'
										  
							),
							);
					}
			
		$file_handle = fopen("../../dropbox/nuevos.csv", "r"); //la ruta remota del CSV ó TXT. El mismo archivo que importamos
		while (!feof($file_handle)) {
			$line = fgets($file_handle);
			
			echo $line."<br>"; //para mostrar el contenido del archivo que importamos
			$linea = explode(";",$line);
			if (file_exists('../../imgs_prods/'.$linea[1].'.jpg')){
				$url = "https://miurl.com/imgs_prods/".$linea[1].".jpg";
				$image = new Image();
				$image->id_product = (int) $linea[0];
				$image->position = Image::getHighestPosition($linea[0]) + 1;
				$image->cover =  true;
				$image->add();
				if (!copyImg($linea[0], $image->id, $url, 'products', !Tools::getValue('regenerate'))) {
					$image->delete();
				}
				
			}

			
		}
		fclose($file_handle);	
			
	
	
		Tools::clearSmartyCache();
		Tools::clearXMLCache();
		Media::clearCache();
		Tools::generateIndex();


?>