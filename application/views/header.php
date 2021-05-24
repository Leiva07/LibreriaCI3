<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Bootstrap V5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- Bootstrap Bundle V5 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    
	<link rel='stylesheet' href='<?php base_url()?>assets/css/estilo.css' >

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><?php echo anchor('Inicio/', 'Inicio', 'class="nav-link px-2 text-secondary"');?></li>
          <li><?php echo anchor('Inicio/', 'Libros', 'class="nav-link px-2 text-white"');?></li>
          <li><?php echo anchor('#', 'Acerca de', 'class="nav-link px-2 text-white"');?></li>
        </ul>

        <table>
          <tr>
            <td>
            <?php
          if($this->session->userdata('usuario') != null):

            $data = array(
              'class' => 'col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3'
            );
            echo form_open('Inicio/buscar',$data);

            $data = array(
              'placeholder' => 'Search...',
              'class' => 'form-control form-control-dark',
              'name' => 'search',
              'aria-label' => 'Search'
            );

            echo form_input($data);
            ?>
            </td>
            <td>
            <div class="text-end">
          <?php
          $data = array(
            'class' => 'btn btn-outline-light me-2',
            'value' => 'Buscar'
          );
          echo form_submit($data);

          echo form_close();
          ?>
          </td>
          
          <td>
          </a>
           <?php
          endif;
          ?>
        </div>
            </td>
          </tr>
        </table>
        <?php 
        if($this->session->userdata('usuario') != null):

            $data = array(
              'class' => 'col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3'
            );
          echo form_open('Inicio/cerrarSesion',$data);

          $data = array(
            'class' => 'btn btn-warning',
            'value' => 'Cerrar Sesion'
          );

          echo form_submit($data);

          echo form_close();
        endif;
        ?>
      </div>
    </div>
  </header>