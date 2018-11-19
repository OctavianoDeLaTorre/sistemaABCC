<!DOCTYPE html>
<html lang="en">
<head>
  <title>Altas alumnos</title>
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
      <li class="active"><a href="modificaciones_alumnos.php">Cambios</a></li>
      <li><a href="consultas_alumnos.php">Consultas</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Alumnos</h2>
  <?php 
   include("../script/servidor/ConexionBD.php");
    $h = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'bd_escuela';

    $con = new ConexionBD($h, $u, $p ,$bd);

    $sql = "SELECT * FROM alumnos";
    $titulos [0] = "Número control";
    $titulos [1] = "Nombre";
    $titulos [2] = "Primer apellido";
    $titulos [3] = "Segundo apellido";
    $titulos [4] = "Edad";
    $titulos [5] = "Semestre";
    $titulos [6] = "Carrera";
    $titulos [7] = "Modificar";
    
    $con->modificar($sql,$titulos);

   ?>

</div>

</body>
</html>
