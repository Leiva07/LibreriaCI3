<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construc() {
		parent::__construc;
	}

	public function index()
	{
		$this->load->view('header');
		    $this->load->view('login');
	}

	public function inicio(){		
		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('clave', 'Clave', 'required');

		if ($this->form_validation->run())
		{
			$this->load->model("LoginModel");

		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');

		$data = $this->LoginModel->buscar($usuario);

             //obtengo los valores de la BD
			 foreach($data as $a){
				$usuarioDB = $a->usuario;
				$claveDB = $a->clave;
			 }

			 if($usuario == $usuarioDB){
				 if($clave == $claveDB){
					 $this->session->set_userdata('usuario', $usuarioDB);
					 $this->load->view('header');
					 $this->load->view('inicio');
				 }
				 else{
					redirect('/', 'refresh');
				 }
			 }
			 else{
				redirect('/', 'refresh');
			 }
		}
		else{
			redirect('/', 'refresh');
		}
        
        
            /*  if($data->clave == $clave){

                 $this->load->view('header'); 
                 $this->load->view('inicio'); 
             }
            else
            {
                $this->load->view('header');
		        $this->load->view('login');
            } */

		
	}
}
