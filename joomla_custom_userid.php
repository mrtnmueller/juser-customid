<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

// Import library dependencies
jimport('joomla.event.plugin');

class plgUserJoomla_Custom_Userid extends JPlugin
{

	function onUserBeforeSave($user, $isNew, $futureData){
		
		$dbtype = JFactory::getConfig()->getValue('dbtype');
		if($dbtype != 'mysql' && $dbtype != 'mysqli') return;
		$method = $this->params->get('generationMethod');
		
		if($method == 1 && $isNew){
			
			while(1){
				
				$randomId = rand(100,999999);
				$table = JUser::getTable();
				
				//id already taken
				if($table->load($randomId)){
					continue;
				}
				//id is free
				else{
					$db =& JFactory::getDBO();
					$query = "SET INSERT_ID = $randomId;";
					$db->setQuery($query);
					$db->query();
					break;
				}
			}
		}
		
	}

}
?>