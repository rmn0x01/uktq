<?php
    class C_logout extends CI_Controller{
        function __construct(){
            parent::__construct();
        }
        function index(){
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
?>