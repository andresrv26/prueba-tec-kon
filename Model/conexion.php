<?php
class ConexionBD{
    public function conBD(){
        $bd = new PDO("mysql:host=localhost;dbname=ventassi","root","");
        return $bd;
    }
}
?>