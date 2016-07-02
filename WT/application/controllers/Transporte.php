<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transporte
 *
 * @author katy
 */
class Transporte extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Transporte_model');
    }
    
    
     public function total(){
            $sql=  $this->db->get('transporte');
            return $sql->num_rows();
        }
        
        public function paginados($cant, $segmento){
            $sql=$this->db->get('transporte', $cant, $segmento);
            if ($sql->num_rows()>0){
                foreach ($sql->result()as $res){
                    $data[]=$res;
                } 
                return $data;
            }
            return FALSE;
        }
    
    public function getTransporte(){
        
        $dato['content'] = 'Admin/transporte';
      
        
        
        
        $page=5;
            $this->load->library('pagination');
            $config['base_url']=  base_url().
                    'index.php/Transporte/pagina';
            
            $config['total_rows']=  $this->Transporte_model->total();
            
            $config['per_page']=$page;
            $config['num_links']=30;
            
            $this->pagination->initialize($config);
            
            $dato['transportes']=  $this->Transporte_model->paginados($config['per_page'], $this->uri->segment(3));
            
        $this->load->view('plantillaAdmin', $dato);  
        
    }
         public function addTransporte(){
          
        $nl = $this->input->post('NumLugares');
        $nt = $this->input->post('NomTransporte');
        
        $this->Transporte_model->addTransporte($nl,$nt);
        redirect ('Transporte/getTransporte');
        $this->getTransporte();
    }
    
     public function upTransporte(){
        $id = $this->input->post('idTransporte');
        $nl = $this->input->post('NumLugares');
        $nt = $this->input->post('NomTransporte');
        
        $this->Transporte_model->upTransporte($id,$nl,$nt);
        
        redirect('Transporte/getTransporte');
    }
    
     public function frmUpTransporte($id){
        $dato['transportes'] = $this->Transporte_model->getTransporte($id);
         $dato['content'] = 'Admin/frmUpTransporte';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delTransporte($id){
        $this->Transporte_model->delTransporte($id);
        
        redirect('Transporte/getTransporte');
    }
    
    
    
    
    
    
    
    public function getProv($id=null){
        $dato['prov']=$this->Transporte_model->getProv($id);
        $dato['content'] = 'Admin/transporte';
        $this->load->view('plantillaAdmin', $dato);
        
        
    }
         public function addProv(){
          
        $n = $this->input->post('NombreHotel');
        
        $t = $this->input->post('Telefono');
        $em = $this->input->post('Email');
        $d = $this->input->post('Direccion');
        $idT = $this->input->post('idTransporte');
        
        $this->Transporte_model->addProv($n,$t ,$em, $d, $idT);
        redirect ('Transporte/getTransporte');
        $this->getProv();
    }
    
     public function upProv(){
        $id = $this->input->post('idProveedor');
        $n = $this->input->post('NombreHotel');
        $t = $this->input->post('Telefono');
        $em = $this->input->post('Email');
        $d = $this->input->post('Direccion');
        $idT = $this->input->post('idTransporte');
        
        $this->Transporte_model->upProv($id,$n,$t ,$em, $d, $idT);
        
        redirect('Transporte/getTransporte');
    }
    
     public function frmUpProv($id){
        $dato['tra'] = $this->Transporte_model->getTransporte($id);
         $dato['content'] = 'Admin/frmUpTransporte';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delProv($id){
        $this->Transporte_model->delProv($id);
        
        redirect('Transporte/getTransporte');
    }
}
