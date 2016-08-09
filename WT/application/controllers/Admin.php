<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
        $this->load->library('calendar');
    }
    
   public function indexAdmin()
    {
        $data ['calendario'] = $this->calendar->generate();
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
    
    public function viajes()
    {
        $data['content'] = 'Admin/viajes';
        $this->load->view('plantillaAdmin', $data);
    }
    
    public function cotizacion()
    {
        $data['content'] = 'Admin/cotizacion';
        $this->load->view('plantillaAdmin', $data);
    }
    
     public function descripcion()
    {
        $data['content'] = 'Admin/descripcion';
        $this->load->view('plantillaAdmin', $data);
    }
     public function proveedor()
    {
        $data['content'] = 'Admin/proveedor';
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
    
    public function frmCot()
    {
        $data['content'] = 'Admin/frmCot';
        $this->load->view('plantillaAdmin', $data);
    }
    
    public function frmDes()
    {
        $data['content'] = 'Admin/frmDes';
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
    
     public function frmProv()
    {
        $data['content'] = 'Admin/frmProv';
        $this->load->view('plantillaAdmin', $data);
    }
    
     public function frmDestino()
    {
        $data['content'] = 'Admin/frmDestino';
        $this->load->view('plantillaAdmin', $data);
    }
    
     public function frmProcedencia()
    {
        $data['content'] = 'Admin/frmProcedencia';
        $this->load->view('plantillaAdmin', $data);
    }
    
    
    
    public function login(){
        $this->load->view('Admin/login');
        
        
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
       
       public function frmUpProv(){
           $data['content'] = 'Admin/frmUpProv';
        $this->load->view('plantillaAdmin', $data);
       }


        public function frmUpDestino(){
           $data['content'] = 'Admin/frmUpDestino';
        $this->load->view('plantillaAdmin', $data);
       }
    
        
     
    
    
}
