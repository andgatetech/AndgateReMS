<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pos extends CI_Controller {

    /**
     * Student Controller
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');

        // CHECK LOG IN STATUS
        if (!isset($this->session->userdata['logged_in'])) {
            // MUST NEED TO SET LOCATION AFTER need_login
            // location will be the this class name. all should be small letter.
            redirect("authentication/need_login");
        }
    }

    /**
     * function name: index
     * pram block :: block/file name
     * type :: string
     */
    public function index($orderid = null) {
        $data['module'] = "pos";

        // keep track of order data
        if(isset($orderid)){
        $data['orderid'] = $orderid;
        }


        // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;

        // get all tables
        $table = new Table();
        $tables = $table->get();
        $data['tables'] = $tables;

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }

   public function order_confirm($orderid = null) {
       $data['module'] = "pos";
       $data['action'] = "order_confirm";
       // load order
       if(isset($orderid)){
           $order = new Order($orderid);
           $data['order'] = $order;
       }
       // generate auto order id
       $this->load->helper('date');
       $data['ordernum'] = "ORD-".now();

       // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;

        // get all tables
        $table = new Table();
        $tables = $table->get();
        $data['tables'] = $tables;

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
       
   }
    public function order_finalize() {
        $data['module'] = "pos";
       $data['action'] = "order_finalize";
       // generate auto order id
       $this->load->helper('date');

       // if old order load
       if($_POST['orderid'] != null){
           $data['orderid'] = $_POST['orderid'];
       }else{
           $data['orderid'] = $_POST['ordernum'];
       }
       
       $data['ordertype'] = $_POST['orderType'];
       if(isset($_POST['table'])){
           $data['table'] = $_POST['table'];
       }
       
       // checking table is free on not.

       //vat      
       if(isset($_POST['vatparcentage'])){
           $data['vatparcentage'] = $_POST['vatparcentage'];
           $data['vatType'] = $_POST['vatType'];

       }


       // get vat
       $settings = new Settings();
       $settings->where('name', 'vat')->get();
       $data['vatparcentage'] = $settings->value;
       $total = $this->cart->format_number($this->cart->total());
       // Calculate the VAT on the total
       if($data['vatType'] == "exclusive"){
           $data['vat'] = $total * ($data['vatparcentage'] / 100);
            // The total including VAT
           $totalIncVat = $total + $data['vat'];
           $data['totalIncVat'] =  $totalIncVat ;
       }elseif($data['vatType'] == "inclusive"){
           $data['vat'] = $total * ($data['vatparcentage'] / 100);
            // The total including VAT
           $totalIncVat = $total;
           $data['totalIncVat'] =  $totalIncVat ;
       }
       

       
       // save order and item also
       if($_POST['orderid']!= null){
         $order = new Order($_POST['orderid']);
       }else{
           $order = new Order();
       }
       
       $order->ordernumber = $data['orderid'];
       $order->order_type = $data['ordertype'];
       $order->vatparcentage = $data['vatparcentage'];
       $order->subtotal = $total;
       $order->vat_tax = $data['vat'];
       $order->vat_type = $data['vatType'];
       $order->total = $data['totalIncVat'];
       $order->status = 'pending';
       $order->created_on = date('Y-m-d H:i:s');
       $order->save();
       $data['orderid'] = $order->id ;

       // save all order item
      // if order edit need to clean db order item before insert
        if($_POST['orderid']!= null){
         $orderitems = new Order_item();
         $orderitems->where('order_id', $_POST['orderid'])->get();
         // Loop through the all list and delete them one by one
        foreach ($orderitems->all as $oitem)
        {
            $oitem->delete();
        }
        
       }
      
       foreach ($this->cart->contents() as $items){
           
           $orderitem = new Order_item();
           
           
           $orderitem->order_id =  $order->id;
           $orderitem->item_id =  $items['id'];
           $orderitem->item_name =  $items['name'];
           $orderitem->item_type =  $items['type'];
           $orderitem->item_price =  $items['price'];
           $orderitem->item_quantity =  $items['qty'];
           $orderitem->total =  $this->cart->format_number($items['subtotal']);
           $orderitem->created_on = date('Y-m-d H:i:s');

           $orderitem->save();

       }



       // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;

        // get all tables
        $table = new Table();
        $tables = $table->get();
        $data['tables'] = $tables;

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }

    // order payment
   public function order_payment($orderid) {
       $data['module'] = "pos";
       $data['action'] = "order_payment";
       // generate auto order id
       $this->load->helper('date');
       $data['order'] = new Order();

       // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;

        // get all tables
        $table = new Table();
        $tables = $table->get();
        $data['tables'] = $tables;

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);

   }

    public function order_finished($orderid) {
       $data['module'] = "pos";
       $data['action'] = "order_reciept";

       // get post data
       $data['paymentType'] = $_POST['paymentType'];
       $data['paid'] = $_POST['provide'];

       // load order
        $order = new Order($orderid);
        $order->status = "paid";
        $order->payment_type = $_POST['paymentType'];
        $order->save();
        $data['order'] = $order;

        // load all order items
        $orderitem = new Order_item();
        $orderitem->where('order_id', $orderid);
        $orderitems = $orderitem->get();
        $data['orderitems'] = $orderitems;
        //$this->cart_destroy();

        // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;


        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);

        $this->cart->destroy();

    }

    // DEBUG:: function
    public function debug_cart_add_item() {
        $data = array(
            array(
                'id' => 'sku_123ABC',
                'qty' => 2,
                'price' => 10.050,
                'name' => 'T-Shirt',
                'options' => array('Size' => 'L', 'Color' => 'Red')
            ),
            array(
                'id' => 'sku_567ZYX',
                'qty' => 1,
                'price' => 9.95,
                'name' => 'Coffee Mug'
            ),
            array(
                'id' => 'sku_965QRS',
                'qty' => 3,
                'price' => 30.00,
                'name' => 'Shot Glass'
            )
        );

        $this->cart->insert($data);
    }
     public function cart_add_item($orderid = null) {
        $data['module'] = "pos";

        //get single item
        $singleitem = new Item($_POST['itemid']);
        $cartitem = array(
               'id'      => $singleitem->id,
               'name'    => $singleitem->title,
               'qty'     => 1,
               'price'   => $singleitem->price,
               'type'   => $singleitem->type,


            );

        $this->cart->insert($cartitem);

        $this->index($orderid);

   }

    public function cart_update_item($orderid= null) {
        $data['module'] = "pos";

        $cartitem = array();
        foreach($_POST as $row){
            array_push($cartitem, $row);
        }
        $this->cart->update($cartitem);

        $this->index($orderid);

    }
    
    public function cart_delete_item($rowid, $orderid = null) {
        $data['module'] = "pos";

        // remove item from cart
        $cartitem = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

        $this->cart->update($cartitem);

       $this->index($orderid);
    }
    public function cart_destroy() {
        $data['module'] = "pos";

        $this->cart->destroy();

        // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;

        // get all tables
        $table = new Table();
        $tables = $table->get();
        $data['tables'] = $tables;

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }
    // GET ORDER DETAILS
    public function get_order($orderid){
        // load order details
        $order = new Order($orderid);
        $data['order'] = $order;

        // load order related item
        $orderitem = new Order_item();
        $orderitems = $orderitem->where('order_id',$order->id)->get();
        $data['orderitems'] = $orderitems;

        return $data;


    }
    // LOAD ORDER
    public function load_order($orderid){
        $this->cart->destroy();
        $orderdata = $this->get_order($orderid);
        //echo "<pre>";
       // print_r($orderdata['orderitems']);
       // exit;
        // load items to cart
        foreach($orderdata['orderitems'] as $singleitem){
            $cartitem = array(
               'orderitemid'      => $singleitem->id,
               'id'      => $singleitem->item_id,
               'name'    => $singleitem->item_name,
               'qty'     => $singleitem->item_quantity 	,
               'price'   => $singleitem->item_price,
               'type'   => $singleitem->item_type,


            );

            $this->cart->insert($cartitem);
        }
         $this->index($orderid);
    }
	
	// DEBUG:: DELETE ALL ORDER
	public function clear_order(){
		$order = new Order();
		$order->get()->delete_all();
		
		$order_items = new Order_item();
                $order_items->get()->delete_all();
	}

}

// class

