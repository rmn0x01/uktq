<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_search extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->output->set_header('Access-Control-Allow-Origin: *');
    if($this->session->userdata('status')!='login'){
      redirect(base_url('index.php/c_login'));
    }
  }

  public function index(){
    // load base_url 
    $this->load->helper('url');
   
    //load model 
    $this->load->model('M_search');
   
    // get cities 
    $data['universitas'] = $this->M_search->getUniv();
   
    // load view 
    $this->load->view('v_search',$data); 
  }

  public function getFakultas(){ 
    // POST data 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('M_search');
    
    // get data 
    $data = $this->M_search->getFakultas($postData);
    echo json_encode($data); 
  }

  public function getProdi(){ 
    // POST data 
    $postData = $this->input->post();

    // load model 
    $this->load->model('M_search');
    
    // get data 
    $data = $this->M_search->getProdi($postData);
    echo json_encode($data); 
  }
} 