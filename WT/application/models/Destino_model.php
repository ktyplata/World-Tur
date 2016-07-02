<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Destino_model
 *
 * @author katy
 */
class Destino_model extends CI_Model{
     public function __construct() {
        parent::__construct();
    }
    
     public function total(){
            $sql=  $this->db->get('destino');
            return $sql->num_rows();
        }
        
        public function paginados($cant, $segmento){
            $sql=$this->db->get('destino', $cant, $segmento);
            if ($sql->num_rows()>0){
                foreach ($sql->result()as $res){
                    $data[]=$res;
                } 
                return $data;
            }
            return FALSE;
        }
    
     public function getDestino($id = null){
        $this->db->select('*');
        $this->db->from('destino');
        if($id != null){
            $this->db->where('idDestino', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
      public function addDestino($ll,$hl,$idH ){
        $dato = array(
            'idDestino' => 0,
            'LugarLlegada'     => $ll,
            'HorarioLlegada'  => $hl,
            'idProveedor'  => $idH
        );
       return $this->db->insert('destino', $dato);
        
	
    }
    
  
    
    public function upDestino($id,$ll,$hl,$idH){
     
        $dato = array(
            'LugarLlegada'     => $ll,
            'HorarioLlegada'  => $hl,
            'idProveedor'  => $idH
            
        );
        $this->db->where('idDestino', $id);
        return $this->db->update('destino', $dato);
    }
    
    public function delDestino($id){
   
        $this->db->where('idDestino', $id);
        return $this->db->delete('destino');
    }
}
