<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of department
 *
 * @author alexa
 */
class department extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('mhelper');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('department_model');
        $this->load->view('base/header');
    }

    function index() {
        $data['segmentos'] = $this->uri->segment(3);
        if(!$data['segmentos']){
            $data['cursos'] = $this->department_model->listaDepartamentos();
            
        }else{
            $data['cursos'] = $this->department_model->listaDepartamento($data['segmentos']);
        }
        $this->load->view('department/bienvenido', $data);
        $this->load->view('base/chargerjs');
    }

    function nuevo() {
        $this->load->view('department/formulario');
        $this->load->view('base/chargerjs');
    }
    
    function editar() {
        $data['id']= $this->uri->segment(3);
        $data['departamento'] = $this->department_model->listaDepartamento($data['id']);
        $this->load->view('department/editar', $data);
        $this->load->view('base/chargerjs');
    }

    function eliminar() {
        $id = $this->uri->segment(3);
        $data['departamento'] = $this->department_model->eliminarDepartamento($id);
        
    }
    
    function recibirDatos() {
        $this->load->library("Menu", array("Inicio", "Contactos", "Curso"));
        $dato["miMenu"] = $this->menu->construirMenu();
        $data = array(
            'DEPT_NAME' => $this->input->post('DEPT_NAME'),
            'DEPT_NO' => $this->input->post('DEPT_NO'),
            'LOCATION' => $this->input->post('LOCATION')
        );
        $this->department_model->crearDepartamento($data);
        
            $data['cursos'] = $this->department_model->listaDepartamentos();
            
       
        $this->load->view('department/bienvenido', $data);
        $this->load->view('base/chargerjs');
    }
    
    function actualizar(){
        
         $data = array(
             'id' =>$this->uri->segment(3),
            'DEPT_NAME' => $this->input->post('DEPT_NAME'),
            'DEPT_NO' => $this->input->post('DEPT_NO'),
            'LOCATION' => $this->input->post('LOCATION')
        );
         $this->department_model->actualizarDepartamento($data);
        
        if(!$data['segmentos']){
            $data['cursos'] = $this->department_model->listaDepartamentos();
            
        }else{
            $data['cursos'] = $this->department_model->listaDepartamento($data['segmentos']);
        }
        $this->load->view('department/bienvenido', $data);
        $this->load->view('base/chargerjs');
    }
    
    

}
