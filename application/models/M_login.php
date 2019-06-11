<?php 

class M_login extends CI_Model{	
	private $_table = 'tbl_user';

	public $user_username;
	public $user_email;

	public function rules(){
		return [
			[
				'field' => 'user_username',
				'label' => 'Username',
				'rules' => 'required'
			],
			[
				'field' => 'user_email',
				'label' => 'Email',
				'rules' => 'required'
			]
		];
	}
	public function getAll(){
        return $this->db->get_where($this->_table, ['user_level' => 2])->result();
	}
	public function getById($id){
        return $this->db->get_where($this->_table, ['user_id' => $id])->row();
	}
	public function update(){
        $post = $this->input->post();
        $this->user_id = $post['user_id'];
        $this->user_username = $post['user_username'];
        $this->user_email = $post['user_email'];
        $this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
	}
	public function delete($id){
        return $this->db->delete($this->_table, array("user_id" => $id));
    }
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function register_data($table,$data){
		return $this->db->insert('tbl_user', $data);
	}	
}