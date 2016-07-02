<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Viaje_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    
     public function total(){
            $sql=  $this->db->get('viajes');
            return $sql->num_rows();
        }
        
        public function paginados($cant, $segmento){
            $sql=$this->db->get('viajes', $cant, $segmento);
            if ($sql->num_rows()>0){
                foreach ($sql->result()as $res){
                    $data[]=$res;
                } 
                return $data;
            }
            return FALSE;
        }
    
    
    
    public function getViajes($id = null){
        $this->db->select('*');
        $this->db->from('viajes');
        if($id != null){
            $this->db->where('idViajes', $id);
        }
        $sql = $this->db->get();   
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
    
    
   
    
    public function addViajes($n, $p, $num, $i, $lv, $idC, $idP, $idD, $tv, $pHo){
        $dato = array(
            'idViajes' => 0,
            'Nombre'     => $n,
            'Precio'  => $p,
            'NumEntradas'  => $num,
            'Itinerario'  => $i,
            'LugaresVisitados'  => $lv,
            'idCliente'  => $idC,
            'idProcedencia'  => $idP,
            'idDestino'  => $idD,
            'TotalViaje'  => $tv,
            'Preciohotel'  => $pHo
        );
       return $this->db->insert('viajes', $dato);
        
	
    }
    
  
    
    public function upViajes($id,$n, $p, $num, $i, $lv, $idC, $idP, $idD, $tv, $pHo  ){
        //UPDATE Usuario SET (username= '$u', password='$p',
        //        email = '$e') WHERE idUsuario = $id
        $dato = array(
            'Nombre'     => $n,
            'Precio'  => $p,
            'NumEntradas'  => $num,
            'Itinerario'  => $i,
            'LugaresVisitados'  => $lv,
            'idCliente'  => $idC,
            'idProcedencia'  => $idP,
            'idDestino'  => $idD,
            'TotalViaje'  => $tv,
            'Preciohotel'  => $pHo
            
        );
        $this->db->where('idViajes', $id);
        return $this->db->update('viajes', $dato);
    }
    
    public function delViajes($id){
    //DELETE FROM Usuario WHERE $idUsuario = $id
        $this->db->where('idViajes', $id);
        return $this->db->delete('viajes');
    }
    
    
}
