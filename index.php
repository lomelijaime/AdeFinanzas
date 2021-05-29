<?php
session_start();
require './assets/src/php/postsConexion.php';
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
    if(isset($index))
    echo $index; ?>
    <main>
        <div class="contenedor">
            <h2 id="Inicio" class="alinear">Inicio</h2>
            <p>
                La Organizacion para la Cooperación y el Desarrollo Económicos (OCDE)
                la define como un proceso mediante el cual las personas mejoran su
                comprensión de los diferentes productos y servicios financieros, así
                como de sus riesgos y beneficios, lo que les permite desarrollar
                habilidades para tomar mejores decisiones y lograr así un mayor
                bienestar económico.
            </p>
            <p>
                La educacion financiera constituye un concepto fundamental que, pese a
                su importancia, tiene un alcance limitado.
            </p>
            <p>
                En México, el nivel de educación fincanciera tiene una relación muy
                grande con el nivel de ingresos y estudios de la gente, siendo así muy
                notable la diferencia entre las clases sociales.
            </p>

            <div class="img-introduccion"></div>


            <h2 id="Nosotros" class="alinear">Más sobre Aprende<wbr>Finanzas</h2>
            <p>
                Aprendefinanzas.online nace como un proyecto en búsqueda de informar
                de temas relevantes a las finanzas personales en las mexicanas y
                mexicanos con el compromiso de brindar información y enseñar.
                La educacion financiera constituye un concepto fundamental que, pese a
                su importancia, tiene un alcance limitado.
            </p>
            <p>
                En México, el nivel de educación fincanciera tiene una relación muy
                grande con el nivel de ingresos y estudios de la gente, siendo así muy
                notable la diferencia entre las clases sociales.
            </p>
            <h2 id="Aprende" class="alinear">Aprende</h2>
            <div class="grid-aprende">
                <?php
                $posts = ejecuta_consulta();
                foreach ($posts as $post) {
                ?>
                    <div class="card-aprende">
                        <img src="<?php echo $post['Image']; ?>" alt="aprendefinanzas img" class="card-img">
                        <div class="card-contenido">
                            <h3 class=""><?php echo $post['Title']; ?></h3>
                            <p class=""><?php echo $post['Date']; ?></p>
                            <a href="/adefinanzas/recurso.php?publicacionId=<?php echo $post['ID_Post']; ?>" class="boton w-sm-total card-btn">Ver más</a>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div>
                <h2 id="Contacto" class="alinear">Contacto</h2>

                <form action="./assets/src/php/contacto.php" method="post" class="formulario" id="frmContacto">
                    <fieldset>
                        <legend>Contáctanos llenando todos los campos</legend>
                        <div class="contenedor-campos">
                            <div class="campo">
                                <label>Nombre</label>
                                <input class="texto-campo" type="text" name="nombre" id="frmNombre" placeholder="Tu Nombre" required autocomplete="off" />
                            </div>
                            <div class="campo">
                                <label>Teléfono</label>
                                <input class="texto-campo" type="tel" name="telefono" id="frmTelefono" placeholder="Tu Teléfono" required autocomplete="off" />
                            </div>
                            <div class="campo">
                                <label>Correo Electrónico</label>
                                <input class="texto-campo" type="email" name="email" id="frmEmail" placeholder="Tu E-mail" required autocomplete="email" />
                            </div>
                            <div class="campo">
                                <label>Contenido</label>
                                <textarea class="texto-campo text-md" name="contenido" id="frmContenido" autocomplete="off" placeholder="Redacta aquí tu mensaje"></textarea>
                            </div>
                        </div>
                        <div class="flex-align--der">
                            <input class="boton w-sm-total" type="submit" name="enviar" value="Enviar" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <?php require './assets/src/php/minFooter.php' ?>
    <script src="./assets/src/js/app.js"></script>
    <script src="./assets/src/js/validaFrm.js"></script>
</body>

</html>