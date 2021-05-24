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
            $busqueda = $this->input->post('search');
            $this->load->model('LibrosModel');
            If(empty($busqueda)){
            $data['libros'] = $this->LibrosModel->buscarCodigo($busqueda);
            }
            elseif(empty($data['libros'])){
                $data['libros'] = $this->LibrosModel->buscarTitulo($busqueda);
                if(empty($data['libros'])){
                    $data['libros'] = $this->LibrosModel->buscarAutor($busqueda);
                    if($data['libros'] == null){
                        $data['libros'] = $this->LibrosModel->buscarAnio($busqueda);
                        if($data['libros'] == null){
                            $data['libros'] = $this->LibrosModel->buscarEstante($busqueda);
                            
                        }
                    }
                }
            }
            
            
            $this->load->view('header');
            $this->load->view('inicio',$data); 
        }else{
        redirect('/','refresh');
    }
    }

    function reservar(){


    }

}