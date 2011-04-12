<?php
class Editabledt_Controller_REST extends Kohana_Controller_REST{
	
	function before(){
		parent::before();		
		ORM::factory($this->_action_requested)->validatePermissions($this->request->action());
	}

	function action_index($id = null){
		$return = array();
		if(!is_null($id)){
				$return[] = ORM::factory($this->_action_requested, $id)->as_array();
		}else{
			$asdf = ORM::factory($this->_action_requested)->limit(20)->find_all()->cached();

			foreach ($asdf as $val){
				$return[] = $val->as_array();
			}
		}

		$this->response->body(json_encode($return));
	}
	
	function action_create(){
		
	}
	
	function action_update(){
		
	}
	
	function action_delete(){
		
	}

}