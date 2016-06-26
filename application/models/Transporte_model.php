<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transporte_model
 *
 * @author katy
 */
class Transporte_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
     public function getTransporte($id = null){
        $this->db->select('*');
        $this->db->from('transporte');
        if($id != null){
            $this->db->where('idTransporte', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
      public function addTransporte($num,$nt){
        $dato = array(
            'idTransporte' => 0,
            'NumLugares'     => $num,
            'NomTransporte'  => $nt
        );
       return $this->db->insert('transporte', $dato);
        
	
    }
    
  
    
    public function upTransporte($id,$num,$nt){
     
        $dato = array(
            'NumLugares'     => $num,
            'NomTransporte'  => $nt
            
        );
        $this->db->where('idTransporte', $id);
        return $this->db->update('transporte', $dato);
    }
    
    public function delTransporte($id){
   
        $this->db->where('idTransporte', $id);
        return $this->db->delete('transporte');
    }
    
    
    
    
    
    public function getProv($id = null){
        $this->db->select('*');
        $this->db->from('proveedortransporte');
        if($id != null){
            $this->db->where('idProveedor', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
      public function addProv($n,$t ,$em, $d, $idT){
        $dato = array(
            'idProveedor' => 0,
            'Nombre'     => $n,
            'Telefono'  => $t,
            'Email'  => $em,
            'Direccion'  => $d,
            'idTransporte'  => $idT
        );
       return $this->db->insert('proveedortransporte', $dato);
        
	
    }
    
  
    
    public function upProv($id,$n,$t ,$em, $d, $idT){
     
        $dato = array(
             'Nombre'     => $n,
            'Telefono'  => $t,
            'Email'  => $em,
            'Direccion'  => $d,
            'idTransporte'  => $idT
            
        );
        $this->db->where('idProveedor', $id);
        return $this->db->update('proveedortransporte', $dato);
    }
    
    public function delProv($id){
   
        $this->db->where('idProveedor', $id);
        return $this->db->delete('proveedortransporte');
    }
}
