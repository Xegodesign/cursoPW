<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8">
			<meta name="description" content="Ejercicio 1 de programación web">
			<meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport">
			<meta name="keywords" content="Programación, web">
			<title>Ejercicio 1 de Programación web</title>
			<link rel="stylesheet" href="misestilos1.css">
		</head>	
		<body>
			<section class="formulario">
<?php
	//Obtener los valores de las variables de HTML
        if (isset($_REQUEST[['insertar']]))	
		  {
		   $insertar = $_REQUEST['insertar'];	  
           $usuario = $_REQUEST	['usuario'];
           $clave = $_REQUEST ['clave'];
           $correo = $_REQUEST ['Correo'];		   
			
		  }	 
?>			 
			 
			 
			 
			 <h1>Registrarse</h1>
			 <form action="insertar_usuario.php" name="insertar" method="post">
			    <p class="campo">Usuario:*<input type="text" name="usuario" size="10" maxlenght="10" required></p>
				<p class="campo">Clave:*<input type="text" name="clave" id="miclave" size="10" maxlenght="10" required></p>
				<p class="campo">Correo:*<input type="email" name="correo" id="micorreo" maxlenght="10" required></p>
				<p class="campo"><input type="submit" name="insertar" value="Registrarse"></p>
			 </form>
			 <p class="campo">Nota: Los datos marcados con (*) deben ser realizados obligatoriamente</p>
			 <p class="campo"><a href="index.html">volver al inicio</a></p>
		    </section>
		</body>
	</html>	
			 
			 