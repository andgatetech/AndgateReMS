<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authentication extends CI_Controller {

    /**
     * Authentication Controller
     * Developed by: Andgate Technologies
     * Email: andgatetech@gmail.com
     */
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view("login");
    }

    public function login() {
        $userid = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
        $user = new User();

        $user->name = $userid;
        $user->password = $password;




        // CHECK USER ID, AND PASSWORD
       if ($user->login()) {
        //if (true) { //test case
            // CHECK USER  TYPE
            $reuser = new User();
            $reuser->where('name', $userid);
            $reuser->where('password', $password);
            $reuser->get();
            // find user type

                // FINALLY MATCH USER ID , PASSWORD AND TYPE
                $logstatus = TRUE;
                // SET SESSION
                $userdata = array(
                    'userid' => $reuser->id,
                    'username' => $reuser->name,
                    'email' => $reuser->email,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($userdata);
            
        } else {
            // USER ID OR PASSWORD NOT MATCH
            $data['error'] = "Wrong User ID or Password.";
            $logstatus = FALSE;
        }

        // IF MATCH
        if ($logstatus) {
            // IF LOGIN REQUEST COMES FROM LOCATION (PAGE/CONTROLLER)
            // THEN JUST NEED TO REDIRECT TO THE DESIRE LOCATION
            redirect('dashboard/index');
            
        } else {
            // IF USER OR PASSWORD OR TYPE NOT MATCH
            $this->load->view("login", $data);
            
        }
    }

    public function login_superadmin() {
        $userid = $this->input->post('userid');
        $password = md5($this->input->post('password'));
        $type = $this->input->post('type');
     


        $user = new User();

        $user->user_name = $userid;
        $user->user_password = $password;




        // CHECK USER ID, AND PASSWORD
        if ($user->login()) {
           
            // CHECK USER  TYPE
            $reuser = new User();
            $reuser->where('user_name', $userid);
            $reuser->where('user_password', $password);
            $reuser->get();
            // find user type
            $reuser_type = $reuser->user_type->type;

            if ($reuser_type === $type) {
                // FINALLY MATCH USER ID , PASSWORD AND TYPE
                $logstatus = TRUE;
                // SET SESSION
                $userdata = array(
                    'userid' => $reuser->id,
                    'username' => $reuser->user_name,
                    'email' => $reuser->user_email,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($userdata);
            } else {
                // USER TYPE NOT MATCH
                $data['error'] = "Wrong User Type.<br> Try again.";
                $logstatus = FALSE;
            }
        } else {
           
            // USER ID OR PASSWORD NOT MATCH
            $data['error'] = "Wrong User ID or Password.<br> Try again.";
            $logstatus = FALSE;
        }
        
        // IF MATCH
        if ($logstatus) {
            // IF LOGIN REQUEST COMES FROM LOCATION (PAGE/CONTROLLER)
            // THEN JUST NEED TO REDIRECT TO THE DESIRE LOCATION
            if (!empty($page_location)) {
                //echo $page_location;
                redirect($page_location);
            } else {
                switch ($type) {

                    case "superadmin":
                        redirect('superadmin/panel');
                        // $this->load->view("teacher_panel/index");
                        break;
                    default:
                        redirect('superadmin/logbox');
                        // $this->load->view("visitor/index");
                        break;
                }
            }
        } else {
            // IF USER OR PASSWORD OR TYPE NOT MATCH
            switch ($type) {
                case "superadmin":
                    $this->load->view("superadmin/logbox", $data);
                    break;
                default:
                    $this->load->view("superadmin/logbox", $data);
                    break;
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $data['error'] = "Your are logged out. Need to log in again.";    
        $this->load->view("login", $data);
    
    }

    public function need_login($location = NULL) {
        $data['error'] = "Need to log in to get access.";
         $this->load->view("login", $data);

            
    }

    public function login_old() {
        // take user id name and password

        $user = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        $logstatus = $this->load->model();

        if ($logstatus) {
            // get type
            switch ($type) {
                case 'student':
                    $this->template->setTemplatePath('$visitor');
                    $this->template->setLayout('home');
                    break;

                case 'teacher':
                    $this->template->setLayout('myhome');
                    break;
            }
        }

        $this->template->setLayout('myhome');
        $this->template->view();
        //$this->load->view('visitor/home');
    }

}

/* End of file authentication.php */
/* Location: ./application/controllers/authentication.php */