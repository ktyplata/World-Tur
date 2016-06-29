<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cliente extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model');
    }
    
    
    public function getCliente($id=null){
        $dato['cl']=$this->Cliente_model->getCliente($id);
        $dato['content'] = 'Admin/clientes';
        $this->load->view('plantillaAdmin', $dato);
        
        
    }
         public function addCliente(){
          
        $n = $this->input->post('Nombre');
        $t = $this->input->post('Telefono');
        $d = $this->input->post('Direccion');
        
        $this->Cliente_model->addCliente($n, $t, $d);
        redirect ('Cliente/getCliente');
        $this->getCliente();
    }
    
     public function upUsuario(){
        $id = $this->input->post('idCliente');
        $n = $this->input->post('Nombre');
        $t = $this->input->post('Telefono');
        $d = $this->input->post('Direccion');
        
        $this->Cliente_model->upCliente($id,$n, $t, $d);
        
        redirect('Cliente/getCliente');
    }
    
     public function frmUpCliente($id){
        $dato['clientes'] = $this->Cliente_model->getCliente($id);
         $dato['content'] = 'Admin/frmUpCliente';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delCliente($id){
        $this->Cliente_model->delCliente($id);
        
        redirect('Cliente/getCliente');
    }
    
    
    
}
