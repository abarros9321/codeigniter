<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function crearDepartamento($data){
        $this->db->insert('department', array('DEPT_NAME'=>$data['DEPT_NAME'],'DEPT_NO'=>$data['DEPT_NO'],'LOCATION'=>$data['LOCATION']));
    }
    
    function listaDepartamentos(){
        $query = $this->db->get('department');
        if ($query->num_rows()>0){
            return $query;
        }else{
            return false;
        }
    }
}


?>
