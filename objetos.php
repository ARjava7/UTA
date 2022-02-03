<?php

$automovil1 = (object)["marca"=>"toyota", "modelo"=>"yaris"];
$automovil2 = (object)["marca"=>"Lamborghini", "modelo"=>"Diablo"];
function mostrar($automovil){
echo " Soy el $automovil->marca,modelo $automovil->modelo ";
echo "<br>";
}


mostrar($automovil1);
mostrar($automovil2);
?>