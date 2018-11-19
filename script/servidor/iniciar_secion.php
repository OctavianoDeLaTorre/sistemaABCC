<?php 

	include("ConexionBD.php");
    $h = '127.0.0.1';
    $u = 'root';
    $p = '';
    $bd = 'bd_escuela';

    $con = new ConexionBD($h, $u, $p ,$bd);



	$usuario = $_POST["txt_usuario"];
	$clave = $_POST["txt_clave"];
	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave='$clave'";


	$res = $con->ejecutar($sql);

	echo($res);
	if ($res) {
		header('Location:../../vista/consultas_alumnos.php');
	} else {
		echo "Error de acceso";
	}
 ?>