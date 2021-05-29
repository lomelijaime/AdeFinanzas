<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (!isset($_SESSION['userName']))
    header('Location: ./ingreso.php');

$idPost = $_GET['publicacionId'];
$conn = mysqli_connect('localhost', 'root', '', 'pruebablg');
if (!$conn) {
    printf("Error de conexión %s\n", mysqli_connect_error());
    exit();
}
mysqli_query($conn, "SET NAMES 'utf8'");
$query = mysqli_prepare($conn, "SELECT * FROM post WHERE ID_Post= ?");
mysqli_stmt_bind_param($query, "i", $idPost);
mysqli_stmt_execute($query);
mysqli_stmt_store_result($query);

if (mysqli_stmt_num_rows($query) == 0) {
    header('Location: ./../../../ingreso.php');
}
if (mysqli_stmt_num_rows($query) == 1) {
    mysqli_stmt_bind_result($query, $postID, $postTitle, $postImage, $postDate, $postContent);
    mysqli_stmt_fetch($query);


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
        <main class="contenedor">
            <div>
                <img class="mb-2" src="<?php echo $postImage; ?>">
                <?php echo $postContent; ?>
                <p>Publicado el: <?php echo $postDate;
                                } ?></p>
        </main>
        <?php require './assets/src/php/minFooter.php' ?>
        <script src="./assets/src/js/app.js"></script>
    </body>

    </html>