<?php
// action type
if(isset($action)){
	switch($action){
		case "insert":
			$this->load->view('task/task_insert');
		break;
		
		case "edit":
			$this->load->view('task/task_edit');
		break;
		
		default:
			$this->load->view('task/task_insert');
		break;
	}

}

?>
