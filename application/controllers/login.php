<?php

class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    public function index() {
        $data = array('titulo'=> 'Ingreso VXP-GEO'); 
        $this->load->view('login_view',$data);
    }
    
    public function validar() {
        
    }
}
?>
