<?php 

class C_login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		if($this->session->userdata('status')=='login'){
			redirect(base_url('index.php/c_search'));
		  }

	}

	function index(){
		$this->load->view('v_login');
	}

	function index_admin(){
		$this->load->view('admin/login');
	}
	function register(){
		$this->load->view('v_register');
	}

	function aksi_login(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$where = array(
			'user_username' => htmlspecialchars($username),
			'user_password' => md5(htmlspecialchars($password))
			);
		$cek = $this->M_login->cek_login("tbl_user",$where)->num_rows();
		$cek = $this->M_login->cek_login("tbl_user",$where)->row();
		if($cek!=NULL){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/c_search"));

		}else{
			$data['message'] = "Username atau password salah!";
			$this->load->view('v_login',$data);
		}
	}

	function aksi_login_admin(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$where = array(
			'user_username' => htmlspecialchars($username),
			'user_password' => md5(htmlspecialchars($password))
		);
		$cek = $this->M_login->cek_login('tbl_user',$where)->row();
		if (($cek!=NULL) && ($cek->user_level==1)){
			$data_session = array(
				'nama' => $username,
				'status' => 'login',
				'admin' => TRUE
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/admin'));
		} else {
			$data['message'] = "Username atau password salah!";
			$this->load->view('admin/login',$data);
		}
	}

	function aksi_register(){
		$username = $this->input->post('username', TRUE);
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$where = array(
			'user_username' => htmlspecialchars($username)
		);
		$cek = $this->M_login->cek_login('tbl_user',$where)->num_rows();
		if($cek > 0){
			$data['message'] = "Username has already been used";
			$this->load->view('v_register',$data);
		} else {
			$data = array(
				'user_username' => htmlspecialchars($username),
				'user_email' => htmlspecialchars($email),
				'user_password' => md5(htmlspecialchars($password))
			);
			$cek = $this->M_login->register_data('tbl_user',$data);
			if($cek){
				$data['message'] = "Succesfully registered";
				$this->load->view('v_login',$data);
			}
		}
	}

	
}