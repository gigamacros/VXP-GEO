<?php

class Login extends CI_Controller
{
    //esta funcion siempre va
    public function __construct() {
        parent::__construct();
        //ponemos aca los "helper" y "library" para que sean accesibles por todas las funciones
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    
    //esta funcion siempre va
    public function index() {
        //podemos pasarle a la vista el nombre de la pagina como una variable
        $data = array('titulo'=> 'Ingreso VXP-GEO'); 
        $this->load->view('login_view',$data);
    }
    
    public function validar() {
        //aca aplicamos reglas sobre los campos que nos interesan
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('pass', 'Contraseña', 'required');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');

        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            //ademas de las reglas debe ser un usuario dentro de la base de datos
            $this->load->view('formsuccess');
        }
    }
}
?>
