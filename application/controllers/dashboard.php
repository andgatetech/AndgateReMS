<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        $data['module'] = "dashboard"; //test

        // last hour total sale
        $data['lastHourTotalSale'] = $this->sale_total_last_hour();
        $data['dailyTotalSale'] = $this->sale_total_daily();
        $data['weeklyTotalSale'] = $this->sale_total_weekly();
        $data['monthlyTotalSale'] = $this->sale_total_monthly();
        

        //get all order of today
        $today = date('Y-m-d');
        $todaydateformat = $today." 00:00:00";
        $order = new Order();
        $order->where('created_on >=', $todaydateformat);
        $data['orders']= $order->get();

        $this->load->view("template", $data);
    }

    // last hour total sale
    public function sale_total_last_hour() {
        $data['module'] = "dashboard"; //test

        //get all order of today
        $currethour = date('Y-m-d H:i:s');
        $lasthour = date('Y-m-d H:i:s', strtotime('-1 hour'));
        $order = new Order();
        $order->select_sum('total','lastHourTotal');
        $order->where_between('created_on', "'$lasthour'", "'$currethour'");
        $data['orders']= $order->get();
        if(empty($order->lastHourTotal)){
            return 0;
        }
       return $order->lastHourTotal;
    }
     // daily total sale
    public function sale_total_daily() {
        $data['module'] = "dashboard"; //test

        //get all order of today
        $currethour = date('Y-m-d H:i:s');
        $today = date('Y-m-d')." 00:00:00";
        $order = new Order();
        $order->select_sum('total','todayTotal');
        $order->where_between('created_on', "'$today'", "'$currethour'");
        $data['orders']= $order->get();
         if(empty($order->todayTotal)){
            return 0;
        }
       return $order->todayTotal;
    }
     // last week total sale
    public function sale_total_weekly() {
        $data['module'] = "dashboard"; //test

        //get all order of today
        $currethour = date('Y-m-d H:i:s');
        $weekstartday = date('Y-m-d H:i:s', strtotime('last Sunday', strtotime(date('Y-m-d').' 00:00:00')));
        $order = new Order();
        $order->select_sum('total','lastWeekTotal');
        $order->where_between('created_on', "'$weekstartday'", "'$currethour'");
        $data['orders']= $order->get();
         if(empty($order->lastWeekTotal)){
            return 0;
        }
        
       return $order->lastWeekTotal;
    }

     // monthly total sale
    public function sale_total_monthly() {
        $data['module'] = "dashboard"; //test

        //get all order of today
        $currethour = date('Y-m-d H:i:s');
        $monthstartdate = date('Y-m-d H:i:s', strtotime('first day of this month', strtotime(date('Y-m-d').' 00:00:00')));
        $order = new Order();
        $order->select_sum('total','thisMonthTotal');
        $order->where_between('created_on', "'$monthstartdate'", "'$currethour'");
        $data['orders']= $order->get();
         if(empty($order->thisMonthTotal)){
            return 0;
        }
       return $order->thisMonthTotal;
    }

}// class

