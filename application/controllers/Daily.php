<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daily extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index(){
        $date7 = strtotime(date('D, Y-m-d'). ' + 7 days');
        $date1 = strtotime(date('D, Y-m-d'). ' + 7 days');
        $enrol = $this->crud_model->get_expiry_enrolment()->result_array();
        foreach($enrol as $en){
            $expiry_time = date('D, Y-m-d',$en['expiry_time']);
            $beforeday1 = strtotime($expiry_time. ' - 1 days');
            $beforeday7 = strtotime($expiry_time. ' - 7 days');
            if($date1 == $beforeday1 ^ $date7 == $en['expiry_time']){
                $this->email_model->course_expiry_notification($en['course_id'],$en['user_id']);
            }
        }
    }
}