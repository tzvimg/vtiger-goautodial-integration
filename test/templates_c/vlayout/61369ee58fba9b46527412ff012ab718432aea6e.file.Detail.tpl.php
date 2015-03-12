<?php /* Smarty version Smarty-3.1.7, created on 2015-02-17 10:49:53
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ExtensionStore/Detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42305500954e31cd1c82659-30696636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61369ee58fba9b46527412ff012ab718432aea6e' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ExtensionStore/Detail.tpl',
      1 => 1423509306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42305500954e31cd1c82659-30696636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'EXTENSION_ID' => 0,
    'EXTENSION_DETAIL' => 0,
    'MODULE_ACTION' => 0,
    'QUALIFIED_MODULE' => 0,
    'AUTHOR_INFO' => 0,
    'ON_RATINGS' => 0,
    'CUSTOMER_REVIEWS' => 0,
    'REGISTRATION_STATUS' => 0,
    'PASSWORD_STATUS' => 0,
    'IS_PRO' => 0,
    'CUSTOMER_PROFILE' => 0,
    'EXTENSION_MODULE_MODEL' => 0,
    'MODULE' => 0,
    'SCREEN_SHOTS' => 0,
    'SCREEN_SHOT' => 0,
    'CUSTOMER_REVIEW' => 0,
    'CUSTOMER_INFO' => 0,
    'REVIEW_CREATED_TIME' => 0,
    'ERROR_MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54e31cd204d36',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e31cd204d36')) {function content_54e31cd204d36($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/vtiger/libraries/Smarty/libs/plugins/modifier.replace.php';
?>
<div class="container-fluid detailViewInfo extensionDetails" style='margin-top:0px;'><?php if (!($_smarty_tpl->tpl_vars['ERROR']->value)){?><input type="hidden" name="mode" value="<?php echo $_REQUEST['mode'];?>
" /><input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION_ID']->value;?>
" /><input type="hidden" name="targetModule" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('name');?>
" /><input type="hidden" name="moduleAction" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_ACTION']->value;?>
" /><div class="row-fluid contentHeader"><div class="span6"><div style="margin-bottom: 5px;"><span  class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('name');?>
</span>&nbsp;<span class="muted"><?php echo vtranslate('LBL_BY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['lastname'];?>
</span></div><?php $_smarty_tpl->tpl_vars['ON_RATINGS'] = new Smarty_variable($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('avgrating'), null, 0);?><div class="row-fluid"><span data-score="<?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
" class="rating span5" data-readonly="true"></span><span class="span6">(<?php echo count($_smarty_tpl->tpl_vars['CUSTOMER_REVIEWS']->value);?>
 <?php echo vtranslate('LBL_REVIEWS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)</span></div></div><div class="span6"><div class="pull-right extensionDetailActions"><?php if (($_smarty_tpl->tpl_vars['MODULE_ACTION']->value=='Installed')){?><button class="btn btn-danger <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>" type="button" style="margin-right: 6px;" id="uninstallModule"><strong><?php echo vtranslate('LBL_UNINSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('isprotected')&&$_smarty_tpl->tpl_vars['IS_PRO']->value&&($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price')>0)){?><button class="btn btn-info <?php if ((!$_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['CustomerCardId'])){?> setUpCard<?php }?><?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?> authenticated <?php }else{ ?> loginRequired<?php }?>" type="button" id="installExtension"><strong><?php echo vtranslate('LBL_BUY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
$<?php echo $_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price');?>
</strong></button><?php }elseif((!$_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('isprotected'))&&($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price')>0)){?><button class="btn btn-info <?php if ((!$_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['CustomerCardId'])){?> setUpCard<?php }?><?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?> authenticated <?php }else{ ?> loginRequired<?php }?>" type="button" id="installExtension"><strong><?php echo vtranslate('LBL_BUY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
$<?php echo $_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price');?>
</strong></button><?php }elseif(!$_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('isprotected')&&(($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price')==0)||($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price')=='Free'))){?><button class="btn btn-success <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>" type="button" id="installExtension"><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_ACTION']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php }elseif($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('isprotected')&&$_smarty_tpl->tpl_vars['IS_PRO']->value&&(($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price')==0)||($_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('price')=='Free'))){?><button class="btn btn-success <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>" type="button" id="installExtension"><strong><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_ACTION']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php }?><?php }?><button class="btn btn-info <?php if ($_smarty_tpl->tpl_vars['MODULE_ACTION']->value=='Installed'){?><?php if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value->get('extnType')=='language'){?>hide<?php }?><?php }else{ ?>hide<?php }?>" type="button" id="launchExtension" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('name');?>
&view=List'"><strong><?php echo vtranslate('LBL_LAUNCH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" id="declineExtension"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div></div><div class="tabbable margin0px" style="padding-bottom: 20px;"><ul id="extensionTab" class="nav nav-tabs" style="margin-bottom: 0px; padding-bottom: 0px;"><li class="active"><a href="#description" data-toggle="tab"><strong><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li><a href="#CustomerReviews" data-toggle="tab"><strong><?php echo vtranslate('LBL_CUSTOMER_REVIEWS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li><a href="#Author" data-toggle="tab"><strong><?php echo vtranslate('LBL_PUBLISHER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content row-fluid boxSizingBorderBox" style="background-color: #fff; padding: 20px; border: 1px solid #ddd; border-top-width: 0px;"><div class="tab-pane active" id="description"><div style="width:90%;padding: 0px 5%;"><div class="row-fluid"><ul id="imageSlider" class="imageSlider"><?php  $_smarty_tpl->tpl_vars['SCREEN_SHOT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SCREEN_SHOT']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SCREEN_SHOTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SCREEN_SHOT']->key => $_smarty_tpl->tpl_vars['SCREEN_SHOT']->value){
$_smarty_tpl->tpl_vars['SCREEN_SHOT']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['SCREEN_SHOT']->key;
?><li><div class="slide"><img src="<?php echo $_smarty_tpl->tpl_vars['SCREEN_SHOT']->value->get('screenShotURL');?>
" class="sliderImage"/></div></li><?php } ?></ul></div></div><div class="scrollableTab"><p><?php echo $_smarty_tpl->tpl_vars['EXTENSION_DETAIL']->value->get('description');?>
</p><p></p></div></div><div class="tab-pane row-fluid" id="CustomerReviews"><div class="row-fluid boxSizingBorderBox" style="padding-bottom: 15px;"><div class="span6"><div class="pull-left"><div style="font-size: 55px; padding: 20px 17px 0 0;"><?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
</div></div><div class="pull-left"><span data-score="<?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
" class="rating" data-readonly="true"></span><div>out of 5</div><div>(<?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
 Reviews)</div></div></div><?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?><div class="span6"><div class="pull-right"><button type="button" class="writeReview margin0px pull-right <?php if ($_smarty_tpl->tpl_vars['MODULE_ACTION']->value!='Installed'){?> hide<?php }?>"><?php echo vtranslate('LBL_WRITE_A_REVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><?php }?></div><hr><div class="scrollableTab"><div class="customerReviewContainer" style=""><?php  $_smarty_tpl->tpl_vars['CUSTOMER_REVIEW'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOMER_REVIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->key => $_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->value){
$_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->key;
?><div class="row-fluid" style="margin: 8px 0 15px;"><div class="span3"><?php $_smarty_tpl->tpl_vars['ON_RATINGS'] = new Smarty_variable($_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->value['rating'], null, 0);?><div data-score="<?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
" class="rating" data-readonly="true"></div><?php $_smarty_tpl->tpl_vars['CUSTOMER_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->value['customer'], null, 0);?><div><?php $_smarty_tpl->tpl_vars['REVIEW_CREATED_TIME'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->value['createdon'],'T',' '), null, 0);?><?php echo $_smarty_tpl->tpl_vars['CUSTOMER_INFO']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_INFO']->value['lastname'];?>
</div><div class="muted"><?php echo substr(Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['REVIEW_CREATED_TIME']->value),4);?>
</div></div><div class="span9"><?php echo $_smarty_tpl->tpl_vars['CUSTOMER_REVIEW']->value['comment'];?>
</div></div><hr><?php } ?></div></div></div><div class="tab-pane row-fluid" id="Author"><div class="scrollableTab"><div class="row-fluid"><div class="span6"><?php if (!empty($_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['company'])){?><div class="font-x-x-large authorInfo"><?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['company'];?>
</div><?php }else{ ?><div class="font-x-x-large authorInfo"><?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['lastname'];?>
</div><?php }?><div class="authorInfo"><?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['phone'];?>
</div><div class="authorInfo"><?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['email'];?>
</div><div class="authorInfo"><a href="<?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['website'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['AUTHOR_INFO']->value['website'];?>
</a></div></div><div class="span6"></div></div></div></div></div></div><?php }else{ ?><div class="row-fluid"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</div><?php }?><div class="modal customerReviewModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_CUSTOMER_REVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal customerReviewForm"><input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION_ID']->value;?>
" /><div class="modal-body"><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_REVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><textarea name="customerReview" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"></textarea></div></div><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_RATE_IT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><div class="span5 rating"></div></div></div></div><div class="modal-footer"><div class="row-fluid"><div class="span12"><div class="pull-right"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div></form></div></div><?php }} ?>