<?php
    global $db_conn;
    $db_host = 'localhost:3306';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'aprendefinanzas';

try {
    $db_conn = new PDO("mysql:host=$db_host;dbname=$db_name;",$db_user, $db_password);
} catch (PDOException $e) {
    die('Conección Faliida: ' . $e->getMessage());
}

