<!DOCTYPE html>
<?php
    require 'php/connection.php';
    require 'php/login.php';
    require 'php/signup.php';
?>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AprendeFinanzas</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="bg-encabezado">
      <nav class="navegacion">
        <div class="logo">
          <a href="index.html">Aprende<span>Finanzas</span></a>
        </div>
        <ul class="nav-links">
          <li><a href="Nosotros.html">Nosotros</a></li>
          <li><a href="#">Recursos</a></li>
          <li><a href="Ingresar.php">Ingresar</a></li>
        </ul>
        <div class="burger">
          <div class="linea1"></div>
          <div class="linea2"></div>
          <div class="linea3"></div>
        </div>
      </nav>
    </header>
    <main class="bg-ingresar">
      <div class="oscurecer-fondo">
        <div class="contenedor-ingresar">
          <div class="mensaje_trasero">
            <div class="mensaje_trasero-login">
              <h3>¿Ya tienes una cuenta?</h3>
              <p>Inicia sesión para entrar en AprendeFinanzas</p>
              <button id="btn_iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="mensaje_trasero-registro">
              <h3>¿Aún no tienes una cuenta?</h3>
              <p>Regístrate para que puedas iniciar sesión</p>
              <button id="btn_registrarse">Registrarse</button>
            </div>
          </div>
          <div class="contenedor_login-registro">
            <form action="./php/login.php" method="POST" class="formulario_login">
              <h2>Iniciar Sesión</h2>
              <input name="username" type="text" placeholder="Usuario" />
              <input name="password" type="password" placeholder="Contraseña" />
              <button type="submit">Ingresar</button>
            </form>
            <form action="./php/signup.php" method="POST" class="formulario_registro">
              <h2>Regístrate</h2>
              <input name="name" type="text" placeholder="Nombre completo" />
              <input name="username" type="text" placeholder="Usuario" />
              <input name="password" type="password" placeholder="Contraseña" />
              <input name="verify_password" type="password" placeholder="Repita su contraseña" />
              <button type="submit">Registrarse</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/app.js"></script>
  </body>
</html>