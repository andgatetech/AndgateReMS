<?php
// action type
if(isset($action)){
	switch($action){
		case "insert":
			$this->load->view('items/item_insert');
		break;
		
		case "edit":
			$this->load->view('items/item_edit');
		break;
		
		default:
			$this->load->view('items/item_insert');
		break;
	}

}

?>
