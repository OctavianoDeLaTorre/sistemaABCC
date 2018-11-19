<?php 
	class ConexionBD{
		private $enlace;

		function __construct($h, $u, $p ,$bd) {
			$this->enlace = mysqli_connect($h, $u, $p ,$bd);
		}

		public function getEnlace(){
			if (!$this->enlace) {
				die("Fallo conexion ERROR");
			}else{
				return $this->enlace;
			}
		}

		public function cerrarEnlace(){
			if (!$this->enlace) {
				die("Fallo conexion ERROR");
			}else{
				mysql_close($this->enlace);
			}
		}

		public function ejecutar($sql){
			return mysqli_query($this->enlace, $sql);
		}

		public function consulta($sql,$titulos){
			 $resultado = mysqli_query($this->enlace, $sql);

			  if (mysqli_num_rows($resultado) > 0) {
			  	echo "<table class='table table-striped table-bordered'>";
			  	echo " <thead>";
			  	for ($i=0; $i < sizeof($titulos); $i++) { 
			  		echo "<th>$titulos[$i]</th>";
			  	}
			  	echo " </thead>";
			  	echo "<tbody>";
			        while ($fila = mysqli_fetch_array($resultado)) { 
			        	echo "<tr>";
			        	for ($i=0; $i < sizeof($fila)/2; $i++) { 
			        		echo "<td>$fila[$i]</td>";
			        	}
			        	echo "<td><a href='../script/servidor/prosesar_baja.php?id=$fila[0]'><i class='fas fa-user-times'style='color:red; font-size:20px;'></i></a></td>";
			     
			            echo "<td><a href='../script/servidor/procesar_modificacion.php?txt_num_control=$fila[0]&txt_nombre=$fila[1]&txt_primer_ap=$fila[2]&txt_segundo_ap=$fila[2]&txt_semestre=$fila[4]&txt_edad=$fila[5]&txt_carrera=$fila[6]'><i class='fas fa-user-edit'style='color:green; font-size:20px;'></i></a></td>";
			            echo "</tr>";

			        }
			    }else{
			      echo "<p>No hay registros</p>";
			    }
		}

		public function modificar($sql,$titulos){
			 $resultado = mysqli_query($this->enlace, $sql);

			  if (mysqli_num_rows($resultado) > 0) {
			  	echo "<table class='table table-striped table-bordered'>";
			  	echo " <thead>";
			  	for ($i=0; $i < sizeof($titulos); $i++) { 
			  		echo "<th>$titulos[$i]</th>";
			  	}
			  	echo " </thead>";
			  	echo "<tbody>";
			        while ($fila = mysqli_fetch_array($resultado)) { 
			        	echo "<tr>";
			        	for ($i=0; $i < sizeof($fila)/2; $i++) { 
			        		echo "<td>$fila[$i]</td>";
			        	}
			        	echo "<td><a href='../script/servidor/procesar_modificacion.php?txt_num_control=$fila[0]&txt_nombre=$fila[1]&txt_primer_ap=$fila[2]&txt_segundo_ap=$fila[2]&txt_semestre=$fila[4]&txt_edad=$fila[5]&txt_carrera=$fila[6]'><i class='fas fa-user-edit'style='color:green; font-size:20px;'></i></a></td>";
			            echo "</tr>";
			        }
			    }else{
			      echo "No hay registros";
			    }
		}

	}
 ?>