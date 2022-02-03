<?php
include 'conexion.php';
$SqlSelect= "select * from estudiantes ";
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