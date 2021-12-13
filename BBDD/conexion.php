<?php
// Leo el fichero de datos
    $string = file_get_contents(".claves");
    $lineas = explode (" ", $string);

// Array de la conexión.
$bbdd = $lineas[0];
$usuario = $lineas[1];
$clave = $lineas[2];

//Conexión con control de errores
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

//Conexión mediante PDO

try {
    $db = new PDO("mysql:host=localhost;dbname=$bbdd", $usuario, $clave, $opciones );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>