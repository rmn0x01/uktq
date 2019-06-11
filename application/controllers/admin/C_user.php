<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("m_login");
        $this->load->library("form_validation");
        if($this->session->userdata('admin')!=TRUE){
			redirect(base_url('index.php/c_login/index_admin'));
		}
    }

    public function index(){
        $data['users'] = $this->m_login->getAll();
        $this->load->view("admin/user/list", $data);
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/c_user');

        $users = $this->m_login;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

        if ($validation->run()){
            $users->update();
            $this->session->set_flashdata('success', 'Saved Successfully');
        }

        $data['user'] = $users->getById($id);
        if (!$data['user']) show_404();

        $this->load->view("admin/user/edit_form", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();
        if ($this->m_user->delete($id)){
            redirect(site_url('admin/c_user'));
        }
    }

}