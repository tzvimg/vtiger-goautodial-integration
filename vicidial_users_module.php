<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//set_include_path (get_include_path() .PATH_SEPARATOR.'/var/www/html/vtiger') ;

include_once 'vtlib/Vtiger/Module.php';


// Configuration:
//DB
$host = 'localhost';
$username = 'root';
$password = 'vicidialnow';
$db_name = 'asterisk';


//Source details
$table_name = "vicidial_inbound_groups";
$MODULENAME = 'GOinboundGroups';
$identifier = 'group_name';
$id_field = 'group_id';

$SOAP_url = 'http://128.199.48.154/mySOAP/index.php?wsdl';

$Vtiger_Utils_Log = true;
$filter_fields = array('user','full_name','user_group','phone_login');




$db = new mysqli($host, $username, $password, $db_name);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    select * from information_schema.`COLUMNS` where TABLE_NAME = '$table_name'
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}


function getVtigerProperties($field){
	
	switch ($field['DATA_TYPE']){
		case 'int':
		case 'tinyint':
			$columntype = 'int';
			$typeofdata = 'N';
			$uitype = '2';
		break;
		case 'varchar':
			$columntype = 'varchar('.$field['CHARACTER_MAXIMUM_LENGTH'].')';
			$typeofdata = 'V';
			$uitype = '2';
		break;
		case 'datetime':
			$columntype = 'datetime';
			$typeofdata = 'D';
			$uitype = '70';
		break;
		case 'enum':
			$columntype = 'varchar('.$field['CHARACTER_MAXIMUM_LENGTH'].')';
			$typeofdata = 'V';
			$uitype = '15';
		break;
		default:		
			$typeofdata = 'V';		
		}
		
		if ($field['IS_NULLABLE'] == 'YES')
			$typeofdata.='~O';
		else if ($field['IS_NULLABLE'] == 'NO')
			$typeofdata.='~M';
		
	return array('columntype' =>$columntype,'typeofdata' => $typeofdata,'uitype' => $uitype );	
}

function getValuesFromEnum($enum){

	if (($tmp = strstr($enum, '(')) !== false) {
	    $enum = substr(substr($tmp, 1),0,-1);
	}
	$arr = explode(',',$enum);
	$arr = str_replace(array('\'', '"'), '', $arr);

	return $arr;
}


