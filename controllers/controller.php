<?php
class MvcController {
    public function plantilla(){
        include "views/template.php";
    }

    public function enlacesPaginasControl(){
        
        if(isset($_GET['action'])){
            $enlacesController= $_GET['action'];
        }else{
            $enlacesController= "inicio.php";
        }
// coje el enlaces controller y lo pone en el metodo del enlaces paginamodel
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }
}



?>