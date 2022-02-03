<?php

include 'conexion.php';
$cedula = $_POST["est_cedula"];

$delete = "DELETE FROM estudiantes WHERE est_cedula = '$cedula'";


if ($mysqli -> query($delete) === TRUE) {
    echo json_encode("Se elimino correctamente");
} else {
    echo json_encode("Error, no se pudo eliminar".$delete.$mysqli -> error);
}

$mysqli -> close();

?>