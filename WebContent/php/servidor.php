<?php
class Servidor{
	
	function conectar(){
		
		if (!$conexion = mysqli_connect('localhost','root','','tiendaonline')){
			echo "No se pudo conectar a la base de datos";
			exit;
		}
		else{
			$sql = "SET NAMES 'utf8'";
			mysqli_query($conexion, $sql);
			return $conexion;
		}
	}
	
		
		
		
		

	
	function addCategoria(){
		
		function addCategoria($j){
			
			$conn = $this->conectar(); //CONECTAMOS A LA BASE DE DATOS.
			
			// SE GUARDA EN UN STRING LA SENTENCIA SQL PARA EL LLAMADO DEL
			// PROCEDIMIENTO ALMACENADO
			$sql = "call addCategoria(?);";
			$stmts = $conn->prepare($sql); //SE PREPARA LA SENTENCIA SQL
			
			//SE AÑADE EL PARAMETRO QUE RECIBE EL PROCEDIMIENTO ALMACENADO
			$stmts->bind_param("s",$j->{'nombre'});
			
			// SE EJECUTA Y SE ENVIA LA SOLICITUD AL MOTOR DE BASE DE DATOS.
			if ($stmts->execute()) { // SI TODO SALE BIEN.
				$json = array(); // SE CREA UN ARRAY DONDE SE GUARDARÁ LO DEVUELTO.
				$stmts->store_result(); //Transfiere un conjunto de resultados de la última consulta
				//Vincula variables a una sentencia preparada para el almacenamiento de resultados
				$stmts->bind_result($r);
				
				//Obtiene la siguiente fila de un conjunto de resultados
				while($stmts->fetch()) {
					$fila = array ('r' => $r); // PARSEO LO DEVUELTO A UN ARRAY
					
					$json[] = $fila; //AÑADO EL REGISTRO AL ARRAY DE LOS RESULTADOS.
				}
				//SE CIERRA LA CONEXION
				$conn->close();
				return $json;// RETORNA LOS RESULTADOS
			}
			else{
				$conn->close(); //SE CIERRA LA CONEXION
				return $conn->error; //RETORNA EL ERROR
			}
		}
		
		
		
		
		
	}
	

		
		
		function addProducto($j){
			
			$conn = $this->conectar();
			$sql = "call addProducto(?,?,?,?,?,?,?);";
			
			$stmts = $conn->prepare($sql);
			$stmts->bind_param("ssddsis",
					$j->{'codigo'},
					$j->{'nombre'},
					$j->{'costo'},
					$j->{'precio'},
					$j->{'descripcion'},
					$j->{'categoria'},
					$j->{'imagen'});
			
			if ($stmts->execute()) {
				$json = array();
				$stmts->store_result();
				
				$stmts->bind_result($r);
				
				
				while($stmts->fetch()) {
					$fila = array ('r' => $r);
					
					$json[] = $fila;
				}
				
				$conn->close();
				return $json;
			}
			else{
				$conn->close();
				return $conn->error;
			}
			
		}
		
		
		
		
		


		
		function getCategorias(){
			
			$conn = $this->conectar();
			$sql = "call getCategorias();";
			
			$stmts = $conn->prepare($sql);
			
			if ($stmts->execute()) {
				$json = array();
				$stmts->store_result();
				
				$stmts->bind_result($id,$nombre);
				
				
				while($stmts->fetch()) {
					$fila = array ('id' => $id,'nombre' => $nombre);
					$json[] = $fila;
				}
				
				$conn->close();
				return $json;
			}
			else{
				$conn->close();
				return $conn->error;
			}
			
		}
		
		

	
	
		
		
		function getProductos(){
			
			
			$conn = $this->conectar();
			$sql = "call getProductos();";
			
			$stmts = $conn->prepare($sql);
			
			if ($stmts->execute()) {
				$json = array();
				$stmts->store_result();
				
				$stmts->bind_result($id, $codigo, $nombre, $costo, $precio, $descripcion, $categoria, $imagen,$nombreCategoria);
				
				
				while($stmts->fetch()) {
					$fila = array ('id' => $id, 'codigo' => $codigo, 'nombre' => $nombre, 'costo' => $costo, 'precio' => $precio, 'descripcion' => $descripcion,'categoria' => $categoria, 'imagen' => $imagen,'nombreCategoria' => $nombreCategoria);
					$json[] = $fila;
				}
				
				$conn->close();
				return $json;
			}
			else{
				$conn->close();
				return $conn->error;
			}
			
			
		}
		
		
		
	
	

		
		function  getProductosByCategoria(){
			$conn = $this->conectar();
			$sql = "call getProductosByCategoria(?);";
			
			$stmts = $conn->prepare($sql);
			$stmts->bind_param("i",$j->{'id'});
			
			if ($stmts->execute()) {
				$json = array();
				$stmts->store_result();
				
				$stmts->bind_result($id, $codigo, $nombre, $costo, $precio, $descripcion, $categoria, $imagen,$nombreCategoria);
				
				while($stmts->fetch()) {
					$fila = array ('id' => $id, 'codigo' => $codigo, 'nombre' => $nombre, 'costo' => $costo, 'precio' => $precio, 'descripcion' => $descripcion,
							'categoria' => $categoria, 'imagen' => $imagen,'nombreCategoria' => $nombreCategoria);
					$json[] = $fila;
				}
				
				$conn->close();
				return $json;
			}
			else{
				$conn->close();
				return $conn->error;
			}
		}
		
		
		
		
		
		
		
		

}
?>
