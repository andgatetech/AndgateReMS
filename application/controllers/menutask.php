<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menutask extends CI_Controller {

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
        $data['module'] = "tasks"; //test
        $data['action'] = 'view';
        $task = new Task();
        $tasks = $task->get();
        $data['tasks'] = $tasks;
        $this->load->view("template", $data);
    }

    // SAVE TASK
    public function save() {
        $data['module'] = "tasks"; //test
        $data['action'] = 'view';
        $task = new Task();
        $task->title = $_POST['title'];
         $task->desc = $_POST['desc'];
        $task->status = $_POST['status'];
         $task->assignee = $_POST['assignee'];
         $task->save();

        
        // get all tasks
         $tasks =  $task->get();
        $data['tasks'] =  $tasks;


        $data['msg'] = 'Task saved successfully.';
        $this->load->view("template", $data);
    }
    // DELETE TASK
    public function delete($taskid) {
        $data['module'] = "tasks"; //test
        $data['action'] = 'view';

        $task = new Task($taskid);
        $task->delete();
        // get all tasks
        $tasks = $task->get();
        $data['tasks'] = $tasks;
        $data['msg'] = 'Task delelted successfully.';
        $this->load->view("template", $data);
    }

   // EDIT ITEM
    public function edit($taskid) {
        $data['module'] = "tasks"; //test
        $data['action'] = 'edit';

        

        $singletask = new Task($taskid);
        // get single items
        $data['singletask'] = $singletask;

      
        $task = new Task($taskid);
        // get all taks
         $tasks =  $task->get();
        $data['tasks'] = $tasks;
        $this->load->view("template", $data);
    }

     // SAVE ITEM
    public function edit_success() {
        $data['module'] = "tasks"; //test
        $data['action'] = 'view';
        $task= new Task($_POST['id']);
        $task->title = $_POST['title'];
       $task->desc = $_POST['desc'];
         $task->status = $_POST['status'];
         $task->assignee = $_POST['assignee'];
         $task->save();

       
        // get all tasks
         $tasks =  $task->get();
        $data['tasks'] =  $tasks;
        $data['msg'] = 'Task update successfully.';
        $this->load->view("template", $data);
    }




}// class

