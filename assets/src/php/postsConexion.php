<?php
header('Content-Type: text/html; charset=UTF-8');


function ejecuta_consulta()
{
    $conections = mysqli_connect('localhost', 'root', '', 'pruebablg');
    if (!$conections) die("Error");

    mysqli_query($conections, "SET NAMES 'utf8'");
    $consulta = "SELECT * FROM post";
    $resultado = mysqli_query($conections, $consulta);
    $filas = array();

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        $filas[] = $fila;
    }
    mysqli_close($conections);
    return $filas;
}