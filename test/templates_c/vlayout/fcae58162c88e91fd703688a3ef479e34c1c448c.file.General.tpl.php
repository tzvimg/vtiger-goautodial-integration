<?php /* Smarty version Smarty-3.1.7, created on 2015-02-24 17:43:52
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/General.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88489674154ecb858190357-40312196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcae58162c88e91fd703688a3ef479e34c1c448c' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/General.tpl',
      1 => 1424799761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88489674154ecb858190357-40312196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'LIST_DIR_TEMPLATES' => 0,
    'template' => 0,
    'LIST_MANIFEST_TEMPLATES' => 0,
    'LIST_PARENT_TABS' => 0,
    'parent_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54ecb85826ab9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecb85826ab9')) {function content_54ecb85826ab9($_smarty_tpl) {?><h2><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/template.png" alt="<?php echo vtranslate('LBL_TEMPLATE_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table>
<tr>
	<td><?php echo vtranslate('LBL_DIRECTORY_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td>
		<select name="module_directory_template" onChange="md_selectDirectory(this)">
			<option value=""><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_DIR_TEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</option>
			<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td><?php echo vtranslate('LBL_MANIFEST_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td>
		<select name="module_manifest_template">
			<option value=""><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_MANIFEST_TEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</option>
			<?php } ?>
		</select>
	</td>
</tr>
</table>

<h2><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/module.png" alt="<?php echo vtranslate('LBL_MODULE_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table id="md-module-name">
<tr>
	<td><?php echo vtranslate('LBL_SYSTEM_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td>
		<input type="text" name="module_name" class="md-medium-text-input" maxlength="25" onkeyup="md_setModuleName(this)" onfocusout="md_updateFieldsTableName(this)" />
		<input type="hidden" name="old_module_table_name" />
	</td>
	<td>
		<a href="javascript:showLoadModulePopup()"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/load.png" alt="<?php echo vtranslate('LBL_LOAD_MODULE_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo vtranslate('LBL_LOAD_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a> &nbsp;
		<a href="javascript:showUploadModulePopup()"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/upload.png" alt="<?php echo vtranslate('LBL_UPLOAD_MODULE_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo vtranslate('LBL_UPLOAD_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>
	</td>
</tr>
<tr>
	<td><?php echo vtranslate('LBL_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td colspan="2">
		<input type="text" name="module_version" class="md-medium-text-input" maxlength="25" />
	</td>
</tr>
</table>

<h2><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/menu.png" alt="<?php echo vtranslate('LBL_PARENT_TAB_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_PARENT_TAB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table>
<tr>
	<td><?php echo vtranslate('LBL_PARENT_TAB_CHOICE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
	<td>
		<select name="module_parent_tab">
			<option value=""><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
			<?php  $_smarty_tpl->tpl_vars['parent_tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent_tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_PARENT_TABS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent_tab']->key => $_smarty_tpl->tpl_vars['parent_tab']->value){
$_smarty_tpl->tpl_vars['parent_tab']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['parent_tab']->value['parenttab_label'];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['parent_tab']->value['parenttab_label']);?>
</option>
			<?php } ?>
		</select>
	</td>
</tr>
</table>

<input type="hidden" name="md-languages" />
<input type="hidden" name="md_modified_module" />
<input type="hidden" name="md_modified_module_path" /><?php }} ?>