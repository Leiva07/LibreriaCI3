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
          <li><a href="#" class="nav-link px-2 text-secondary">Inicio</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Reservas</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Libros</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Acerca de</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <!-- <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search"> -->
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Inicio de Sesion</button>
          <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
        </div>
      </div>
    </div>
  </header>