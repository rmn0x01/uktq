<?php

class C_overview extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('admin')!=TRUE){
			redirect(base_url('index.php/c_login/index_admin'));
		}
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/v_overview");
	}
}