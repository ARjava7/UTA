<?php

include 'conexion.php';
$cedula = $_POST["est_cedula"];
$nombre = $_POST["est_nombre"];
$apellido = $_POST["est_apellido"];
$direccion = $_POST["est_direccion"];
$telefono = $_POST["est_telefono"];

$update = "UPDATE estudiantes SET est_nombre = '$nombre', est_apellido = '$apellido', est_direccion = '$direccion', est_telefono = '$telefono' WHERE est_cedula = '$cedula'";


if ($mysqli -> query($update) === TRUE) {
    echo json_encode("Se edito correctamente");
} else {
    echo json_encode("Error, no se pudo editar".$update.$mysqli -> error);
}

$mysqli -> close();


?>