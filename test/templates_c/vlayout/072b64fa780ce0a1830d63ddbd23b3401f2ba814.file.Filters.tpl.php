<?php /* Smarty version Smarty-3.1.7, created on 2015-02-24 17:43:52
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148751545854ecb8583a91c1-84614018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072b64fa780ce0a1830d63ddbd23b3401f2ba814' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Filters.tpl',
      1 => 1424799761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148751545854ecb8583a91c1-84614018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54ecb8583ca42',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ecb8583ca42')) {function content_54ecb8583ca42($_smarty_tpl) {?><table id="md-filters-table">
<tr>
<td>
<div id="md-filters-toolbar">
	<h2><?php echo vtranslate('LBL_FILTER_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>
	
	<ul id="md-filter-fields-list">
	<!-- Fields added with JS -->
	</ul>
</div>
</td>
<td>

<div id="md-add-filter-btn">
	<img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/filter.png" alt="<?php echo vtranslate('LBL_ADD_FILTER_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/> <a href="#" onclick="md_addFilter(); return false;"><?php echo vtranslate('LBL_ADD_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
</div>

<div>
<ul id="md-filters-ul">
<!-- Filters added with JS -->
</ul>
</div>
</td>
</table><?php }} ?>