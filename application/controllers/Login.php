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
        $usuario = $this->input->post("usuario");
        $clave = $this->input->post("clave");
        $this->load->model("LoginModel","login");
		$data = $this->login->buscar($usuario);
        if($data != null){

//            var_dump($data->usuario);
             if($data->clave == $clave){

                 $this->load->view('header'); 
                 $this->load->view('inicio'); 
             }
        }
        else
        {
            $this->load->view('header');
		    $this->load->view('login');
        }

		
	}
}
