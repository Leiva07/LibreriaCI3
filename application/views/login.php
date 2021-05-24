<body>
  <?php 
  
  if($this->session->flashdata('error') != null):
    
    ?>
<script src="assets/js/sesion.js"></script>
    <?php
  endif;

  ?>
  <main class="form-signin">

  <?php 
   
    echo form_open('Login/inicio');
    $data = array(
      'class' => 'h3 mb-3 fw-normal'
        );
    echo form_label('Inicio de Sesion','inicio',$data);

    ?>
    <div class="form-floating">
    <?php
      $data = array(
        'class' => 'form-control',
        'placeholder' => 'Usuario',
        'name' => 'usuario',
        'required' => ''
          );
          echo form_input($data);

          echo form_label('Usuario','floatingInput');

    ?>
    </div>
    <div class="form-floating">
    <?php
    $data = array(
      'class' => 'form-control',
      'placeholder' => 'Clave',
      'name' => 'clave',
      'required' => ''
        );
        echo form_password($data);

        echo form_label('Clave','floatingInput');
    ?>
    </div>
    <?php
    $data = array(
      'class' => 'w-100 btn btn-lg btn-primary',
      'value' => 'Iniciar Sesión',
      'name' => 'submit'
        );
        echo form_submit($data);
    echo form_close();
  ?>
</main>

</body>
</html>