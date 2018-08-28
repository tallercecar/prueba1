 <?php
 //importamos la clase servidor
 //include_once 'WebContent/php/servidor.php';
 
 //creamos un objeto de tipo servidor
 //$server = new Servidor();
 
 //Hacemos la llamada y obtenemos los productos en un array
 //$productos = $server->getProductos();
 
 
 header('Content-Type: text/html; charset=ISO-8859-1');
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ShoeShop - Productos</title>

<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
<body>
<!-- MENU DE NAVEGACION -->


<nav class="red">
<div class="nav-wrapper">
      <a href="../index.html" class="brand-logo">
  <img alt="LOGO" src="../logo.png" width="150"></a>	
  
  <ul id="nav-mobile" class="right hide-on-med-and-down">
  <li>	
  <a href="../index.html"><i class="material-icons left">home</i>Inicio</a></li>
  <li>	
  <a href ="productos.php"><i class="material-icons left">inbox</i>Productos</a></li>
  <li>	
  <a href="admin/login.php"><i class="material-icons left">account_box</i>Entrar</a></li>
  </ul>
  </div>
</nav>



<div class="">
<div class="row">

	<!--  Sección de categorías -->
	<div class ="col s12 l3">
		<div class="card">
	
			<div class="card-content center">
	
			<h5>Categorías</h5>
	
			</div>
	
		<div class="collection">
						
						<a href="#" class="collection-item active"> Addidas</a>
						<a href="#"class="collection-item"> Nike</a>
						<a href="#"class="collection-item"> New Balance</a>
						<a href="#"class="collection-item"> Bubble Gummers</a>
						<a href="#"class="collection-item"> Converse</a>
			
		</div>	
	</div>
</div>

					
				
<!--  Sección productos -->
<div class="col s12 l8">

	<!-- Card 1 -->
	<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
		<img class="" alt ="" src="../imagenes/img1.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 1</span>
			<p> Descripción 1<br>
			<b>$30.000</b>
			</p>
		</div>
		
		</div>		
		</div> 
		<!-- Fin Card 1 -->
	
	


<!--  
		<!-- Card 2 -->
		<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
		<img alt ="" src="../imagenes/img2.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 2</span>
			<p> Descripción 1<br>
			<b>$50.000</b>
			</p>
		</div>
				
		</div> 
		</div>
		<!-- Fin Card 2 -->
	
		
	<!-- Card 3 -->
		<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
	
			<img alt ="" src="../imagenes/img3.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 3</span>
			<p> Descripción 1<br>
			<b>$45.000</b>
			</p>
		</div>
				
		</div> 
		</div>
		<!-- Fin Card 3 -->
	
	
	
	<!-- Card 4 -->
	<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
	
			<img alt ="" src="../imagenes/img4.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 4</span>
			<p> Descripción 4<br>
			<b>$60.000</b>
			</p>
		</div>
				
		</div> 
		</div>
		<!-- Fin Card 4 -->
	


	<!-- Card 5 -->
		<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
	
			<img alt ="" src="../imagenes/img5.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 5</span>
			<p> Descripción 5<br>
			<b>$60.000</b>
			</p>
		</div>
				
		</div> 
		</div>
		<!-- Fin Card 5 -->


	<!-- Card 6 -->
	<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
	
			<img alt ="" src="../imagenes/img6.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 6</span>
			<p> Descripción 6<br>
			<b>$55.000</b>
			</p>
		</div>
				
		</div> 
		</div>
		<!-- Fin Card 6 -->
		
		
			<!-- Card 7 -->
			<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
	
			<img alt ="" src="../imagenes/img7.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 7</span>
			<p> Descripción 7<br>
			<b>$65.000</b>
			</p>
		</div>
				
		</div> 
		</div>
		<!-- Fin Card 7 -->
		


			<!-- Card 8 -->
			<div class="col s12 m6 l4 xl3">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
	
			<img alt ="" src="../imagenes/img8.jpg">
		</div>
		
		<div class="card-content">
		<span class="car-title activator grey-text text-darken-4">
			ZAPATO 8</span>
			<p> Descripción 8<br>
			<b>$60.000</b>
			</p>
		</div>
		</div>
				
		</div> 
		<!-- Fin Card 8 --> 



















</div>
	
	
	
	</div> 
	
	
</div>			
			

	
	
		


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
           ShoeShop © 2006-2017
            
            </div>
          </div>
        </footer>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>




</body>
</html>