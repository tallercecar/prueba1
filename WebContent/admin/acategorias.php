 <?php
    header('Content-Type: text/html; charset=ISO-8859-1');
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ShoeShop - Categor�as</title>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<!-- MENU DE NAVEGACION -->
<nav class="red">
	<div class="nav-wrapper">
      <a href="../index.html" class="brand-logo">
  		<img alt="LOGO" src="../../logo.png" width="150"></a>	
  
  		<ul id="nav-mobile" class="right hide-on-med-and-down">
  		<li>	
  		<a href="../../index.html"><i class="material-icons left">home</i>Inicio</a></li>
 		 <li>	
  		<a href ="../productos.php"><i class="material-icons left">inbox</i>Productos</a></li>
  		<li>	
  		<a href="login.php"><i class="material-icons left">account_box</i>Entrar</a></li>
  		</ul>
  	</div>
</nav>

<!-- Estructura de la pagina: 2 Columnas (Menu, Informacion) -->
<div class="">
	<div  class="row">
	
	
		<!-- Secci�n de categorias -->
		<div class="col s12 l3">
		
			<div class="card">
			
				<div class="card-content center">
				
					<h5>MEN�</h5>
				
				</div>
				
				<div class="collection">
				        <a href="aproductos.php" class="collection-item">Productos</a>
				        <a href="anuevoproducto.php" class="collection-item">Nuevo Producto</a>
				        <a href="acategorias.php" class="collection-item">Categor�as</a>
				        <a href="anuevacategoria.php" class="collection-item">Nueva Categor�a</a>
				 </div>
			
			</div>
		
		</div>

		
		<!-- SECCI�N DE CATEGOR�AS -->
		<div class="col s12 l9">
		
				
		<!-- tabla interna con categor�as -->
			
		<div class="card">  	<!-- borde tipo card -->
			
			<div class="card-content">	<!-- Establece espaciados tipo margenes en el card -->
		
			 <table class="responsive-table">
             <thead>
		
			<tr>
				<th>CODIGO</th>
				<th>NOMBRE</th>
				<th>OPCIONES</th>
				
			</tr>
			</thead>
	
			<tbody>
			<tr>
				<td>1</td>
				<td>ADIDAS</td>
				<td>
					<a class="waves-effect waves-teal btn-flat tooltipped" data-position="bottom" data-tooltip="Editar Categor�a."><i class="material-icons">edit</i></a>
				</td>
				
			</tr>
			<tr>
				<td>2</td>
				<td>NIKE</td>
				<td>
					<a class="waves-effect waves-teal btn-flat tooltipped" data-position="bottom" data-tooltip="Editar Categor�a."><i class="material-icons">edit</i></a>
				</td>
				
			</tr>
			
			<tr>
			
				<td>3</td>
				<td>NEW BALANCE</td>
				<td>
					<a class="waves-effect waves-teal btn-flat tooltipped" data-position="bottom" data-tooltip="Editar Categor�a."><i class="material-icons">edit</i></a>
				</td>
				
			</tr>
			<tr>
			
				<td>4</td>
				<td>CONVERSE</td>
				<td>
					<a class="waves-effect waves-teal btn-flat tooltipped" data-position="bottom" data-tooltip="Editar Categor�a."><i class="material-icons">edit</i></a>
				</td>
				
			</tr>
		</tbody>
		</table>
  		</div>
			</div>
		
		<!-- Fin tabla interna con categor�as -->
		
		</div>
		
	</div>		
</div>


<!-- Fin Estructura de la pagina: 2 Columnas (Menu, Informacion) -->





<!-- ESTA ES LA SECCI�N DE PIE DE PAGINA -->
	<footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contacto.</h5>
                <p class="grey-text text-lighten-4">contacto@shoeshop.com</p>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
           ShoeShop � 2006-2018
            
            </div>
          </div>
        </footer>
        
        
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../js/materialize.min.js"></script>


      
<script type="text/javascript">
$(document).ready(function(){
  $('.tooltipped').tooltip({delay: 50});
});
   
</script>



</body>
</html>




