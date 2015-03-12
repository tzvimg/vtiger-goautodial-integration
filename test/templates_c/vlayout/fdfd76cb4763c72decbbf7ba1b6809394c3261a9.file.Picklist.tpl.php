<?php /* Smarty version Smarty-3.1.7, created on 2015-02-09 22:26:28
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Users/uitypes/Picklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14321924854d934148fc2b6-36768530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdfd76cb4763c72decbbf7ba1b6809394c3261a9' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Users/uitypes/Picklist.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14321924854d934148fc2b6-36768530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'EVENT_MODULE' => 0,
    'EVENTSTATUS_FIELD_MODEL' => 0,
    'ACTIVITYTYPE_FIELD_MODEL' => 0,
    'OCCUPY_COMPLETE_WIDTH' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_NAME' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54d93414a1633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d93414a1633')) {function content_54d93414a1633($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='defaulteventstatus'){?><?php $_smarty_tpl->tpl_vars['EVENT_MODULE'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Events'), null, 0);?><?php $_smarty_tpl->tpl_vars['EVENTSTATUS_FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['EVENT_MODULE']->value->getField('eventstatus'), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['EVENTSTATUS_FIELD_MODEL']->value->getPicklistValues(), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='defaultactivitytype'){?><?php $_smarty_tpl->tpl_vars['EVENT_MODULE'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Events'), null, 0);?><?php $_smarty_tpl->tpl_vars['ACTIVITYTYPE_FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['EVENT_MODULE']->value->getField('activitytype'), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['ACTIVITYTYPE_FIELD_MODEL']->value->getPicklistValues(), null, 0);?><?php }?><select class="chzn-select <?php if ($_smarty_tpl->tpl_vars['OCCUPY_COMPLETE_WIDTH']->value){?> row-fluid <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
'><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed()){?><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='defaulteventstatus'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='defaultactivitytype'){?><option value="<?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
"><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }?><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if (trim(decode_html($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')))==trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?></select><?php }} ?>