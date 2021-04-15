<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_Subscription_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    public function course_expiry_settings(){
        $data['course_expiry_notice'] = html_escape($this->input->post('course_expiry_notice'));
        $this->db->where('key', 'course_expiry_notice');
        $this->db->update('frontend_settings', $data);
    }
}
