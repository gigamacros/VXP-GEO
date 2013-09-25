<?php
class Usuarios extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        
        $this->load->library('table');        
        
        $this->load->model('consultas_model');

    }
    
    public function index(){

        $data['titulo'] ='Administración de Usuarios';
        $data['usuarios']=  $this->consultas_model->get_usuarios();

        //creamos y configuramos la tabla que pasamos como parámetro
        $this->table->set_heading('ID', 'Nombre', 'Apellido', 'Dirección', 'Teléfono', 'Email');

        //generamos el formato y lo pasamos
        $formato = array (
            'table_open'       => '<table border="1" >',  //establecemos atributos

            //establecemos como seran los encabezados
            'heading_row_start'   => '<thead><tr>',
            'heading_row_end' => '</tr></thead><tbody>',
            'heading_cell_start'  => '<th>',
            'heading_cell_end' => '</th>',

            //establecemos el formato para los renglones
            'row_start'        => '<tr>',
            'row_end'          => '</tr>',
            'cell_start'       => '<td>',
            'cell_end'         => '</td>',
            //establecemos el formato para renglones alternos se intercalan con los anteriores
            'row_alt_start'    => '<tr class="odd">',
            'row_alt_end'      => '</tr>',
            'cell_alt_start'   => '<td>',
            'cell_alt_end'     => '</td>',

            //cierra la tabla
            'table_close'      => '</tbody></table>'
        );
        $this->table->set_template($formato);
        
        $data['tabla']=$this->table->generate($data['usuarios']);

        $this->load->view('templates/header', $data);
        $this->load->view('administrador/adm_usr_view.php',$data);
        $this->load->view('templates/footer');
        
    }

    public function validar_nuevo(){
        
    }
    
    public function validar_modif(){
        
    }
}
?>
