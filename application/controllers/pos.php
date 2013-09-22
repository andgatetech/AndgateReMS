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
    public function index() {
        $data['module'] = "pos";

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

   public function order_confirm() {
       $data['module'] = "pos";
       $data['action'] = "order_confirm";
       // generate auto order id
       $this->load->helper('date');
       $data['orderid'] = "ORD-".now();

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
       $data['orderid'] = $_POST['ordernum'];
       $data['ordertype'] = $_POST['orderType'];


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
    public function order_finished() {
        $this->cart_destroy();
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
     public function cart_add_item() {
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

    public function cart_update_item() {
        $data['module'] = "pos";

        $cartitem = array();
        foreach($_POST as $row){
            array_push($cartitem, $row);
        }
        $this->cart->update($cartitem);

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
    public function cart_delete_item() {
        $data['module'] = "pos";

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

}

// class

