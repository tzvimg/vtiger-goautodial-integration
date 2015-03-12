<?php
/*
* Delete a module
*/
include_once('vtlib/Vtiger/Module.php');

$module = Vtiger_Module::getInstance('GOcampaigns7');
if($module)
{
// Delete from system
$module->delete();
echo "Module deleted!";
} else {
echo "Module was not found and could not be deleted!";
}

