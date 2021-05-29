<?php
session_start();

if (isset($_POST['frmUsernameLogin']) && isset($_POST['frmPasswordLogin'])) {

    $usuario = $_POST['frmUsernameLogin'];
    $password = $_POST['frmPasswordLogin'];


    $conn = mysqli_connect('localhost', 'root', '', 'pruebablg');
    if (!$conn) {
        printf("Error de conexión %s\n", mysqli_connect_error());
        exit();
    }
    $query = mysqli_prepare($conn, "SELECT Nombre, Password FROM users WHERE Usuario= ?");
    mysqli_stmt_bind_param($query, "s", $usuario);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);

    if (mysqli_stmt_num_rows($query) == 0){
        echo 'Usuario o contraseña inválidos...';
        header('refresh:3; ./../../../ingreso.php');
    }
    if (mysqli_stmt_num_rows($query) == 1){
        mysqli_stmt_bind_result($query, $userNombre, $userPassword);
        mysqli_stmt_fetch($query);
        if(password_verify($password, $userPassword)){
            echo "Iniciaste sesión, ".$userNombre;
            $_SESSION['userName'] = $userNombre;
        }else
            echo "Usuario o contraseña no válidos.";
            header('refresh:3; ./../../../ingreso.php');
        }
}
else header('Location: ./../../../ingreso.php');