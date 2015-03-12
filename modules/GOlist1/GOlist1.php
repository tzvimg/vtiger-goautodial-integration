
		<?php

		include_once 'modules/Vtiger/CRMEntity.php';

		class GOlist1 extends Vtiger_CRMEntity {
			var $table_name = 'vtiger_golist1';
			var $table_index= 'golist1id';

			/**
			 * Mandatory table for supporting custom fields.
			 */
			var $customFieldTable = Array('vtiger_golist1cf', 'golist1id');

			/**
			 * Mandatory for Saving, Include tables related to this module.
			 */
			var $tab_name = Array('vtiger_crmentity', 'vtiger_golist1', 'vtiger_golist1cf');

			/**
			 * Mandatory for Saving, Include tablename and tablekey columnname here.
			 */
			var $tab_name_index = Array(
				'vtiger_crmentity' => 'crmid',
				'vtiger_golist1' => 'golist1id',
				'vtiger_golist1cf'=>'golist1id');

			/**
			 * Mandatory for Listing (Related listview)
			 */
			var $list_fields = Array (
				/* Format: Field Label => Array(tablename, columnname) */
				// tablename should not have prefix 'vtiger_'
				'campaign_name' => Array('golist1', '<entitycolumn>'),
				'Assigned To' => Array('crmentity','smownerid')
			);
			var $list_fields_name = Array (
				/* Format: Field Label => fieldname */
				'campaign_name' => 'campaign_name',
				'Assigned To' => 'assigned_user_id',
			);

			// Make the field link to detail view
			var $list_link_field = 'campaign_name';

			// For Popup listview and UI type support
			var $search_fields = Array(
				/* Format: Field Label => Array(tablename, columnname) */
				// tablename should not have prefix 'vtiger_'
				'campaign_name' => Array('golist1', '<entitycolumn>'),
				'Assigned To' => Array('vtiger_crmentity','assigned_user_id'),
			);
			var $search_fields_name = Array (
				/* Format: Field Label => fieldname */
				'campaign_name' => 'campaign_name',
				'Assigned To' => 'assigned_user_id',
			);

			// For Popup window record selection
			var $popup_fields = Array ('campaign_name');

			// For Alphabetical search
			var $def_basicsearch_col = 'campaign_name';

			// Column value to use on detail view record text display
			var $def_detailview_recname = 'campaign_name';

			// Used when enabling/disabling the mandatory fields for the module.
			// Refers to vtiger_field.fieldname values.
			var $mandatory_fields = Array('campaign_name','assigned_user_id');

			var $default_order_by = 'campaign_name';
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
				
				$url = "http://128.199.48.154/mySOAP/index.php?wsdl";				 
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


				$return = $client->call('create', array('entity_name'=>'vicidial_lists',"data" => $data));
				 
				$return = json_decode($return,1);
		
				if ($return['status'] == 'success')
					return true;
				else {
						var_dump($return);
					die("Connection to goautodial failed");
				}


				
			}
			
			

		}
		
