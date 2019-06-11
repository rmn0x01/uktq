<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_search extends CI_Controller {
	
	public function __construct(){
		parent::__construct();		
				$this->load->model('M_search');
				$this->load->model('M_userlog');
        if($this->session->userdata('status')!='login'){
			redirect(base_url());
		  }
	}

	public function index(){
		$data['ukt'] = 'starter';
		$this->load->view('v_search_index', $data);
    }
    
    public function show_all(){
				$userlogid = uniqid();
				$username = $this->session->userdata('nama');
				$timestamp = date("Y-m-d H:i:s");
				$data = array(
					'userlog_id' => $userlogid,
					'userlog_username' => $username,
					'userlog_activity' => 'view_all',
					'userlog_time' => $timestamp
				);
				$cek = $this->M_userlog->insertlog($data);

				
        $data['ukt'] = $this->M_search->view();
        $this->load->view('v_search_index', $data);
    }
	
	public function search(){
		// Ambil data yang dikirim via ajax post
		$userlogid = uniqid();
		$keyword = $this->input->post('keyword', TRUE);
		$username = $this->session->userdata('nama');
		date_default_timezone_set("Asia/Bangkok");
		$timestamp = date("Y-m-d H:i:s");
		$data = array(
			'userlog_id' => $userlogid,
			'userlog_username' => $username,
			'userlog_activity' => 'search',
			'userlog_query' => htmlspecialchars($keyword),
			'userlog_time' => $timestamp
		);
		$cek = $this->M_userlog->insertlog($data);
		$ukt = $this->M_search->search($keyword);
		
		// load file view.php sambil mengirim data siswa hasil query function search di M_search
		$hasil = $this->load->view('v_search_result', array('ukt'=>$ukt), true);
		
		// array
		$callback = array(
			'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
		);

		echo json_encode($callback); // konversi variabel $callback menjadi JSON
	}
}
