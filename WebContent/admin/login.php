

    <?php
    header('Content-Type: text/html; charset=ISO-8859-1');
    ?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ShoeShop - Productos</title>

<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- por terminar -->
<style type="text/css">

.page-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  text-align: left;
}

.footer-copyright
{
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  text-align: left;
}

</style>

<!-- por terminar -->

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

<!-- ESTA ES LA SECCIÓN DE LOGUEO EMPRESA -->
<div class="row">	

	<div class="col s12 m3 l4 xl4"></div>

	<!-- EN ESTE VIENE EL CONTENIDO -->
	<div class="col s12 m6 l4 xl4">
	
		<div class="card">
			<div class="card-content">
				<form >
					<div class="input-field col s12">
						<i class="material-icons prefix">person_outline</i>
						<label for="user">Usuario</label>
						<input id="user" type="text" class="validate"></input>
					</div>
		
									
					<div class="input-field col s12">
					<i class="material-icons prefix">lock_outline</i>
						<label for="pass">Contraseña</label>
						<input id="pass" type="password" class="validate">
					</div>
						<a class="waves-effect waves-light btn">
						<i class="material-icons left">done</i>Entrar</a>	
						<!-- <input type="submit" value="Entrar"> -->
				</form>		
		
		
			</div>
		</div>
	</div>

	
	<div class="col s12 m3 l4 xl4"></div></div>











<br><br>
<br>
<br>
<br>
<br>
<br>
<br>



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
      <script type="text/javascript" src="../js/materialize.min.js"></script>


</body>
</html>