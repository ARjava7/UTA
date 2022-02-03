<?php
include "conexion.php";

$consulta= "select * from estudiantes";
echo $consulta;
$resultado= $conn->query($consulta);
while($fila=$resultado->fetch_array()){

print_r($fila) ;

}
?>