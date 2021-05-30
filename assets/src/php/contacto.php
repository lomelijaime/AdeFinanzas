<?php
if (isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['contenido'])) {
    $name = $_POST['nombre'];
    $tel = $_POST['telefono'];
    $email = $_POST['email'];
    $content = $_POST['contenido'];

    $conn = mysqli_connect('localhost', 'root', '', 'pruebablg');
    if (!$conn) {
        printf("Error de conexión %s\n", mysqli_connect_error());
        exit();
    }
    mysqli_query($conn, "SET NAMES 'utf8'");
    $stmt = mysqli_prepare($conn, "INSERT INTO contact (Nombre, Telefono, Email, Contenido) VALUES (?, ?, ?, ?)");

    mysqli_stmt_bind_param($stmt, "ssss", $name, $tel, $email, $content);

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_close($stmt);
        echo "Mensaje enviado con éxito";
        mysqli_close($conn);
        header("refresh:3; ./../../../index.php");
    } else echo "Error ". mysqli_stmt_affected_rows($stmt);
}
