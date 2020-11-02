<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Welcomedemo extends Module
{
    protected $output = '';

    public function __construct()
    {
        $this->name = 'welcomedemo';
        $this->tab = 'front_office_features';
        $this->version = '1.1.1';
        $this->author = 'Anthony Camacho';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Mensaje de bienvenida');
        $this->description = $this->l('Este modulo te permite crear un mensaje de bienvenida en cualquier página');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        $languages = Language::getLanguages(false);
        $values = array();
        foreach ($languages as $lang) {
            $values['WELCOMEDEMO_TEXT'][(int)$lang['id_lang']] = 'Mensaje de bienvenida';
            Configuration::updateValue('WELCOMEDEMO_TEXT', $values['WELCOMEDEMO_TEXT'], true);
        }
        
        Configuration::updateValue('WELCOMEDEMO_ONLY_LOGGED_OUT', 0);

        return parent::install() &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('header') &&
            $this->registerHook('displayFooterBefore') &&
            $this->registerHook('displayWrapperTop');
    }

    public function uninstall()
    {
        Configuration::deleteByName('WELCOMEDEMO_TEXT');
        Configuration::deleteByName('WELCOMEDEMO_ONLY_LOGGED_OUT');

        return parent::uninstall();
    }
    
    protected function postProcess()
    {
        if (Tools::isSubmit('submitSettings')) {
            $languages = Language::getLanguages(false);
            $values = array();

            foreach ($languages as $lang) {
                $values['WELCOMEDEMO_TEXT'][$lang['id_lang']] = (string)Tools::getValue('WELCOMEDEMO_TEXT_'.$lang['id_lang']);
            }

            Configuration::updateValue('WELCOMEDEMO_TEXT', $values['WELCOMEDEMO_TEXT'], true);
            Configuration::updateValue('WELCOMEDEMO_ONLY_LOGGED_OUT', Tools::getValue('WELCOMEDEMO_ONLY_LOGGED_OUT'));

            $this->output .= $this->displayConfirmation($this->l('Settings updated ok.'));
        }
    }

    public function getContent()
    {
        $this->postProcess();
        
        $this->context->smarty->assign(array(
            'module_dir' => $this->_path,
            'displayName' => $this->displayName,
            'name' => $this->name,
            'author' => $this->author,
            'version' => $this->version,
            'description' => $this->description,
        ));

        $this->output .= $this->context->smarty->fetch($this->local_path.'views/templates/admin/content.tpl');
        $this->output .= $this->displayForm();
        
        return $this->output;
    }

    private function displayForm()
    {
        $languages = Language::getLanguages(false);
        foreach ($languages as $k => $language) {
            $languages[$k]['is_default'] = (int)$language['id_lang'] == Configuration::get('PS_LANG_DEFAULT');
        }

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->languages = $languages;
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = true;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'submitSettings';

        $this->fields_form[0]['form'] = array(
            'tinymce' => false,
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Welcome text'),
                    'name' => 'WELCOMEDEMO_TEXT',
                    'lang' => true,
                    'autoload_rte' => true,
                    'cols' => 40,
                    'rows' => 7,
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Display welcome text only when the user is not logged in'),
                    'name' => 'WELCOMEDEMO_ONLY_LOGGED_OUT',
                    'required' => false,
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
            ),
            'submit' => array(
                'name' => 'submitSettings',
                'title' => $this->l('Save'),
            ),
        );
        
        foreach ($languages as $lang) {
            $helper->fields_value['WELCOMEDEMO_TEXT'][$lang['id_lang']] = Tools::getValue('WELCOMEDEMO_TEXT_'.$lang['id_lang'], Configuration::get('WELCOMEDEMO_TEXT', $lang['id_lang']));
        }

        $helper->fields_value['WELCOMEDEMO_ONLY_LOGGED_OUT'] = Configuration::get('WELCOMEDEMO_ONLY_LOGGED_OUT');
        
        return $helper->generateForm($this->fields_form);
    }
    
    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    public function hookDisplayWrapperTop()
    {
        if (Configuration::get('WELCOMEDEMO_ONLY_LOGGED_OUT') == 1 && $this->context->cookie->id_customer) {
            return;
        }
        
        $this->context->smarty->assign(array(
            'welcome_text' => Configuration::get('WELCOMEDEMO_TEXT', $this->context->language->id),
        ));
        return $this->display(__FILE__, 'top.tpl');
    }

    public function displayFooterBefore()
    {

    $this->context->smarty->assign(array(
        'welcome_text' => Configuration::get('WELCOMEDEMO_TEXT', $this->context->language->id),
    ));
    return $this->display(__FILE__, 'top.tpl');
    }
}
