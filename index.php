<?php
header('Content-Type: text/html; charset=UTF-8');
function ejecuta_consulta()
    {
        $conections = mysqli_connect('localhost', 'root', '', 'pruebablg');
        if (!$conections) die("Error");

        mysqli_query($conections,"SET NAMES 'utf8'");
        $consulta = "SELECT * FROM post";
        $resultado = mysqli_query($conections, $consulta);
        $filas = array();

        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            $filas[] = $fila;
        }
        mysqli_close($conections);
    return $filas;


    }
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
            $cont = 0;
            foreach($posts as $post){
            ?>
                    <div class="card-aprende">
                        <img src="<?php echo $post['Image']; ?>" alt="aprendefinanzas img" class="card-img-top img-fluid">
                            <div class="">
                                <h3 class=""><?php echo $post['Title']; ?></h3>
                                <p class=""><?php echo $post['Date']; ?></p>
                                <div class="flex-align--der">
                                    <a href="/aprendefinanzas/recurso/<?php echo $post['ID_Post']; ?>" class="boton w-sm-total">Ver más</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>
            </div>
            <h2 id="Contacto" class="alinear">Contacto</h2>
            <form action="#" class="formulario">
                <fieldset>
                    <legend>Contáctanos llenando todos los campos</legend>
                    <div class="contenedor-campos">
                        <div class="campo">
                            <label>Nombre</label>
                            <input class="texto-campo" type="text" name="nombre" placeholder="Tu Nombre" required autocomplete="off" />
                        </div>

                        <div class="campo">
                            <label>Teléfono</label>
                            <input class="texto-campo" type="tel" name="telefono" placeholder="Tu Teléfono" required autocomplete="off" />
                        </div>

                        <div class="campo">
                            <label>Correo Electrónico</label>
                            <input class="texto-campo" type="email" name="email" placeholder="Tu E-mail" required autocomplete="email" />
                        </div>

                        <div class="campo">
                            <label>Contenido</label>
                            <textarea class="texto-campo text-md" autocomplete="off" placeholder="Redacta aquí tu mensaje"></textarea>
                        </div>
                    </div>

                    <div class="flex-align--der">
                        <input class="boton w-sm-total" type="submit" value="Enviar" />
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
    <?php require './assets/src/php/minFooter.php' ?>
    <script src="./assets/src/js/app.js"></script>
</body>

</html>