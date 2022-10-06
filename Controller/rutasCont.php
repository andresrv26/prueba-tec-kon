<?php

class RutasControlador{

    public function PlantillaPrincipal(){
        //index view
        include "View/indexView.php";
    }

        //funcion para el manejo de rutas de archivos
    public function Rutas(){
        if (isset($_GET["ruta"]))
            $rutas = $_GET["ruta"];

        else{
            $rutas="index";
        }
        // respuesta desde la clase modelo en rutasModel.php
        $respuesta = Modelo::RutasModelo($rutas);
        include $respuesta;
    }
}
?>