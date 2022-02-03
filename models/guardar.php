<?php
include 'conexion.php';
//tomar en cuentalo ya creado
//con get muestra direccion en la url, y con post no
$cedula=$_POST["est_cedula"];
$nombre=$_POST["est_nombre"];
$apellido=$_POST["est_apellido"];
$direccion=$_POST["est_direccion"];
$telefono=$_POST["est_telefono"];

$sqlInsert="INSERT INTO estudiantes(est_cedula,est_nombre, est_apellido, est_direccion, est_telefono) VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono')";
if($mysqli->query($sqlInsert)==TRUE){
    echo json_encode("GUARDADO");
}else{
    echo json_encode("ERRORXXXXXXX".$sqlInsert.$mysqli->error);
}

$mysqli->close();

?>