<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of department_model
 *
 * @author alexa
 */
class department_model extends CI_Model {
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
    
     function listaDepartamento($id){
         $this->db->where('DEPT_ID',$id);
        $query = $this->db->get('department');
        if ($query->num_rows()>0){
            return $query;
        }else{
            return false;
        }
    }
    
     function actualizarDepartamento($data){
         $datos = array('DEPT_NAME'=>$data['DEPT_NAME'],
                        'DEPT_NO'=>$data['DEPT_NO'],
                        'LOCATION'=>$data['LOCATION']);
         $this->db->where('DEPT_ID',$data['id']);
        $query = $this->db->update('department',$datos);
        
    }
    
    function eliminarDepartamento($id){
        $query = "DELETE FROM department WHERE DEPT_ID = $id";
        $this->db->query($query);
    }
    //sin query
    /*function eliminarDepartamento($id){
        $this->db->delete('department', array('DEPT_ID'=>$id));
    }*/
}
