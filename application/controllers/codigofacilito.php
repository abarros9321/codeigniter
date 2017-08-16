<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of codigofacilito
 *
 * @author alexa
 */
class CodigoFacilito extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->helper('mhelper');
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }

    function index() {
        $data['cursos']=$this->codigofacilito_model->listaDepartamentos();
         $this->load->view('codigofacilito/header');
        $this->load->view('codigofacilito/bienvenido',$data);
    }

    function nuevo() {
        $this->load->view('codigofacilito/header');
        $this->load->view('codigofacilito/formulario');
    }

    function recibirDatos() {
        $this->load->library("Menu", array("Inicio", "Contactos", "Curso"));
        $dato["miMenu"] = $this->menu->construirMenu();
        $data = array(
            'DEPT_NAME' => $this->input->post('DEPT_NAME'),
            'DEPT_NO' => $this->input->post('DEPT_NO'),
            'LOCATION' => $this->input->post('LOCATION')
        );
        $this->codigofacilito_model->crearDepartamento($data);
        $this->load->view('codigofacilito/header');
        $this->load->view('codigofacilito/bienvenido',$dato);
    }

}

?>