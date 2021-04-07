<?php
session_start();

require 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password)){
    $records = $db_conn->prepare('SELECT ID, Usuario, Clave FROM usuario WHERE Usuario = :username');
    $records->bindParam(':username', $username);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    if (count($results) > 0 && password_verify($password, $results['Clave'])){
        $_SESSION['user_id'] = $results['ID'];
        header("Location: ../index.html");
    }
    else{
        $message = 'Lo sentimos, credenciales inválidas';
    }
}

