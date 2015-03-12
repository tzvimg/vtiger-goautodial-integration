<?php /* Smarty version Smarty-3.1.7, created on 2015-02-24 17:39:18
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleManager/ImportUserModuleStep2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203286732754ecb746945ab7-40663218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c0cc668a9ed05c366fd9a5a5797e52f0bfd28c' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleManager/ImportUserModuleStep2.tpl',
      1 => 1414590236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203286732754ecb746945ab7-40663218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULEIMPORT_FAILED' => 0,
    'QUALIFIED_MODULE' => 0,
    'VERSION_NOT_SUPPORTED' => 0,
    'MODULEIMPORT_FILE_INVALID' => 0,
    'MODULEIMPORT_NAME' => 0,
    'MODULEIMPORT_EXISTS' => 0,
    'MODULEIMPORT_DEP_VTVERSION' => 0,
    'MODULEIMPORT_LICENSE' => 0,
    'MODULEIMPORT_DIR_EXISTS' => 0,
    'MODULEIMPORT_FILE' => 0,
    'MODULEIMPORT_TYPE' => 0,
    'MODULE' => 0,
    'need_license_agreement' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54ecb746c631d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecb746c631d')) {function content_54ecb746c631d($_smarty_tpl) {?>
<div class="container-fluid" id="importModules"><div><div class="row-fluid"><div id="vtlib_modulemanager_import_div"><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_FAILED']->value!=''){?><div class="span10"><b><?php echo vtranslate('LBL_FAILED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></div><div class="span10"><?php if ($_smarty_tpl->tpl_vars['VERSION_NOT_SUPPORTED']->value=='true'){?><font color=red><b><?php echo vtranslate('LBL_VERSION_NOT_SUPPORTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></font><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_FILE_INVALID']->value=="true"){?><font color=red><b><?php echo vtranslate('LBL_INVALID_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></font> <?php echo vtranslate('LBL_INVALID_IMPORT_TRY_AGAIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><font color=red><?php echo vtranslate('LBL_UNABLE_TO_UPLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</font> <?php echo vtranslate('LBL_UNABLE_TO_UPLOAD2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?><?php }?></div><input type="hidden" name="view" value="List"><button  class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php }else{ ?><div class="row-fluid" style="margin-top: 2%"><div><h3><?php echo vtranslate('LBL_VERIFY_IMPORT_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr></div><div class="container-fluid"><br><div class="row-fluid"><div class="span12"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULEIMPORT_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_EXISTS']->value=='true'){?> <font color=red><b><?php echo vtranslate('LBL_EXISTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></font> <?php }?></h4></div></div><div class="row-fluid"><div class="span12"><p><small><?php echo vtranslate('LBL_REQ_VTIGER_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_DEP_VTVERSION']->value;?>
</small></p></div></div><?php $_smarty_tpl->tpl_vars["need_license_agreement"] = new Smarty_variable("false", null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_LICENSE']->value){?><?php $_smarty_tpl->tpl_vars["need_license_agreement"] = new Smarty_variable("true", null, 0);?><div class="row-fluid"><div class="span12"><p><?php echo vtranslate('LBL_LICENSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><div class="row-fluid"><div class="span12"><div style="background: #eee;padding: 20px;box-sizing: border-box;height: 150px;overflow-y: scroll;"><p><?php echo nl2br($_smarty_tpl->tpl_vars['MODULEIMPORT_LICENSE']->value);?>
</p></div></div></div><?php }?><br><div class="row-fluid"><div class="span4"><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_EXISTS']->value!='true'){?><input type="checkbox"  class="acceptLicense"> <?php echo vtranslate('LBL_LICENSE_ACCEPT_AGREEMENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?>&nbsp;</div><div class="span8"><span class="pull-right"><div class="row-fluid"><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_EXISTS']->value=='true'||$_smarty_tpl->tpl_vars['MODULEIMPORT_DIR_EXISTS']->value=='true'){?><div class="span10"><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_EXISTS']->value=='true'){?><input type="hidden" name="module_import_file" value="<?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_FILE']->value;?>
"><input type="hidden" name="module_import_type" value="<?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_TYPE']->value;?>
"><input type="hidden" name="module_import_name" value="<?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_NAME']->value;?>
"><button class="btn btn-success updateModule" name="saveButton"><?php echo vtranslate('LBL_UPDATE_NOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }else{ ?><p class="alert-info"><?php echo vtranslate('LBL_DELETE_EXIST_DIRECTORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p><?php }?></div><div class="span2"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></span><?php }else{ ?><input type="hidden" name="module_import_file" value="<?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_FILE']->value;?>
"><input type="hidden" name="module_import_type" value="<?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_TYPE']->value;?>
"><input type="hidden" name="module_import_name" value="<?php echo $_smarty_tpl->tpl_vars['MODULEIMPORT_NAME']->value;?>
"><span class="pull-right"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button  class="btn btn-success importModule" name="saveButton"<?php if ($_smarty_tpl->tpl_vars['need_license_agreement']->value=='true'){?> disabled <?php }?>><strong><?php echo vtranslate('LBL_IMPORT_NOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><?php }?></div></div></div><br><br><?php }?></div></div></div><div class="modal importStatusModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="statusHeader"></h3></div><form class="form-horizontal setUpCardForm"><input type="hidden" name="module" value="ModuleManager" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="view" value="List" /><div class="modal-body statusContainer"></div><div class="modal-footer"><div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_OK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div></form></div></div><?php }} ?>