<?php

 session_start();

  if(!isset($_SESSION['usuario'])){
	echo '
	<script>
    alert("Por favor, debes iniciar sesión");
    window.location = "index.php";
	</script>
	';
    session_destroy();
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Bienvenida - Sitio</title>	
</head>
<body background="assets1/images/c44.jpg">
  
    <center>
      <h1><br><FONT COLOR="white"> Bienvenid@ al sitio sobre el Catálogo de Repuestos de Automóviles </FONT><br><h1>
      <h2><br><FONT COLOR="white"> Ha iniciado sesión correctamente </FONT><br><h2>
      <br>
      <a href="index.html" class="btn btn-success btn-lg" role="button">Ver el catálogo</a><br> <br>
      <a href="php/cerrar_sesion.php" class="btn btn-danger btn-lg" role="button">Cerrar Sesion</a> <br> <br>
</center>
</body>
</html>