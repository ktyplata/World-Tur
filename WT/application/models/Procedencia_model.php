<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Procedencia_model
 *
 * @author katy
 */
class Procedencia_model extends CI_Model  {
    public function __construct() {
        parent::__construct();
    }
    
     public function getProcedencia($id = null){
        $this->db->select('*');
        $this->db->from('procedencia');
        if($id != null){
            $this->db->where('idProcedencia', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
      public function addProcedencia($ls,$hs,$idP ){
        $dato = array(
            'idProcedencia' => 0,
            'LugarSalida'     => $ls,
            'HorarioSalida'  => $hs,
            'idProveedor'  => $idP
        );
       return $this->db->insert('procedencia', $dato);
        
	
    }
    
  
    
    public function upProcedencia($id,$ls,$hs,$idP){
     
        $dato = array(
            'LugarSalida'     => $ls,
            'HorarioSalida'  => $hs,
            'idProveedor'  => $idP
            
        );
        $this->db->where('idProcedencia', $id);
        return $this->db->update('procedencia', $dato);
    }
    
    public function delProcedencia($id){
   
        $this->db->where('idProcedencia', $id);
        return $this->db->delete('procedencia');
    }
    
}
