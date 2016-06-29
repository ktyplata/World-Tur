<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
    }
    
   public function indexAdmin()
    {
        $data['content'] = 'Admin/home';
        $this->load->view('plantillaAdmin', $data);
	
    }
    
     public function usuarios()
    {
        $data['content'] = 'Admin/usuarios';
        $this->load->view('plantillaAdmin', $data);
    }
    
    public function clientes()
    {
        $data['content'] = 'Admin/clientes';
        $this->load->view('plantillaAdmin', $data);
    }
    
    public function registro()
    {
        $data['content'] = 'Admin/registro';
        $this->load->view('plantillaAdmin', $data);
    }
    
     public function frmViajes()
    {
        $data['content'] = 'Admin/frmViajes';
        $this->load->view('plantillaAdmin', $data);
    }
    
    public function frmClientes()
    {
        $data['content'] = 'Admin/frmClientes';
        $this->load->view('plantillaAdmin', $data);
    }
    
     public function frmHotel()
    {
        $data['content'] = 'Admin/frmHotel';
        $this->load->view('plantillaAdmin', $data);
    }
    
    public function frmTransporte()
    {
        $data['content'] = 'Admin/frmTransporte';
        $this->load->view('plantillaAdmin', $data);
    }
    
     public function frmDestino()
    {
        $data['content'] = 'Admin/frmDestino';
        $this->load->view('plantillaAdmin', $data);
    }
    
    
    
    public function login(){
        $this->load->view('Admin/login');
        
        
    }
    
       public function frmUpUsuario(){
           $data['content'] = 'Admin/frmUpUsuario';
        $this->load->view('plantillaAdmin', $data);
       }
       
       
        public function frmUpViajes(){
           $data['content'] = 'Admin/frmUpViajes';
        $this->load->view('plantillaAdmin', $data);
       }
       
       public function frmUpHotel(){
           $data['content'] = 'Admin/frmUpHotel';
        $this->load->view('plantillaAdmin', $data);
       }
       
       public function frmUpTransporte(){
           $data['content'] = 'Admin/frmUpTransporte';
        $this->load->view('plantillaAdmin', $data);
       }
    
  
     
    
    
}
