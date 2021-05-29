<?php
if (!empty($_SESSION["userName"])) {
    echo '<a style="color: black; text-decoration: underline;" href="./assets/src/php/cerrarsesion.php"  class="alinear" title="Cerrar sesión">Bienvenid@</a>'.$_SESSION["userName"];
  }
echo <<< EOD
<footer class="alinear">
    <div class="logo ">
        <a href="/adefinanzas/">Aprende<span class=>Finanzas</span></a>
    </div>
</footer>

EOD;
