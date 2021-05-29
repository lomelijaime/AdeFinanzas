<?php
if (isset($_POST['frmNameSignup']) && isset($_POST['frmUsernameSignup']) && isset($_POST['frmPasswordSignup'])) {

    $nombre = $_POST['frmNameSignup'];
    $usuario = $_POST['frmUsernameSignup'];
    $password = $_POST['frmPasswordSignup'];


    $conn = mysqli_connect('localhost', 'root', '', 'pruebablg');
    if (!$conn) {
        printf("Error de conexión %s\n", mysqli_connect_error());
        exit();
    }
    $query = mysqli_prepare($conn, "SELECT * FROM users WHERE Usuario= ?");
    mysqli_stmt_bind_param($query, "s", $usuario);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);
    if (mysqli_stmt_affected_rows($query) > 0) {
        echo "Error, usuario ya existente. Redirigiendo...";
        header("refresh:3; ./../../../ingreso.php");
    }
    if (mysqli_stmt_num_rows($query) == 0) {
        mysqli_stmt_close($query);
        $stmt = mysqli_prepare($conn, "INSERT INTO users (Nombre, Usuario, Password) VALUES (?, ?, ?)");

        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $nombre, $usuario, $hashPassword);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: ./../../../ingreso.php");
    }
} else echo "Error";
