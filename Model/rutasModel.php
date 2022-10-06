<?php

class Modelo{
    //creamos una funcion con el parametro de la ruta obtenida
    static public function RutasModelo($rutas){
        if ($rutas=="crearProducto" || $rutas=="verProductos" || $rutas=="editarProducto" || $rutas=="actualizarProducto" || $rutas=="eliminarProducto" || $rutas=="venderProducto"){
            $pagina = "View/".$rutas.".php";
        }
        return $pagina;
    }
    
}

?>