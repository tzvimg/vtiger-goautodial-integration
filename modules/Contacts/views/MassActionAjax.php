<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Contacts_MassActionAjax_View extends Vtiger_MassActionAjax_View {
	function __construct() {
		parent::__construct();
		$this->exposeMethod('selectCampaignList');
		
	}

	function process(Vtiger_Request $request) {
		$mode = $request->get('mode');
		if(!empty($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}
	}

		
	function selectCampaignList(Vtiger_Request $request){
		$module = $request->getModule();
		$moduleModel = Vtiger_Module_Model::getInstance($module);

		$relatedModules = $moduleModel->getRelations();
		//User doesn't have the permission to edit related module,
		//then don't show that module in related module list.
		foreach ($relatedModules as $key => $relModule) {
			if (!Users_Privileges_Model::isPermitted($relModule->get('relatedModuleName'), 'EditView')) {
				unset($relatedModules[$key]);
			}
		}
		$db = PearDatabase::getInstance();		
		$query = "select list_name from vtiger_golist1 l inner join vtiger_crmentity e on l.golist1id = e.crmid where deleted = 0";
		$result = $db->pquery($query,array());		
		
		$noOfRows = $db->num_rows($result);
		
		$lists = array();
		for($i=0; $i<$noOfRows; ++$i) {
			$row = $db->query_result_rowdata($result, $i);
			$lists[] = $row['list_name'];
			
		}
		
		

		$viewer = $this->getViewer($request);
		$skipModules = array('Emails');
		$viewer->assign('ROW',$lists);
		$viewer->assign('MODULE',$module);
		$viewer->assign('RELATED_MODULES', $relatedModules);
		$viewer->assign('SKIP_MODULES', $skipModules);
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
		$viewer->view('SelectCampaignList.tpl', $module);

	}
}
