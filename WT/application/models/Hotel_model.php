<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hotel_model
 *
 * @author katy
 */
class Hotel_model  extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    
     public function total(){
            $sql=  $this->db->get('hotel');
            return $sql->num_rows();
        }
        
        public function paginados($cant, $segmento){
            $sql=$this->db->get('hotel', $cant, $segmento);
            if ($sql->num_rows()>0){
                foreach ($sql->result()as $res){
                    $data[]=$res;
                } 
                return $data;
            }
            return FALSE;
        }
        
     public function getHotel($id = null){
        $this->db->select('*');
        $this->db->from('hotel');
        if($id != null){
            $this->db->where('idHotel', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
      public function addHotel($n,$d, $t, $ch){
        $dato = array(
            'idHotel' => 0,
            'NombreHotel'     => $n,
            'Direccion'  => $d,
            'Telefono'  => $t,
            'CostoHotel'  => $ch
            
        );
       return $this->db->insert('hotel', $dato);
        
	
    }
    
  
    
    public function upHotel($id,$n,$d, $t, $ch){
     
        $dato = array(
            'NombreHotel'     => $n,
            'Direccion'  => $d,
            'Telefono'  => $t,
            'CostoHotel'  => $ch
            
        );
        $this->db->where('idHotel', $id);
        return $this->db->update('hotel', $dato);
    }
    
    public function delHotel($id){
   
        $this->db->where('idHotel', $id);
        return $this->db->delete('hotel');
    }
}
