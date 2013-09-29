<?php
// action type
if(isset($action)){
	switch($action){
		case "order_confirm":
			$this->load->view('pos/order_confirm');
		break;
		
		case "order_finalize":
			$this->load->view('pos/order_finalize');
		break;
		
		case "order_reciept":
			$this->load->view('pos/order_reciept');
		break;
		
		default:
			$this->load->view('pos/cart');
		break;
	}

}else{
	$this->load->view('pos/cart');
}

?>