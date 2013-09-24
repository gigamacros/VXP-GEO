<?php
class Consultas_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    /* Esta funcion permite obtener TODOS los usuarios
     * o solamente l que coincide con los parametros de USUARIO y
     * CONTRASEÑA
     */
    public function get_credenciales($nom = FALSE, $contra = FALSE)
    {
        if ($nom === FALSE or $contra === FALSE)
        {
            $query = $this->db->get('credenciales');//busco todos los usuarios
            return $query->result_array();
        }
        $query = $this->db->get_where('credenciales', array('nom_crd' => $nom, 'pass_crd'=>$contra));//busco el usuario que coincide con los parametros de entrada
        return $query->row_array();
    }
}

?>
