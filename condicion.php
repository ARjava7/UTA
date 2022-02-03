<?php
$a=5;
$b=6;

if($a>$b){
    echo "a es mayor<br>";

}else if($a==$b){
    echo "son iguales<br>";
} else{
    
        echo "b es el mayor<br>";
    

}

$op="sabado";

switch($op){
 case 'sabado': echo"vacaciones<br>";
    break;
    case 'viernes': echo"baile<br>";
    break;

    default: echo "clases<br>";
    break;

}

$n=0;

while($n<5){
    echo $n;
    $n++;
}



for ($i=0; $i<5 ; $i++) { 
    echo "update: ".$i;
}




?>