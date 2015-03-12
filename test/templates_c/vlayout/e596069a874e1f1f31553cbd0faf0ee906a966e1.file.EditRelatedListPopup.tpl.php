<?php /* Smarty version Smarty-3.1.7, created on 2015-02-24 21:11:58
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/EditRelatedListPopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43133313054ece91ededb42-77979462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e596069a874e1f1f31553cbd0faf0ee906a966e1' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/EditRelatedListPopup.tpl',
      1 => 1424799761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43133313054ece91ededb42-77979462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'a_relatedList' => 0,
    'a_languages' => 0,
    'language' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54ece91f3aa9f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ece91f3aa9f')) {function content_54ece91f3aa9f($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/resources/PopupUtils.js"></script>
<script type="text/javascript" src="libraries/jquery/jquery.min.js"></script>
<script type="text/javascript" src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/resources/jqueryCaret.js"></script>
</head>

<body>
<div style="font-family: Arial,Verdana,'Times New Roman',sans-serif;">
<h2><?php echo vtranslate('LBL_RELATED_LIST_LINK_TO_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo vtranslate($_smarty_tpl->tpl_vars['a_relatedList']->value['relatedModule'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table id="form" style="font-size:12px;">
<tr>
	<td colspan="2"><h3><?php echo vtranslate("LBL_RELATED_LIST_DESCRIPTION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></td>
</tr>
<tr>
	<td><?php echo vtranslate("LBL_RELATED_LIST_LABEL",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td colspan="2"><input type="text" name="label" size="50" value="<?php if (!empty($_smarty_tpl->tpl_vars['a_relatedList']->value['label'])){?><?php echo $_smarty_tpl->tpl_vars['a_relatedList']->value['label'];?>
<?php }?>" onkeyup="md_setLabel(this, 'label', '')" /></td>
</tr>
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
<?php $_smarty_tpl->tpl_vars["label"] = new Smarty_variable(('label_').($_smarty_tpl->tpl_vars['language']->value), null, 0);?>
<tr>
	<td><?php echo vtranslate("LBL_RELATED_LIST_LABEL_TRANSLATION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <em><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
</em></td>
	<td><input type="text" name="label-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" size="50" value="<?php if (!empty($_smarty_tpl->tpl_vars['a_relatedList']->value[$_smarty_tpl->tpl_vars['label']->value])){?><?php echo $_smarty_tpl->tpl_vars['a_relatedList']->value[$_smarty_tpl->tpl_vars['label']->value];?>
<?php }?>" /></td>
</tr>
<?php } ?>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td style="vertical-align: top;"><?php echo vtranslate("LBL_RELATED_LIST_NAME",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td>
		<select name="name" onchange="setRelatedListName(this)">
			<option value="get_related_list" <?php if (empty($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName'])||$_smarty_tpl->tpl_vars['a_relatedList']->value['functionName']=='get_related_list'){?>selected="selected"<?php }?>>get_related_list</option>
			<option value="get_dependents_list" <?php if ($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName']=='get_dependents_list'){?>selected="selected"<?php }?>>get_dependents_list</option>
			<option value="get_attachments" <?php if ($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName']=='get_attachments'){?>selected="selected"<?php }?>>get_attachments</option>
			<option value="get_history" <?php if ($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName']=='get_history'){?>selected="selected"<?php }?>>get_history</option>
			<option value="CUSTOM" <?php if (!empty($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName'])&&!in_array($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName'],array('get_related_list','get_dependents_list','get_attachments','get_history'))){?>selected="selected"<?php }?>><?php echo vtranslate("LBL_RELATED_LIST_CUSTOM_NAME",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
		</select>
		<input type="text" name="custom_name" size="25" value="<?php if (!in_array($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName'],array('get_related_list','get_dependents_list','get_attachments','get_history'))){?><?php echo $_smarty_tpl->tpl_vars['a_relatedList']->value['functionName'];?>
<?php }?>" <?php if (in_array($_smarty_tpl->tpl_vars['a_relatedList']->value['functionName'],array('','get_related_list','get_dependents_list','get_attachments','get_history'))){?>style="display: none;"<?php }?> />
	</td>
</tr>
<tr>
	<td><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/presence.png" alt="<?php echo vtranslate("LBL_RELATED_LIST_PRESENCE_ALT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate("LBL_RELATED_LIST_PRESENCE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td><input type="checkbox" name="presence" value="1" <?php if ($_smarty_tpl->tpl_vars['a_relatedList']->value['presence']==1){?>checked="checked"<?php }?> /></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr>
	<td colspan="2"><h3><?php echo vtranslate("LBL_RELATED_LIST_ACTIONS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></td>
</tr>
<tr>
	<td><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/add.png" alt="<?php echo vtranslate("LBL_RELATED_LIST_ACTION_ADD_ALT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate("LBL_RELATED_LIST_ACTION_ADD",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td><input type="checkbox" name="action_add" value="1" <?php if ($_smarty_tpl->tpl_vars['a_relatedList']->value['actionAdd']){?>checked="checked"<?php }?> /></td>
</tr>
<tr>
	<td><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/select.png" alt="<?php echo vtranslate("LBL_RELATED_LIST_ACTION_SELECT_ALT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate("LBL_RELATED_LIST_ACTION_SELECT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td><input type="checkbox" name="action_select" value="1"  <?php if ($_smarty_tpl->tpl_vars['a_relatedList']->value['actionSelect']){?>checked="checked"<?php }?> /></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input type="button" onclick="md_popupSave();" value="<?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></td>
</tr>
</table>
</div>

<script type="text/javascript">
function md_popupSave()
{
	var o_data = new Object();
	o_data.id				= <?php if (!empty($_smarty_tpl->tpl_vars['a_relatedList']->value['id'])){?>'<?php echo $_smarty_tpl->tpl_vars['a_relatedList']->value['id'];?>
'<?php }else{ ?>undefined<?php }?>;
	o_data.index			= <?php if (!empty($_smarty_tpl->tpl_vars['a_relatedList']->value['index'])){?><?php echo $_smarty_tpl->tpl_vars['a_relatedList']->value['index'];?>
<?php }else{ ?>undefined<?php }?>;
	o_data.relatedModule	= '<?php echo $_smarty_tpl->tpl_vars['a_relatedList']->value['relatedModule'];?>
';
	o_data.label			= $("input[name='label']").val();
	o_data.functionName		= $("select[name='name']").val() == 'CUSTOM' ? $("input[name='custom_name']").val() : $("select[name='name']").val();
	o_data.presence			= $("input[name='presence']").attr("checked") == "checked" ? 1 : 0;
	o_data.actionAdd		= $("input[name='action_add']").attr("checked") == "checked";
	o_data.actionSelect		= $("input[name='action_select']").attr("checked") == "checked";

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
	o_data.label_<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
 = $("input[name='label-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
']").val();	
<?php } ?>
	
	var valid = false;
	var field = '';
	
	if(o_data.label == '' || o_data.label == 'LBL_')
		field = '<?php echo addslashes(vtranslate("LBL_RELATED_LIST_LABEL",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
';
<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
	else if('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
' == window.parent.defaultLanguage && o_data.label_<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
 == '')
		field = '<?php echo addslashes(((vtranslate("LBL_RELATED_LIST_LABEL_TRANSLATION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)).(' ')).($_smarty_tpl->tpl_vars['language']->value));?>
';
<?php } ?>
	else if(o_data.functionName == '')
		field = '<?php echo addslashes(vtranslate("LBL_RELATED_LIST_NAME",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
';
	else
		valid = true;

	if(!valid)
		alert("<?php echo vtranslate('LBL_FIELD_VALUE_HAS_TO_BE_DEFINED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 "+field);
	else
	{
		window.parent.md_addRelatedList(o_data, false);
		window.parent.md_closePopup();
	}
}

function setRelatedListName(cb)
{
	if($(cb).val() == 'CUSTOM')
	{
		$("input[name='custom_name']").show();
		$("input[name='custom_name']").focus();
	}
	else
	{
		$("input[name='custom_name']").hide();
	}
}
</script>
</body>
</html><?php }} ?>