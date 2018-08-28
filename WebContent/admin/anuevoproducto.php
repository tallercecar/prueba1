 <?php
    header('Content-Type: text/html; charset=ISO-8859-1');
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ShoeShop - Nuevo Producto</title>
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
	
	
		<!-- Sección de categorias -->
		<div class="col s12 l3">
		
			<div class="card">
			
				<div class="card-content center">
				
					<h5>MENÚ</h5>
				
				</div>
				
				<div class="collection">
				        <a href="aproductos.php" class="collection-item">Productos</a>
				        <a href="anuevoproducto.php" class="collection-item">Nuevo Producto</a>
				        <a href="acategorias.php" class="collection-item">Categorías</a>
				        <a href="anuevacategoria.php" class="collection-item">Nueva Categoría</a>
				 </div>
			
			</div>
		
		</div>

<!-- SECCIÓN DE PRODUCTOS -->
		<div class="col s12 l9">
		
		
		<!-- tabla interna con productos -->
			
		<div class="card">  	<!-- borde tipo card -->
			
			<div class="card-content">	<!-- Establece espaciados tipo margenes en el card -->
				
				<div class="row">
							<form >
							
							<div class="input-field col s12">
								<label for="codigo">CÓDIGO</label>
								<input id="codigo" type="text" class="validate"></input>
								</div>
								
								<div class="input-field col s12">
								<label for="nombre">NOMBRE</label>
								<input id="nombre" type="text">
								</div>
								
							
								<div class="input-field col s12">
								<label for="costo">COSTO</label>
								<input id="costo" type="text">
								</div>
								
								
								<div class="input-field col s12">
								<label for="precio">PRECIO</label>
								<input id="precio" type="text">
								</div>
								
								
								<div class="input-field col s12">
								<textarea id="descripcion" class="materialize-textarea"></textarea>
								<label for="descripcion">DESCRIPCIÓN</label>
								</div>
								
															
								<div class="file-field input-field col s12">
									<div class="btn">
									<span>IMAGEN</span>
									<input type="file">
									</div>
								
								
								
									<div class="file-path-wrapper">
									<input class="file-path validate" type="text">								
									</div>
								</div>
								
																
								<div class="input-field col s12">
								
								<select>
								  <option value="1">ADIDAS</option>
								  <option value="2">NIKE</option>
								  <option value="3">NEW BALANCE</option>
								  <option value="4">CONVERSE</option>
								</select>
								<label for="categoria">SELECCIONE CATEGORÍA</label>								
								</div>
								
								<div class="input-field col s12">	
			<a class="waves-effect waves-light btn red"><i class="material-icons left">save</i>Guardar</a>
			<a class="waves-effect waves-teal btn-flat"><i class="material-icons left">cancel</i>cancelar</a>
		 </div>

							</form>

				</div>	
</div>
				
			</div>
		
		<!-- Fin tabla interna con productos -->
		
		</div>
		

	</div>		
</div>


<!-- Fin Estructura de la pagina: 2 Columnas (Menu, Informacion) -->



<!-- ESTA ES LA SECCIÓN DE PIE DE PAGINA -->
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
           ShoeShop © 2006-2018
            
            </div>
          </div>
        </footer>

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript">
$('select').material_select();
</script>

</body>
</html>