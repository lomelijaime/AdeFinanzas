<?php
require 'connection.php';

$message = '';

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$verify_password = $_POST['verify_password'];

if (!empty($name) && !empty($username) && !empty($password) && !empty($verify_password)){
    if(strcmp($password, $verify_password) == 0) {
        $sql = "INSERT INTO usuario (Nombre, Usuario, Clave) VALUES 
        (:name, :username, :password)";
        $stmt = $db_conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()){
            $message = 'Usuario creado satisfactoriamente';
        } else{
            $message = 'Lo sentimos, ha ocurrido un error al crear su cuenta, por favor verifique los datos e inténtelo de nuevo';
        }
    } else {
        $message = "Las contraseñas no coinciden";
    }
}