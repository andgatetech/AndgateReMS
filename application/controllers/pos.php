<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pos extends CI_Controller {

    /**
     * Student Controller
     */
    public function __construct() {
        parent::__construct();
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

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }
     public function order_reciept() {
        $data['module'] = "report";
        $data['submodule'] = "order_reciept";

        // get all item category
        $item_category = new Item_category();
        $item_categories = $item_category->get();
        $data['item_categories'] = $item_categories;

        // get all items
        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }

}// class

