<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_userlog extends CI_Model {
        
        private $_table = 'tbl_userlog';
        public function getAll(){
                return $this->db->get($this->_table)->result();
            }
        
	public function insertlog($data){
                $result = $this->db->insert($this->_table, $data);
                return $result; 
	}
}