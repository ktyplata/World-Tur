<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Destino
 *
 * @author katy
 */
class Destino extends CI_Controller{
   public function __construct() {
        parent::__construct();
        $this->load->model('Destino_model');
    }
    
    public function getDestino(){
     
        $dato['content'] = 'Admin/destino';
        
        
        
        $page=5;
            $this->load->library('pagination');
            $config['base_url']=  base_url().
                    'index.php/Destino/pagina';
            
            $config['total_rows']=  $this->Destino_model->total();
            
            $config['per_page']=$page;
            $config['num_links']=30;
            
            $this->pagination->initialize($config);
            
            $dato['destinos']=  $this->Destino_model->paginados($config['per_page'], $this->uri->segment(3));
            
        $this->load->view('plantillaAdmin', $dato);  
        
    }
         public function addDestino(){
          
        $ll = $this->input->post('LugarLlegada');
        $hl = $this->input->post('HorarioLlegada');
        $idH = $this->input->post('idHotel');
        
        
        $this->Destino_model->addDestino($ll,$hl,$idH);
        redirect ('Destino/getDestino');
        $this->getDestino();
    }
    
     public function upDestino(){
        $id = $this->input->post('idDestino');
         $ll = $this->input->post('LugarLlegada');
        $hl = $this->input->post('HorarioLlegada');
        $idH = $this->input->post('idHotel');
        
        $this->Destino_model->upDestino($id,$ll,$hl,$idH);
        
        redirect('Destino/getDestino');
    }
    
     public function frmUpDestino($id){
        $dato['destinos'] = $this->Destino_model->getDestino($id);
         $dato['content'] = 'Admin/frmUpDestino';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delDestino($id){
        $this->Destino_model->delDestino($id);
        
        redirect('Destino/getDestino');
    }
    
}
