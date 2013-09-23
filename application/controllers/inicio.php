<?php

class Inicio extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        //echo "Bienvenido a Vox Populi GEO!!";
        $this->load->view('inicio_view');
    }
    public function index2($par1, $par2 = '') {
        echo "hola ".$par1.", ".$par2;
    }
}
?>
