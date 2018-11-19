<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modificaciones alumnos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ménu principal</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="../../vista/formulario_altas_alumnos.php">Altas</a></li>
      <li ><a href="../../vista/bajas_alumnos.php">Bajas</a></li>
      <li class="active"><a href="../../vista/modificaciones_alumnos.php">Cambios</a></li>
      <li><a href="../../vista/consultas_alumnos.php">Consultas</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Altas alumnos</h2>
  <form  method="POST" action="modificacion.php">
    <div class="form-group">
     
         <div class="form-group">
          <label>Num. Control:</label>
            <?php 
             getValor("txt_num_control");
            ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

       <div class="form-group">
          <label>Nombre:</label>
           <?php 
             getValor("txt_nombre");
            ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

        <div class="form-group">
          <label>Primera apellido:</label>
           <?php 
             getValor("txt_primer_ap");
            ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

        <div class="form-group">
          <label>Segundo apellido:</label>
          <?php 
             getValor("txt_segundo_ap");
           ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

        <div class="form-group">
          <label>Edad:</label>
          <?php 
             getValor("txt_edad");
           ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

         <div class="form-group">
          <label>Semestre:</label>
           <?php 
             getValor("txt_semestre");
           ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>
        
         <div class="form-group">
          <label>Carrera:</label>
           <?php 
             getValor("txt_carrera");
           ?>
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>

  <?php 

    function getValor($id){
      $valor = $_GET[$id];
      echo "<input type='text' class='form-control' name='$id' value='$valor'>";
    }
   ?>

</div>

</body>
</html>
