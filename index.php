<?php
//inlcuimos las clases y funciones
require_once "Controller/rutasCont.php";
require_once "Controller/productosC.php";

require_once "Model/rutasModel.php";
require_once "Model/productosM.php";



//objeto para el manejo de rutas
$rutas = new RutasControlador();
//funcion
$rutas -> PlantillaPrincipal();

?>