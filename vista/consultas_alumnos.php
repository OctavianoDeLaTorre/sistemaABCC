<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modificaciones alumnos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ménu principal</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="formulario_altas_alumnos.php">Altas</a></li>
      <li ><a href="bajas_alumnos.php">Bajas</a></li>
      <li ><a href="modificaciones_alumnos.php">Cambios</a></li>
      <li class="active"><a href="consultas_alumnos.php">Consultas</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Consultar alumnos</h2>
  <form  method="GET" action="consultas_alumnos.php">
    <div class="form-group">
      <label for="sel1">Selecciona el campo:</label>
      <select class="form-control" name="campo">
        <option value="num_control">Num. Control</option>
        <option value="nombre">Nombre</option>
        <option value="primer_apellido">Primer Apellido</option>
        <option value="segundo_apellido">Segundo Apellido</option>
        <option value="edad">Edad</option>
        <option value="Semestre">Sesmestre</option>
        <option value="carrera">Carrera</option>
      </select>
  </div>
   <div class="form-group">
     
         <div class="form-group">
          <label>Num. Control:</label>
          <input type="text" class="form-control" placeholder="Ej. Octaviano" name="txt_num_control">
          <small class="form-text text-muted">Campo obligatorio</small>
        </div>

      
    <button type="submit" class="btn btn-primary">Consultar</button>
    <a href="consultas_alumnos.php"><button class="btn btn-success">Mostar todos</button></a>
    <button type="reset" class = "btn btn-warning">Borrar información</button>
  </form>

  <?php 
    include("../script/servidor/ConexionBD.php");
    $h = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'bd_escuela';

    $con = new ConexionBD($h, $u, $p ,$bd);

    $sql = "SELECT * FROM alumnos";
    if(isset($_GET['txt_num_control'])){
       $valor = $_GET['txt_num_control'];
       $campo =  $_GET['campo'];
       $sql = "SELECT * FROM alumnos WHERE $campo LIKE '$valor%'";
    }
   
  
    $titulos [0] = "Número control";
    $titulos [1] = "Nombre";
    $titulos [2] = "Primer apellido";
    $titulos [3] = "Segundo apellido";
    $titulos [4] = "Edad";
    $titulos [5] = "Semestre";
    $titulos [6] = "Carrera";
    $titulos [7] = "Eliminar";
    $titulos [8] = "Modificar";

    echo "<h4>Resultados:</h4>";
    
    $con->consulta($sql,$titulos);
   ?>

</div>

</body>
</html>