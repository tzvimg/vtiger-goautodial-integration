<?php /* Smarty version Smarty-3.1.7, created on 2015-02-27 12:08:59
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Vtiger/SelectCampaignList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37331791754f0575bc4b932-71614318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10a764f4b4b9a6d8fa3f13e66c185369942f522e' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Vtiger/SelectCampaignList.tpl',
      1 => 1425038918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37331791754f0575bc4b932-71614318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54f0575bdf24f',
  'variables' => 
  array (
    'MODULE' => 0,
    'RELATED_MODULES' => 0,
    'RELATED_MODULE' => 0,
    'SKIP_MODULES' => 0,
    'USER_MODEL' => 0,
    'ALL_ACTIVEUSER_LIST' => 0,
    'OWNER_ID' => 0,
    'OWNER_NAME' => 0,
    'FIELD_VALUE' => 0,
    'ACCESSIBLE_USER_LIST' => 0,
    'CURRENT_USER_ID' => 0,
    'ALL_ACTIVEGROUP_LIST' => 0,
    'ACCESSIBLE_GROUP_LIST' => 0,
    'ROW' => 0,
    'listname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f0575bdf24f')) {function content_54f0575bdf24f($_smarty_tpl) {?>
<div id="transferOwnershipContainer" class='modelContainer'><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3 id="massEditHeader"><?php echo vtranslate('LBL_TRANSFER_OWNERSHIP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><div></div><form class="form-horizontal" id="chooseList" name="chooseList" method="post" action="index.php"><div class="modal-body tabbable"><!--<div class="control-group"><div class="control-label" style="width: 50;"><?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="controls"><select class="select2-container columnsSelect" id="related_modules" data-validation-engine="validate[required]" data-placeholder="<?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple="" name="related_modules[]" style="width: 350px;"><?php  $_smarty_tpl->tpl_vars['RELATED_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_MODULE']->key => $_smarty_tpl->tpl_vars['RELATED_MODULE']->value){
$_smarty_tpl->tpl_vars['RELATED_MODULE']->_loop = true;
?><?php if (!in_array($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relatedModuleName'),$_smarty_tpl->tpl_vars['SKIP_MODULES']->value)){?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relatedModuleName');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relatedModuleName'),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relatedModuleName'));?>
</option><?php }?><?php } ?></select></div></br></div>--><!--<div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_ASSIGNED_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="controls"><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsers(), null, 0);?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroups(), null, 0);?><?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id'), null, 0);?><?php $_smarty_tpl->tpl_vars['ACCESSIBLE_USER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsersForModule($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['ACCESSIBLE_GROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroupForModule($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><select class="chzn-select" data-validation-engine="validate[ required]" name="transferOwnerId" id="transferOwnerId"><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['OWNER_ID']->value){?> selected <?php }?><?php if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_USER_LIST']->value)){?> data-recordaccess=true <?php }else{ ?> data-recordaccess=false <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
'<?php if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_GROUP_LIST']->value)){?> data-recordaccess=true <?php }else{ ?> data-recordaccess=false <?php }?> ><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup></select></div></div></div>--><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_CHOOSE_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="controls"><select class="chzn-select" data-validation-engine="validate[ required]" name="aaa" id="aaa"><optgroup label="<?php echo vtranslate('LBL_LISTS');?>
"><?php  $_smarty_tpl->tpl_vars['listname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROW']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listname']->key => $_smarty_tpl->tpl_vars['listname']->value){
$_smarty_tpl->tpl_vars['listname']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['listname']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['listname']->value;?>
'data-userId="<?php echo $_smarty_tpl->tpl_vars['listname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['listname']->value;?>
</option><?php } ?></optgroup></select></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>

<?php }} ?>