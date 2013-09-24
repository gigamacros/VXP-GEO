<?php
class Login extends CI_Controller{
    public $cat='nada';
    
    public function __construct() {//esta funcion siempre va
        parent::__construct();
        //ponemos aca los "helper", "library" y "model" para que sean accesibles por todas las funciones
        $this->load->helper('form');
        $this->load->helper('url');
        
        $this->load->library('form_validation');
        
        $this->load->model('consultas_model');
    }
    
    public function index() {//esta funcion siempre va
        //podemos pasarle a la vista el nombre de la pagina como una variable
        $data['titulo'] ='Ingreso VXP-GEO';
        
        $this->load->view('templates/header', $data);
        $this->load->view('login/index.php',$data);
        $this->load->view('templates/footer');
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
                $data['titulo']='VXP-GEO';     
                switch ($this->cat) {
                    case 1://'Superadministrador':
                        $this->load->view('templates/header', $data);
                        $this->load->view('administrador/welcome_admin_view',$data);
                        $this->load->view('templates/footer');
                        break;
                    case 2://'Administrador':
                        $this->load->view('templates/header', $data);
                        $this->load->view('administrador/welcome_admin_view',$data);
                        $this->load->view('templates/footer');
                        break;
                    case 3://'Supervisor':
                        $this->load->view('templates/header', $data);
                        $this->load->view('supervisor/welcome_supervisor_view',$data);
                        $this->load->view('templates/footer');
                        break;
                    case 4://'Jefe de Campo':
                        $this->load->view('templates/header', $data);
                        $this->load->view('jefecampo/welcome_jcampo_view',$data);
                        $this->load->view('templates/footer');
                        break;
                    case 5://'Encuestador':
                        $this->load->view('templates/header', $data);
                        $this->load->view('encuestador/welcome_encuestador_view',$data);
                        $this->load->view('templates/footer');
                        break;
                    default:
                        echo $this->cat;
                        break;
                }
            }
        }
    }
    
    function valid_user ($usuario, $pass) {
        $datos['credenciales']=  $this->consultas_model->get_credenciales($usuario, $pass);
        if (empty($datos['credenciales']))
        {
            return FALSE;
        }
        else {
            $this->cat = $datos['credenciales']['id_cat'];
            return TRUE;
        }
    }
}
?>
