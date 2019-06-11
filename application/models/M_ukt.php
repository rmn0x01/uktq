<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_ukt extends CI_Model{
    private $_table = 'tbl_ukt2';

    public $ukt2_id;
    public $ukt2_univ;
    public $ukt2_prodi;
    public $ukt2_linkprodi;
    public $ukt2_logoprodi = "default.jpg";
    public $ukt2_admininput;
    public $ukt2_gol1;
    public $ukt2_gol2;
    public $ukt2_gol3;
    public $ukt2_gol4;
    public $ukt2_gol5;

    public function rules(){
        return [
            ['field' => 'ukt2_univ',
            'label' => "Universitas",
            'rules' => 'required'],

            ['field' => 'ukt2_prodi',
            'label' => "Program Studi",
            'rules' => 'required'],

            ['field' => 'ukt2_gol1',
            'label' => "Golongan 1",
            'rules' => 'numeric'],

            ['field' => 'ukt2_gol2',
            'label' => "Golongan 2",
            'rules' => 'numeric'],

            ['field' => 'ukt2_gol3',
            'label' => "Golongan 3",
            'rules' => 'numeric'],

            ['field' => 'ukt2_gol4',
            'label' => "Golongan 4",
            'rules' => 'numeric'],

            ['field' => 'ukt2_gol5',
            'label' => "Golongan 5",
            'rules' => 'numeric']
        ];
        
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ['ukt2_id' => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->ukt2_id = uniqid();
        $this->ukt2_univ = $post['ukt2_univ'];
        $this->ukt2_prodi = $post['ukt2_prodi'];
        $this->ukt2_linkprodi = $post['ukt2_linkprodi'];
        $this->ukt2_logoprodi = $this->_uploadImage();
        $this->ukt2_admininput = $this->session->userdata('nama');
        $this->ukt2_gol1 = $post['ukt2_gol1'];
        $this->ukt2_gol2 = $post['ukt2_gol2'];
        $this->ukt2_gol3 = $post['ukt2_gol3'];
        $this->ukt2_gol4 = $post['ukt2_gol4'];
        $this->ukt2_gol5 = $post['ukt2_gol5'];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->ukt2_id = $post['ukt2_id'];
        $this->ukt2_univ = $post['ukt2_univ'];
        $this->ukt2_prodi = $post['ukt2_prodi'];
        $this->ukt2_linkprodi = $post['ukt2_linkprodi'];

        if (!empty($_FILES["ukt2_logoprodi"]["name"])) {
            $this->ukt2_logoprodi = $this->_uploadImage();
        } else {
            $this->ukt2_logoprodi = $post["old_ukt2_logoprodi"];
        }
        $this->ukt2_admininput = $this->session->userdata('nama');
        $this->ukt2_gol1 = $post['ukt2_gol1'];
        $this->ukt2_gol2 = $post['ukt2_gol2'];
        $this->ukt2_gol3 = $post['ukt2_gol3'];
        $this->ukt2_gol4 = $post['ukt2_gol4'];
        $this->ukt2_gol5 = $post['ukt2_gol5'];
        $this->db->update($this->_table, $this, array('ukt2_id' => $post['ukt2_id']));
    }

    public function delete($id){
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("ukt2_id" => $id));
    }

    private function _uploadImage(){
        $config['upload_path'] = './upload/logo';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->ukt2_id;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload',$config);

        if ($this->upload->do_upload('ukt2_logoprodi')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }

    private function _deleteImage($id){
        $logo = $this->getById($id);
        if ($logo->ukt2_logoprodi != "default.jpg"){
            $filename = explode(".", $logo->ukt2_logoprodi)[0];
            return array_map('unlink', glob(FCPATH."upload/logo/$filename.*"));
        }
    }
}

?>