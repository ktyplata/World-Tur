<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Procedencia
 *
 * @author katy
 */
class Procedencia extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Procedencia_model');
    }
    
    public function getProcedencia(){
  
        $dato['content'] = 'Admin/procedencia';
        
        
        
        $page=5;
            $this->load->library('pagination');
            $config['base_url']=  base_url().
                    'index.php/Procedencia/pagina';
            
            $config['total_rows']=  $this->Procedencia_model->total();
            
            $config['per_page']=$page;
            $config['num_links']=30;
            
            $this->pagination->initialize($config);
            
            $dato['proce']=  $this->Procedencia_model->paginados($config['per_page'], $this->uri->segment(3));
            
        $this->load->view('plantillaAdmin', $dato);  
        
        
    }
         public function addProcedencia(){
          
        $ls = $this->input->post('LugarSalida');
        $hs = $this->input->post('HorarioSalida');
        $idP = $this->input->post('idProveedor');
        
        
        $this->Procedencia_model->addProcedencia($ls,$hs,$idP);
        redirect ('Procedencia/getProcedencia');
        $this->getProcedencia();
    }
    
     public function upProcedencia(){
        $id = $this->input->post('idProcedencia');
         $ls = $this->input->post('LugarSalida');
        $hs = $this->input->post('HorarioSalida');
        $idP = $this->input->post('idProveedor');
        
        $this->Procedencia_model->upProcedencia($id,$ls,$hs,$idP);
        
        redirect('Procedencia/getProcedencia');
    }
    
     public function frmUpProcedencia($id){
        $dato['procedencias'] = $this->Procedencia_model->getProcedencia($id);
         $dato['content'] = 'Admin/frmUpProcedencia';
        $this->load->view('plantillaAdmin', $dato);
    }
    
    public function delProcedencia($id){
        $this->Procedencia_model->delProcedencia($id);
        
        redirect('Procedencia/getProcedencia');
    }
    
}
