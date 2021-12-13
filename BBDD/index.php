<?php
require_once "conexion.php";

//Insert
$registros = $db->exec('INSERT INTO personas (nombre) VALUES ("Hola"),("Pepe")');
if ($registros){
    echo "Se han activado $registros registros.";
}

//Delete
$registros = $db->exec('DELETE FROM personas WHERE id>3');
if ($registros){
    echo "Se han activado $registros registros.";
}

//Update
$registros = $db->exec('UPDATE personas SET activo=1 WHERE activo=0');
if ($registros){
    echo "Se han activado $registros registros.";
}
echo "";

//Select con BOTH
$resultado = $db->query('SELECT * FROM personas');
while ($personas = $resultado->fetch()){ //O bien ($resultado->fetch(PDO::FETCH_BOTH)
    echo $personas['id']." ".$personas[1]." ".$personas['activo']."<br>";
}

