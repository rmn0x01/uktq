<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_log extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("m_userlog");
        $this->load->library("form_validation");
        if($this->session->userdata('admin')!=TRUE){
			redirect(base_url('index.php/c_login/index_admin'));
		}
    }

    public function index(){
        $data['logs'] = $this->m_userlog->getAll();
        $this->load->view("admin/logs/list", $data);
    }
}
?>