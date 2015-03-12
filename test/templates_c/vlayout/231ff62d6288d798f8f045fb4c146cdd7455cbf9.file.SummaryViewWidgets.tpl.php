<?php /* Smarty version Smarty-3.1.7, created on 2015-02-09 22:06:31
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Vtiger/SummaryViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160868080754d92f67dc3618-77065291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '231ff62d6288d798f8f045fb4c146cdd7455cbf9' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Vtiger/SummaryViewWidgets.tpl',
      1 => 1383547495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160868080754d92f67dc3618-77065291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_SUMMARY' => 0,
    'DETAILVIEW_LINKS' => 0,
    'DETAIL_VIEW_WIDGET' => 0,
    'MODULE_NAME' => 0,
    'RELATED_ACTIVITIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54d92f67e549a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d92f67e549a')) {function content_54d92f67e549a($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value)){?><div class="row-fluid"><div class="span7"><div class="summaryView row-fluid"><?php echo $_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value;?>
</div><?php }?><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%2==0){?><div class="summaryWidgetContainer"><div class="widgetContainer_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel();?>
"><div class="widget_header row-fluid"><span class="span8 margin0px"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></span></div><div class="widget_contents"></div></div></div><?php }?><?php } ?></div><div class="span5" style="overflow: hidden"><div id="relatedActivities"><?php echo $_smarty_tpl->tpl_vars['RELATED_ACTIVITIES']->value;?>
</div><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%2!=0){?><div class="summaryWidgetContainer"><div class="widgetContainer_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel();?>
"><div class="widget_header row-fluid"><span class="span8 margin0px"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></span></div><div class="widget_contents"></div></div></div><?php }?><?php } ?></div></div><?php }} ?>