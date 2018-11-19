<?php 

	include("ConexionBD.php");
    $h = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'bd_escuela';

    $con = new ConexionBD($h, $u, $p ,$bd);

 


	$num_control = $_POST["txt_num_control"];
	$nombre = $_POST["txt_nombre"];
	$primer_ap = $_POST["txt_primer_ap"];
	$segundo_ap = $_POST["txt_segundo_ap"];
	$semestre = $_POST["txt_semestre"];
	$edad = $_POST["txt_edad"];
	$carrera = $_POST["txt_carrera"];



	$sql = "UPDATE alumnos SET nombre='$nombre',primer_apellido='$primer_ap',segundo_apellido='$segundo_ap',edad=$edad,semestre=$semestre,carrera='$carrera' WHERE num_control=$num_control";
    $resultado = $con->ejecutar($sql);

	if ($resultado) {
		header('Location:../../vista/modificaciones_alumnos.php');
	} else {
		echo "Error de acceso";
		
	}
 ?>