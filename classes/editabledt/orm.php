<?php
class Editabledt_ORM extends Kohana_ORM{
	protected $_required_group = array('update' => 'admin', 'create' => 'admin', 'delete' => 'admin');
	
	function validatePermissions($action){
		if(isset($this->_required_group[$action])){
			if(!Auth::instance()->logged_in($this->_required_group[$action])){
				throw new Exception('unauthorized');
			}
		}
	}
}