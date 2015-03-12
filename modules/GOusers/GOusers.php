
<?php

include_once 'modules/Vtiger/CRMEntity.php';

class GOusers extends Vtiger_CRMEntity {
	var $table_name = 'vtiger_gousers';
	var $table_index= 'gousersid';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var $customFieldTable = Array('vtiger_gouserscf', 'gousersid');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var $tab_name = Array('vtiger_crmentity', 'vtiger_gousers', 'vtiger_gouserscf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var $tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_gousers' => 'gousersid',
		'vtiger_gouserscf'=>'gousersid');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var $list_fields = Array (
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'user' => Array('gousers', '<entitycolumn>'),
		'Assigned To' => Array('crmentity','smownerid')
	);
	var $list_fields_name = Array (
		/* Format: Field Label => fieldname */
		'user' => 'user',
		'Assigned To' => 'assigned_user_id',
	);

	// Make the field link to detail view
	var $list_link_field = 'user';

	// For Popup listview and UI type support
	var $search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'user' => Array('gousers', '<entitycolumn>'),
		'Assigned To' => Array('vtiger_crmentity','assigned_user_id'),
	);
	var $search_fields_name = Array (
		/* Format: Field Label => fieldname */
		'user' => 'user',
		'Assigned To' => 'assigned_user_id',
	);

	// For Popup window record selection
	var $popup_fields = Array ('user');

	// For Alphabetical search
	var $def_basicsearch_col = 'user';

	// Column value to use on detail view record text display
	var $def_detailview_recname = 'user';

	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	var $mandatory_fields = Array('user','assigned_user_id');

	var $default_order_by = 'user';
	var $default_sort_order='ASC';

	/**
	* Invoked when special actions are performed on the module.
	* @param String Module name
	* @param String Event Type
	*/
	function vtlib_handler($moduleName, $eventType) {
		global $adb;
		if($eventType == 'module.postinstall') {
			// TODO Handle actions after this module is installed.
		} else if($eventType == 'module.disabled') {
			// TODO Handle actions before this module is being uninstalled.
		} else if($eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
		} else if($eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
		} else if($eventType == 'module.postupdate') {
			// TODO Handle actions after this module is updated.
		}
	}
	
	function save_module(){
		
		include_once '/var/www/html/mySOAP/lib/nusoap.php' ;
		
		$url = 'http://128.199.48.154/mySOAP/index.php?wsdl';				 
		$client = new nusoap_client($url);				 
		$err = $client->getError();				 
		if ($err) {
			echo '<p><b>Error: ' . $err . '</b></p>';
		}
		
		$data = $this->column_fields;
		unset($data['assigned_user_id']);
		unset($data['CreatedTime']);
		unset($data['ModifiedTime']);
		unset($data['createdtime']);
		unset($data['modifiedtime']);
		unset($data['modifiedby']);

		$data['user_id'] = $this->id;
		
		$return = $client->call('create', array('entity_name'=>'vicidial_users','data' => $data));
		 
		$query = json_decode($return,1);
		//echo '<p>Value returned from the server is: </p>';
		//var_dump($res);

		

		$db = new mysqli(localhost, root, vicidialnow, asterisk);

		if($db->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
		}
		$db->set_charset('utf8');


		if(!$result = $db->query($query)){
			//die('There was an error running the query [' . $db->error . ']');
		}
		
		if ($db->affected_rows > 0)
			return true;
		else
			return false;
	}
}
		