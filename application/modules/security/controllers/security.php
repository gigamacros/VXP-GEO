<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Security extends MX_Controller
{

function __construct() {
parent::__construct();
}

function make_hash($contrasena){
    $contra_seguro = $this->super_mega_indescifrable_hash($contrasena);
    echo $contra_seguro;
}

function  super_mega_indescifrable_hash($contrasena){
    $nueva_contra = $contrasena.="bla";
    return $nueva_contra;
}

}