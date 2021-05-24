<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construc() {
		parent::__construc;
	}

    function index(){
        if($this->session->userdata('usuario') != ''){

        $this->load->model('LibrosModel');
        $data['libros'] = $this->LibrosModel->buscarCodigo();
        $this->load->view('header');
        $this->load->view('inicio',$data);
        }else{
            redirect('/','refresh');
        }
    }
    function cerrarSesion(){

         $this->session->set_userdata('usuario', null);
        $sesion = $this->session->userdata('usuario');
            if($sesion != null){
                $this->session->set_userdata('usuario','');
                redirect('/','refresh');
            }
            else{
                redirect('/','refresh');
                
            } 
            
    }

    function buscar(){
        if($this->session->userdata('usuario') != ''){
            $busqueda = null;
            $busqueda = strtoupper($this->input->post('search'));
            $this->load->model('LibrosModel');
            $data['libros'] = $this->LibrosModel->buscarCodigo($busqueda);
            
            $this->load->view('header');
            $this->load->view('inicio',$data); 
        }else{
        redirect('/','refresh');
    }
    }

    function reservar(){


    }

}