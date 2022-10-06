<?php

require_once "conexion.php";

class ProductosM extends ConexionBD{

    static public function RegistrarProductosM($datosC, $tablaBD){
        
       $pdo = ConexionBD::conBD()->prepare("insert into $tablaBD (nombre_producto,referencia_producto,precio_producto,peso_producto,categoria,stock_producto,fecha_creacion_producto) VALUES (:nombre,:referencia,:precio,:peso,:categoria,:stock,:fecha)");

       $pdo -> bindParam(":nombre", $datosC["nombre_producto"], PDO::PARAM_STR);
       $pdo -> bindParam(":referencia", $datosC["referencia_producto"], PDO::PARAM_STR);
       $pdo -> bindParam(":precio", $datosC["precio_producto"], PDO::PARAM_STR);
       $pdo -> bindParam(":peso", $datosC["peso_producto"], PDO::PARAM_STR);
       $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
       $pdo -> bindParam(":stock", $datosC["stock_producto"], PDO::PARAM_STR);
       $pdo -> bindParam(":fecha", $datosC["fecha_creacion_producto"], PDO::PARAM_STR);

       if($pdo -> execute()){
        return "ok";
       }else{
        return "error";
       }
       $pdo -> close();
    }


    static public function MostrarProductosC($tablaBD){
        $pdo = ConexionBD::conBD()->prepare("select * from $tablaBD");
        $pdo -> execute();

        return $pdo->fetchAll();
        $pdo -> close();
    }

    static public function EditarProductosM($datosC, $tablaBD){
        $pdo = ConexionBD::conBD()->prepare("select * from $tablaBD where idproducto=:idproducto");

        $pdo -> bindParam(":idproducto", $datosC, PDO::PARAM_INT);

        $pdo -> execute();
        return $pdo->fetch();
        $pdo -> close();
    }

    static public function ActualizarProductosM($datosC, $tablaBD){
        


        $pdo = ConexionBD::conBD()->prepare("update producto set nombre_producto = :nombre, referencia_producto = :referencia, precio_producto = :precio, peso_producto = :peso, categoria = :categoria,stock_producto = :stock where idproducto= :idproducto");



        $pdo -> bindParam(":idproducto", $datosC, PDO::PARAM_INT);
        $pdo -> bindParam(":nombre", $datosC["nombre_producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":referencia", $datosC["referencia_producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":precio", $datosC["precio_producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":peso", $datosC["peso_producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":stock", $datosC["stock_producto"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return "ok";
           }else{
            return "error";
           }
           $pdo -> close();

 
    }

    static public function EliminarProductosM($datosC, $tablaBD){
        $pdo = ConexionBD::conBD()->prepare("delete from $tablaBD where idproducto= :idproducto");

        $pdo -> bindParam(":idproducto", $datosC, PDO::PARAM_INT);

        if($pdo -> execute()){
            return "ok";
           }else{
            return "error";
           }
           $pdo -> close();
    }


    static public function VenderProductosM($datosC, $tablaBD){
        

        $pdo = ConexionBD::conBD()->prepare("insert into $tablaBD (precio_venta,fecha_venta,producto_idproducto) VALUES (:precio,:fecha,:nombre)");

        $pdo -> bindParam(":nombre", $datosC["producto_idproducto"], PDO::PARAM_STR);
        $pdo -> bindParam(":precio", $datosC["precio_venta"], PDO::PARAM_STR);      
    
        $pdo -> bindParam(":fecha", $datosC["fecha_venta"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return "ok";
           }else{
            return "error";
           }
           $pdo -> close();

 
    }



}

?>