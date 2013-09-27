<?php
class Template extends MX_Controller
{

function __construct() {
parent::__construct();
}

function publico($data){
    $this->load->view('publico_view', $data);
}

function administrador($data){
    $this->load->view('administrador_view', $data);
}

function supervisor($data){
    $this->load->view('supervisor_view', $data);
}

function jefecampo($data){
    $this->load->view('jefecampo_view', $data);
}

function encuestador($data){
    $this->load->view('encuestador_view', $data);
}

}