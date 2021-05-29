<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AprendeFinanzas</title>
    <link rel="stylesheet" href="./assets/src/css/style.css">
    <?php include './assets/src/php/favicon.php' ?>
</head>

<body>
    <?php require './assets/src/php/minHeader.php';
    if (isset($others))
    echo $others; ?>
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
            <form action="./assets/src/php/login.php" method="POST" class="formulario_login" id="frmLogin">
              <h2>Iniciar Sesión</h2>
              <input name="frmUsernameLogin" id="frmUsernameLogin" type="text" placeholder="Usuario" pattern="[a-zA-Z0-9]+" required minlength="6"  />
              <input name="frmPasswordLogin" id="frmPasswordLogin" type="password" placeholder="Contraseña" required minlength="6"/>
              <button id="btnLogin" type="submit">Ingresar</button>
            </form>
            <form action="./assets/src/php/signup.php" method="POST" class="formulario_registro" id="frmSignup">
              <h2>Regístrate</h2>
              <input name="frmNameSignup" id="frmNameSignup" type="text" placeholder="Nombre completo" pattern="[a-zA-Z0-9]+" required minlength="6"/>
              <input name="frmUsernameSignup" id="frmUsernameSignup" type="text" placeholder="Usuario" pattern="[a-zA-Z0-9]+" required minlength="6"/>
              <input name="frmPasswordSignup" id="frmPasswordSignup" type="password" placeholder="Contraseña" required minlength="6"/>
              <input name="frmVerifySignup" id="frmVerifySignup" type="password" placeholder="Repita su contraseña" required minlength="6"/>
              <button id="btnRegister" type="submit">Registrarse</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    <script src="./assets/src/js/app.js"></script>
    <script src="./assets/src/js/iniciar.js"></script>
</body>

</html>