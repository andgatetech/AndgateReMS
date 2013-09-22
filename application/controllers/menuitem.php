<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menuitem extends CI_Controller {

    /**
     * rent::__construct();
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
        $data['module'] = "items"; //test
        $data['action'] = 'view';
        
        // get all items types
        $item_type = new Item_type();
        $item_types = $item_type->get();
        $data['item_types'] = $item_types;

        $item = new Item();
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }

    // SAVE ITEM
    public function save() {
        $data['module'] = "items"; //test
        $data['action'] = 'view';
         // get all items types
       
        $item_type = new Item_type();
        $item_types = $item_type->get();
        $data['item_types'] = $item_types;

        $item = new Item();
        $item->title = $_POST['title'];
        $item->description = $_POST['desc'];
        $item->price = $_POST['price'];
        $item->type = $_POST['type'];
        $item->save();
        // get all items
        $items = $item->get();
        $data['items'] = $items;
        $data['msg'] = 'Item saved successfully.';
        $this->load->view("template", $data);
    }
    // DELETE ITEM
    public function delete($itemid) {
        $data['module'] = "items"; //test
        $data['action'] = 'view';

         // get all items types
        $item_type = new Item_type();
        $item_types = $item_type->get();
        $data['item_types'] = $item_types;

        $item = new Item($itemid);
        $item->delete();
        // get all items
        $items = $item->get();
        $data['items'] = $items;
        $data['msg'] = 'Item delelted successfully.';
        $this->load->view("template", $data);
    }

   // EDIT ITEM
    public function edit($itemid) {
        $data['module'] = "items"; //test
        $data['action'] = 'edit';

         // get all items types
        $item_type = new Item_type();
        $item_types = $item_type->get();
        $data['item_types'] = $item_types;

        $singleitem = new Item($itemid);
        // get single items
        $data['singleitem'] = $singleitem;


        $item = new Item($itemid);
        // get all items
        $items = $item->get();
        $data['items'] = $items;
        $this->load->view("template", $data);
    }

     // SAVE ITEM
    public function edit_success() {
        $data['module'] = "items"; //test
        $data['action'] = 'view';
         // get all items types
        $item_type = new Item_type();
        $item_types = $item_type->get();
        $data['item_types'] = $item_types;

        $item = new Item($_POST['id']);
        $item->title = $_POST['title'];
        $item->description = $_POST['desc'];
        $item->price = $_POST['price'];
        $item->type = $_POST['type'];
        $item->save();
        // get all items
        $items = $item->get();
        $data['items'] = $items;
        $data['msg'] = 'Item update successfully.';
        $this->load->view("template", $data);
    }




}// class

