<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_search extends CI_Model {

  // Get cities
  function getUniv(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('tbl_univ');
    $response = $q->result_array();

    return $response;
  }

  // Get City departments
  function getFakultas($postData){
    $response = array();
 
    // Select record
    $this->db->select('fakultas_id,fakultas_nama');
    $this->db->where('univ_id', $postData['univ_id']);
    $q = $this->db->get('tbl_fakultas');
    $response = $q->result_array();

    return $response;
  }

  // Get Department user
  function getProdi($postData){
    $response = array();
 
    // Select record
    $this->db->select('prodi_id,prodi_nama');
    $this->db->where('fakultas_id', $postData['fakultas_id']);
    $q = $this->db->get('tbl_prodi');
    $response = $q->result_array();

    return $response;
  } 

}