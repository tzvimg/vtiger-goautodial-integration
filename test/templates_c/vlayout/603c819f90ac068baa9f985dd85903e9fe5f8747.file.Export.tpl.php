<?php /* Smarty version Smarty-3.1.7, created on 2015-02-24 17:43:52
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163005436354ecb858410f15-32115860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '603c819f90ac068baa9f985dd85903e9fe5f8747' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Export.tpl',
      1 => 1424799761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163005436354ecb858410f15-32115860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54ecb85842802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecb85842802')) {function content_54ecb85842802($_smarty_tpl) {?><button onclick="md_makePackage(false)"><?php echo vtranslate('LBL_MAKE_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><br /><br />
<button onclick="md_makePackage(true)"><?php echo vtranslate('LBL_CREATE_AND_INSTALL_PACKAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }} ?>