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
    
    public function getDestino($id=null){
        $dato['dest']=$this-> Destino_model->getDestino($id);
        $dato['content'] = 'Admin/destino';
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
