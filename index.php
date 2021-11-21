<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: bienvenida.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio y Registro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets1/css/estilos.css">
    
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login" onsubmit="return validarinicio();">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" id="correo2" placeholder="&#128231; Correo Electronico" name="correo">
                        <input type="password" id="contrasena2" placeholder="&#128272; Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register" onsubmit="return validarregistro();">
                        <h2>Regístrarse</h2>
                        <input type="text" id="nombre_completo" placeholder="&#128100; Nombre Completo" name="nombre_completo">
                        <input type="text" id="correo" placeholder="&#128231; Correo Electronico" name="correo">
                        <input type="text" id="usuario" placeholder="&#128100; Usuario" name="usuario">
                        <input type="password" id="contrasena" placeholder="&#128272; Contraseña" name="contrasena"> 
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets1/js/script.js"></script>
        <script src="assets1/js/validarregistro.js"></script>
        <script src="assets1/js/validarinicio.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>