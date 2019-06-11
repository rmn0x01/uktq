<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		if($this->session->userdata('status')=='login'){
			redirect(base_url('index.php/c_search'));
		  }
	}
	public function index()
	{
		$this->load->view('v_welcome');
	}
}
