<?php
Class EnlacesPaginas {
    public static function enlacesPaginasModel($enlacesModel){
        if($enlacesModel =="nosotros" || $enlacesModel =="servicios" || $enlacesModel =="contactanos"){
            $modulo= "views/interfaces/".$enlacesModel.".php";

        }else if($enlacesModel =="index"){
            $modulo= "views/interfaces/inicio.php";
        }else{
            $modulo= "views/interfaces/inicio.php";
        }
        return $modulo;
    }
}



?>