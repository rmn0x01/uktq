<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ukt extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("m_ukt");
        $this->load->library("form_validation");
        if($this->session->userdata('admin')!=TRUE){
			redirect(base_url('index.php/c_login/index_admin'));
		}
    }

    public function index(){
        $data['ukt2s'] = $this->m_ukt->getAll();
        $this->load->view("admin/ukt2/list", $data);
    }

    public function add(){
        $ukt2 = $this->m_ukt;
        $validation = $this->form_validation;
        $validation->set_rules($ukt2->rules());

        if ($validation->run()){
            $ukt2->save();
            $this->session->set_flashdata('success','Saved Successfully');
        }
        $this->load->view("admin/ukt2/new_form");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/c_ukt');

        $ukt2 = $this->m_ukt;
        $validation = $this->form_validation;
        $validation->set_rules($ukt2->rules());

        if ($validation->run()){
            $ukt2->update();
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data['ukt2'] = $ukt2->getById($id);
        if (!$data['ukt2']) show_404();

        $this->load->view("admin/ukt2/edit_form", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();
        if ($this->m_ukt->delete($id)){
            redirect(site_url('admin/c_ukt'));
        }
    }

}