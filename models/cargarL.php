<?php
include 'conexion.php';
$nombre=$_REQUEST["text"];
$SqlSelect= "select * from estudiantes WHERE est_nombre LIKE ''$nombre'%'";
$respuesta= $conn->query($SqlSelect);
$result=array();
if($respuesta->num_rows>0){
while($filasEstudiantes=$respuesta->fetch_assoc()){
array_push($result, $filasEstudiantes);
}}
else{
    $result="no hay estudiantes";
}
echo json_encode($result);
?>