$moduleInstance = Vtiger_Module::getInstance($MODULENAME);
if ($moduleInstance || file_exists('/modules/'.$MODULENAME)) {
        echo "Module already present - choose a different name.";
} else {
        $moduleInstance = new Vtiger_Module();
        $moduleInstance->name = $MODULENAME;
        $moduleInstance->parent= 'Tools';
        $moduleInstance->save();

        // Schema Setup
        $moduleInstance->initTables();

        // Field Setup
        $block = new Vtiger_Block();
        $block->label = 'LBL_'. strtoupper($moduleInstance->name) . '_INFORMATION';
        $moduleInstance->addBlock($block);

        $blockcf = new Vtiger_Block();
        $blockcf->label = 'LBL_CUSTOM_INFORMATION';
        $moduleInstance->addBlock($blockcf);
		
		while($field = $result->fetch_assoc()){	
			//$row['VTIGER_properties'] = getVtigerProperties($row);    
			//$res[] =  $row;
			$fieldProperties = getVtigerProperties($field);
			$$field['COLUMN_NAME']  = new Vtiger_Field();
			$$field['COLUMN_NAME']->name = $field['COLUMN_NAME'];
			$$field['COLUMN_NAME']->label= $field['COLUMN_NAME'];
			$$field['COLUMN_NAME']->uitype= $fieldProperties['uitype'];
			$$field['COLUMN_NAME']->column = $field['COLUMN_NAME']->name;
			$$field['COLUMN_NAME']->columntype = $fieldProperties['columntype'];
			$$field['COLUMN_NAME']->typeofdata = $fieldProperties['typeofdata'];
			$$field['COLUMN_NAME']->defaultvalue = 	$field['COLUMN_DEFAULT'];
			$block->addField($$field['COLUMN_NAME']);
			if ($field['DATA_TYPE'] == 'enum'){				
				$$field['COLUMN_NAME']->setPicklistValues( getValuesFromEnum($field['COLUMN_TYPE']) );
			}
			var_dump(getValuesFromEnum($field['COLUMN_TYPE'])	);
			
		}
				
		
		
		
		// Recommended common fields every Entity module should have (linked to core table)
        $mfield1 = new Vtiger_Field();
        $mfield1->name = 'assigned_user_id';
        $mfield1->label = 'Assigned To';
        $mfield1->table = 'vtiger_crmentity';
        $mfield1->column = 'smownerid';
        $mfield1->uitype = 53;
        $mfield1->typeofdata = 'V~M';
        $block->addField($mfield1);

        $mfield2 = new Vtiger_Field();
        $mfield2->name = 'CreatedTime';
        $mfield2->label= 'Created Time';
        $mfield2->table = 'vtiger_crmentity';
        $mfield2->column = 'createdtime';
        $mfield2->uitype = 70;
        $mfield2->typeofdata = 'T~O';
        $mfield2->displaytype= 2;
        $block->addField($mfield2);

        $mfield3 = new Vtiger_Field();
        $mfield3->name = 'ModifiedTime';
        $mfield3->label= 'Modified Time';
        $mfield3->table = 'vtiger_crmentity';
        $mfield3->column = 'modifiedtime';
        $mfield3->uitype = 70;
        $mfield3->typeofdata = 'T~O';
        $mfield3->displaytype= 2;
        $block->addField($mfield3);

        // Filter Setup
        $filter1 = new Vtiger_Filter();
        $filter1->name = 'All';
        $filter1->isdefault = true;
        $moduleInstance->addFilter($filter1);
        $filter1->addField($mfield1, 3);
		
		$i = 1;
		foreach ($filter_fields as $field){
			if (isset($$field))
				$filter1->addField($$field, $i);
			$i++;
		}
		
		$moduleInstance->setEntityIdentifier($$identifier);
		
        // Sharing Access Setup
        $moduleInstance->setDefaultSharing();

        // Webservice Setup
        $moduleInstance->initWebservice();

        mkdir('modules/'.$MODULENAME);
        



		$content = "
<?php

include_once 'modules/Vtiger/CRMEntity.php';

class $MODULENAME extends Vtiger_CRMEntity {
	var \$table_name = 'vtiger_<modulename>';
	var \$table_index= '<modulename>id';

	/**
	 * Mandatory table for supporting custom fields.
	 */
	var \$customFieldTable = Array('vtiger_<modulename>cf', '<modulename>id');

	/**
	 * Mandatory for Saving, Include tables related to this module.
	 */
	var \$tab_name = Array('vtiger_crmentity', 'vtiger_<modulename>', 'vtiger_<modulename>cf');

	/**
	 * Mandatory for Saving, Include tablename and tablekey columnname here.
	 */
	var \$tab_name_index = Array(
		'vtiger_crmentity' => 'crmid',
		'vtiger_<modulename>' => '<modulename>id',
		'vtiger_<modulename>cf'=>'<modulename>id');

	/**
	 * Mandatory for Listing (Related listview)
	 */
	var \$list_fields = Array (
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'<entityfieldlabel>' => Array('<modulename>', '<entitycolumn>'),
		'Assigned To' => Array('crmentity','smownerid')
	);
	var \$list_fields_name = Array (
		/* Format: Field Label => fieldname */
		'<entityfieldlabel>' => '<entityfieldname>',
		'Assigned To' => 'assigned_user_id',
	);

	// Make the field link to detail view
	var \$list_link_field = '<entityfieldname>';

	// For Popup listview and UI type support
	var \$search_fields = Array(
		/* Format: Field Label => Array(tablename, columnname) */
		// tablename should not have prefix 'vtiger_'
		'<entityfieldlabel>' => Array('<modulename>', '<entitycolumn>'),
		'Assigned To' => Array('vtiger_crmentity','assigned_user_id'),
	);
	var \$search_fields_name = Array (
		/* Format: Field Label => fieldname */
		'<entityfieldlabel>' => '<entityfieldname>',
		'Assigned To' => 'assigned_user_id',
	);

	// For Popup window record selection
	var \$popup_fields = Array ('<entityfieldname>');

	// For Alphabetical search
	var \$def_basicsearch_col = '<entityfieldname>';

	// Column value to use on detail view record text display
	var \$def_detailview_recname = '<entityfieldname>';

	// Used when enabling/disabling the mandatory fields for the module.
	// Refers to vtiger_field.fieldname values.
	var \$mandatory_fields = Array('<entityfieldname>','assigned_user_id');

	var \$default_order_by = '<entityfieldname>';
	var \$default_sort_order='ASC';

	/**
	* Invoked when special actions are performed on the module.
	* @param String Module name
	* @param String Event Type
	*/
	function vtlib_handler(\$moduleName, \$eventType) {
		global \$adb;
		if(\$eventType == 'module.postinstall') {
			// TODO Handle actions after this module is installed.
		} else if(\$eventType == 'module.disabled') {
			// TODO Handle actions before this module is being uninstalled.
		} else if(\$eventType == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
		} else if(\$eventType == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
		} else if(\$eventType == 'module.postupdate') {
			// TODO Handle actions after this module is updated.
		}
	}
	
	function save_module(){
		
		include_once '/var/www/html/mySOAP/lib/nusoap.php' ;
		
		\$url = '".$SOAP_url."';				 
		\$client = new nusoap_client(\$url);				 
		\$err = \$client->getError();				 
		if (\$err) {
			echo '<p><b>Error: ' . \$err . '</b></p>';
		}
		
		\$data = \$this->column_fields;
		unset(\$data['assigned_user_id']);
		unset(\$data['CreatedTime']);
		unset(\$data['ModifiedTime']);
		unset(\$data['createdtime']);
		unset(\$data['modifiedtime']);
		unset(\$data['modifiedby']);

		\$data['".$id_field."'] = \$this->id;
		
		\$return = \$client->call('create', array('entity_name'=>'".$table_name."','data' => \$data));
		 
		\$return = json_decode(\$return,1);
		
		if (\$return['status'] == 'success')
			return true;
		else
			die('Connection to goautodial failed');
	}
}
		";

		$content = str_replace("<modulename>",strtolower($MODULENAME),$content);
		$content = str_replace("<entityfieldname>",$identifier,$content);
		$content = str_replace("<entityfieldlabel>",$identifier,$content);

		//echo $content;
		$fp = fopen('modules/'.$MODULENAME."/".$MODULENAME.".php","wb");
		$status = fwrite($fp,$content);
		var_dump($status);
		fclose($fp);

	echo "OK\n";


}
