<?php /* Smarty version Smarty-3.1.7, created on 2015-02-09 21:32:36
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/PBXManager/Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43556698254d92774b50cd2-55323478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8165643dd051fcdd26fbb63190c5fa83be9a8f83' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/PBXManager/Edit.tpl',
      1 => 1423509290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43556698254d92774b50cd2-55323478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'FIELDS' => 0,
    'FIELD_NAME' => 0,
    'FIELD_TYPE' => 0,
    'RECORD_MODEL' => 0,
    'RECORD_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54d92774c1223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d92774c1223')) {function content_54d92774c1223($_smarty_tpl) {?>
<div class="container-fluid"><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable(Settings_PBXManager_Module_Model::getCleanInstance(), null, 0);?><form id="MyModal" class="form-horizontal" data-detail-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewUrl();?>
"><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate('LBL_PBXMANAGER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="span4 btn-toolbar"><div class="pull-right"><button class="btn btn-success saveButton" type="submit" title="<?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a type="reset" class="cancelLink" title="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div><hr><div class="contents row-fluid"><table class="table table-bordered table-condensed themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('LBL_PBXMANAGER_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th></tr></thead><tbody><?php $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_variable(PBXManager_PBXManager_Connector::getSettingsParameters(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->key => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value){
$_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_TYPE']->key;
?><tr><td width="25%"><label class="muted pull-right marginRight10px"><span class="redColor">*</span><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td style="border-left: none;"><input type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
" /></td></tr><?php } ?><input type="hidden" name="module" value="PBXManager"/><input type="hidden" name="action" value="SaveAjax"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"></tbody></table></div></form></div><br><div class="span5 alert alert-info container-fluid"><?php echo vtranslate('LBL_NOTE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br><?php echo vtranslate('LBL_INFO_WEBAPP_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br><?php echo vtranslate('LBL_FORMAT_WEBAPP_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br><?php echo vtranslate('LBL_FORMAT_INFO_WEBAPP_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }} ?>