    <br>
    <?php 
      $this->table->set_heading('Titulo', 'Previa', 'Codigo','Autor', 'Año', 'Inventario','Accion');

  foreach($libros as $a):
    echo form_open('Inicio/reservar');

    $data = array(
      'name' => 'btnsearch',
      'class' => 'btn btn-secondary',
      'value' => 'reservar',
    );
    $this->table->add_row(array($a->titulo, $a->previa, $a->codigo,$a->autor,$a->anio,$a->cantidad_real,form_submit($data)));
    echo form_close();
    
?>
   
<?php endforeach;

$plantilla = array(
  'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-hover">'
);
$this->table->set_template($plantilla);

echo $this->table->generate();
?>


</body>
</html>