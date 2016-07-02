<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cliente extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model');
    }
    
    
    public function getCliente(){
        $dato['content'] = 'Admin/clientes';
        
        
        
        
        
            $page=5;
            $this->load->library('pagination');
            $config['base_url']=  base_url().
                    'index.php/Cliente/pagina';
            
            $config['total_rows']=  $this->Cliente_model->total();
            
            $config['per_page']=$page;
            $config['num_links']=30;
            
            $this->pagination->initialize($config);
            
            $dato['cliente']=  $this->Cliente_model->paginados($config['per_page'], $this->uri->segment(3));
            
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
