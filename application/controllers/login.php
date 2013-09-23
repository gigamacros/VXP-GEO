<?php

class Login extends CI_Controller
{
    public $cat='nada';
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
            $this->form_validation->set_rules('usuario','Usuario','trim|callback_valid_user['.$this->input->post('pass').']');
            $this->form_validation->set_message('valid_user', 'El usuario o la contraseña son incorrectos');
                     
            if ($this->form_validation->run() == FALSE)
            {
                $this->index();
            }
            else
            {
                $data = array('titulo'=> 'VXP-GEO');     
                switch ($this->cat) {
                    case 'Administrador':
                        $this->load->view('welcome_admin_view',$data);
                        break;
                    case 'Jefe de Campo':
                        $this->load->view('welcome_jcampo_view',$data);
                        break;
                    case 'Supervisor':
                        $this->load->view('welcome_supervisor_view',$data);
                        break;
                    case 'Encuestador':
                        $this->load->view('welcome_encuestador_view',$data);
                        break;
                    default:
                        echo $this->cat;
                        break;
                }
            }
        }
    }
    
    function valid_user ($usuario, $pass) {
        $query = $this->db->query('SELECT cat_usr FROM usuario WHERE nom_usr="'.$usuario.'" and pass_usr="'.$pass.'"');
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $this->cat = $row->cat_usr;
            }
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}
?>
