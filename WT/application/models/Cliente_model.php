<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Cliente_model  extends CI_Model{
    
     public function __construct() {
        parent::__construct();
    }
    
     public function getCliente($id = null){
        $this->db->select('*');
        $this->db->from('cliente');
        if($id != null){
            $this->db->where('idCliente', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
      public function addCliente($n, $t, $d){
        $dato = array(
            'idCliente' => 0,
            'Nombre'     => $n,
            'Telefono'  => $t,
            'Direccion'  => $d
        );
       return $this->db->insert('cliente', $dato);
        
	
    }
    
  
    
    public function upCliente($id,$n, $t, $d){
     
        $dato = array(
            'Nombre'     => $n,
            'Telefono'  => $t,
            'Direccion'  => $d
            
        );
        $this->db->where('idCliente', $id);
        return $this->db->update('cliente', $dato);
    }
    
    public function delCliente($id){
    //DELETE FROM Usuario WHERE $idUsuario = $id
        $this->db->where('idCliente', $id);
        return $this->db->delete('cliente');
    }
}
