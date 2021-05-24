
  <div class="row">
    <div class="col">
      <h3>Titulo</h3>
    </div>
    <div class="col-4 .col-sm-6">
    <h3>Previa</h3>
    
    </div>
    <div class="col">
      <h3>Codigo</h3>
    
    </div>
    <div class="col">
    <h3>autor</h3>
    
    </div>
    <div class="col">
    <h3>Año</h3>
    
    </div>
    <div class="col">
    <h3>cantidad_real</h3>
    
    </div>
    <div class="col">
    <h3>Acciones</h3>
    
    </div>
  <?php
  foreach($libros as $a):
  ?>
  <div class="row">
    <div class="col-sm"><?php echo $a->titulo;?></div>
    <div class="col-4 .col-sm-6"><?php echo $a->previa;?></div>
    <div class="col-sm"><?php echo $a->codigo;?></div>
    <div class="col-sm"><?php echo $a->autor;?></div>
    <div class="col-sm"><?php echo $a->anio;?></div>
    <div class="col-sm"><?php echo $a->cantidad_real;?></div>
    <div class="col-sm"><?php echo form_open('Inicio/reservar');
    $data = array(
      'name' => 'idlibro',
      'type' => 'hidden',
      'value' => $a->id_libro
          );
    echo form_input($data);

    $data = array(
      'name' => 'btnReserva',
      'class' => 'btn btn-secondary',
      'value' => 'Reservar',
      'type' => 'submit'
          );
          
          echo form_submit($data);?>
          </div>
  </div>
<br/>
   
<?php endforeach;
?>

</body>
</html>