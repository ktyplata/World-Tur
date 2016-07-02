<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viajes extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Viaje_model');
    }
    
    public function getViajes(){
     
        $dato['content'] = 'Admin/viajes';
  
        
        $page=5;
            $this->load->library('pagination');
            $config['base_url']=  base_url().
                    'index.php/Viajes/pagina';
            
            $config['total_rows']=  $this->Viaje_model->total();
            
            $config['per_page']=$page;
            $config['num_links']=30;
            
            $this->pagination->initialize($config);
            
            $dato['viajes']=  $this->Viaje_model->paginados($config['per_page'], $this->uri->segment(3));
            
        $this->load->view('plantillaAdmin', $dato);   
        
        
        
    }
         public function addViajes(){
          
        $n = $this->input->post('Nombre');
        $p = $this->input->post('Precio');
        $num = $this->input->post('NumEntradas');
        $i = $this->input->post('Itinerario');
        $lv = $this->input->post('LugaresVisitados');
        $idC = $this->input->post('idCliente');
        $idP = $this->input->post('idProcedencia');
        $idD = $this->input->post('idDestino');
        $tv = $this->input->post('TotalViaje');
        $pHo = $this->input->post('Preciohotel');
        
        $this->Viaje_model->addViajes($n, $p, $num, $i, $lv, $idC, $idP, $idD, $tv, $pHo);
        redirect ('Viajes/getViajes');
        $this->getViajes();
    }
    
     public function upViajes(){
        $id = $this->input->post('idViajes');
        $n = $this->input->post('Nombre');
        $p = $this->input->post('Precio');
        $num = $this->input->post('NumEntradas');
        $i = $this->input->post('Itinerario');
        $lv = $this->input->post('LugaresVisitados');
        $idC = $this->input->post('idCliente');
        $idP = $this->input->post('idProcedencia');
        $idD = $this->input->post('idDestino');
        $tv = $this->input->post('TotalViaje');
        $pHo = $this->input->post('Preciohotel');
        
        
         $this->Viaje_model->upViajes($id, $n, $p, $num, $i, $lv, $idC, $idP, $idD, $tv, $pHo);
        
        redirect('Viajes/getViajes');
    }
    
     public function frmUpViajes($id){
        $dato['viajes'] = $this->Viaje_model->getViajes($id);
         $dato['content'] = 'Admin/frmUpViajes';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delViajes($id){
        $this->Viaje_model->delViajes($id);
        
        redirect('Viajes/getViajes');
    }
    
}
