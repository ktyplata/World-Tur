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
    
    public function getTransporte($id=null){
        $dato['trans']=$this->Transporte_model->getTransporte($id);
        $dato['content'] = 'Admin/transporte';
        $this->load->view('plantillaAdmin', $dato);
        
        
    }
         public function addTransporte(){
          
        $n = $this->input->post('NombreHotel');
        $d = $this->input->post('Direccion');
        $t = $this->input->post('Telefono');
        $ch = $this->input->post('CostoHotel');
        
        $this->Transporte_model->addTransporte($n,$d, $t, $ch);
        redirect ('Transporte/getTransporte');
        $this->getTransporte();
    }
    
     public function upTransporte(){
        $id = $this->input->post('idTransporte');
        $n = $this->input->post('NombreHotel');
        $d = $this->input->post('Direccion');
        $t = $this->input->post('Telefono');
        $ch = $this->input->post('CostoHotel');
        
        $this->Transporte_model->upTransporte($id,$n,$d, $t, $ch);
        
        redirect('Transporte/getTransporte');
    }
    
     public function frmUpTransporte($id){
        $dato['hoteles'] = $this->Transporte_model->getTransporte($id);
         $dato['content'] = 'Admin/frmUpTransporte';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delTransporte($id){
        $this->v_model->delTransporte($id);
        
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
