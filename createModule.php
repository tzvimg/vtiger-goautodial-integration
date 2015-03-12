<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//set_include_path (get_include_path() .PATH_SEPARATOR.'/var/www/html/vtiger') ;

include_once 'vtlib/Vtiger/Module.php';


// Configuration:

$host = 'localhost';
$username = 'root';
$password = 'vicidialnow';
$db_name = 'asterisk';

$Vtiger_Utils_Log = true;

$table_name = "vicidial_campaigns";
$MODULENAME = 'GOcampaigns8';
$identifier = 'campaign_name';

$filter_fields = array('campaign_id','campaign_name','active');

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


$moduleInstance = Vtiger_Module::getInstance($MODULENAME);
if ($moduleInstance || file_exists('modules/'.$MODULENAME)) {
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
			$block->addField($$field['COLUMN_NAME']);
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
        $filter1->addField($mfield1, 0);
		
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
        echo "OK\n";
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
			$columntype = 'datetime('.$field['CHARACTER_MAXIMUM_LENGTH'].')';
			$typeofdata = 'T';
			$uitype = '70';
		break;
		default:		
			$typeofdata = 'T';		
		}
		
		if ($field['IS_NULLABLE'] == 'YES')
			$typeofdata.='~O';
		else if ($field['IS_NULLABLE'] == 'NO')
			$typeofdata.='~M';
		
	return array('columntype' =>$columntype,'typeofdata' => $typeofdata,'uitype' => $uitype );	
}


