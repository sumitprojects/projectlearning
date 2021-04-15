<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*  @author   : sumitmore
*  date    : 10 March, 2021
*/

class Course_Subscription extends CI_Controller
{

    protected $unique_identifier = "course_subscription";
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        /*ADDON SPECIFIC MODELS*/
        $this->load->model('addons/Course_Subscription_model','sub_model');

        // CHECK IF THE ADDON IS ACTIVE OR NOT
        $this->check_addon_status();
    }

        // CHECK IF THE ADDON IS ACTIVE OR NOT. IF NOT REDIRECT TO DASHBOARD
        public function check_addon_status() {
            $checker = array('unique_identifier' => $this->unique_identifier);
            $this->db->where($checker);
            $addon_details = $this->db->get('addons')->row_array();
            if ($addon_details['status']) {
                return true;
            }else{
                redirect(site_url(), 'refresh');
            }
        }

    // CERTIFICATE SETTINGS
    public function settings($param1= "") {
        if ($this->session->userdata('admin_login') != true) {
            redirect(site_url('login'), 'refresh');
        }

        if($param1 == 'update'){
            $this->sub_model->course_expiry_settings();
        }

        $page_data['page_name'] = 'course_subscription_settings';
        $page_data['page_title'] = get_phrase('course_subscription_settings');
        $this->load->view('backend/index.php', $page_data);
    }
}
