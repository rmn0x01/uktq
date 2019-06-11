<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_search extends CI_Model {
	
	public function view(){
		return $this->db->get('tbl_ukt2')->result(); // Tampilkan semua data yang ada di tabel 
	} 
	
	public function search($keyword){
		$this->db->like('ukt2_univ', $keyword);
		$this->db->or_like('ukt2_prodi', $keyword);
		
		$result = $this->db->get('tbl_ukt2')->result(); // Tampilkan data  berdasarkan keyword
		return $result; 
	}
}