<?php

function saludo(){
    echo "hola como estas<br>";
}

function despedida($adios){
    echo $adios;
}


function retorno($retornar){
    return $retornar;
    
}


echo retorno("retorno<br>");
saludo();

despedida("chao");
?>