<?php
class Automovil{
    public $marca;
    public $modelo;
    public function mostrar(){
        echo " Soy el $this->marca,modelo $this->modelo ";
echo "<br>";
    }
}

$a1= new Automovil();
$a1->marca = "toyota1";
$a1->modelo = "yaris";
$a1->mostrar();


$a2= new Automovil();
$a2->marca = "Lamborghini";
$a2->modelo = "diablo";
$a2->mostrar();


?>