<?php
class ProductosC{
    
    public function RegistrarProductosC(){
        
            
        if(isset($_POST["nombre"])){
            
            $datosC = array("nombre_producto"=>$_POST["nombre"],"referencia_producto"=>$_POST["referencia"],"precio_producto"=>$_POST["precio"],"peso_producto"=>$_POST["peso"],"categoria"=>$_POST["categoria"],"stock_producto"=>$_POST["stock"],"fecha_creacion_producto"=>date('Y-m-d'));

            $tablaBD="producto";
            $respuesta = ProductosM::RegistrarProductosM($datosC, $tablaBD);

            if($respuesta == "ok"){
                echo "producto registrado";
            }else{
                echo "error registrando producto";
            }
        }
    }


    public function MostrarProductosC(){
        $tablaBD="producto";
        $respuesta = ProductosM::MostrarProductosC($tablaBD);

        foreach($respuesta as $key => $value){
            echo '<tr>
            <th scope="row">'.$value['idproducto'].'</th>
            <td>'.$value['nombre_producto'].'</td>
            <td>'.$value['referencia_producto'].'</td>
            <td>'.$value['precio_producto'].'</td>
            <td>'.$value['peso_producto'].'</td>
            <td>'.$value['categoria'].'</td>
            <td>'.$value['stock_producto'].'</td>
            <td>'.$value['fecha_creacion_producto'].'</td>
            <td><a href="index.php?ruta=editarProducto&idproducto='.$value["idproducto"].'"><i class="fa fa-pencil" aria-hidden="true"></a></i>
            </td>
            <td><a href="index.php?ruta=eliminarProducto&idproducto='.$value["idproducto"].'"><i class="fa fa-trash-o" aria-hidden="true"></a></i>
            </td>
            <td><a href="index.php?ruta=venderProducto&idproducto='.$value["idproducto"].'&precio_producto='.$value["precio_producto"].'"><i class="fa fa-money" aria-hidden="true"></i>
            </a></i>
            </td>
            </tr>';
        }
    }

    public function EditarProductosC(){
        $datosC = $_GET["idproducto"];
        $tablaBD="producto";
        $respuesta = ProductosM::EditarProductosM($datosC, $tablaBD);

        echo '
        <input value="'.$respuesta["idproducto"].'" id="idproducto" type="hidden" name="idproducto">
        <div class="form-group row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input value="'.$respuesta["nombre_producto"].'" class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="referencia" class="col-sm-2 col-form-label">Referencia</label>
        <div class="col-sm-10">
          <input value="'.$respuesta["referencia_producto"].'" class="form-control" type="text" id="referencia" name="referencia" placeholder="Referencia" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="precio" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
          <input value="'.$respuesta["precio_producto"].'" class="form-control" type="number" id="precio" name="precio" placeholder="Precio" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="peso" class="col-sm-2 col-form-label">Peso</label>
        <div class="col-sm-10">
          <input value="'.$respuesta["peso_producto"].'" class="form-control" type="number" id="peso" name="peso" placeholder="Peso" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
          <input value="'.$respuesta["categoria"].'" class="form-control" type="text" id="categoria" name="categoria" placeholder="Categoria" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
          <input value="'.$respuesta["stock_producto"].'" class="form-control" type="number" id="stock" name="stock" placeholder="Stock" required>
        </div>
      </div>
      
      <br>
    <input type="submit" class="btn btn-primary" value="Actualizar">

        ';
    }


    public function ActualizarProductosC(){
        if(isset($_POST["idproducto"])){
            $datosC = array("idproducto"=>$_POST["idproducto"],"nombre_producto"=>$_POST["nombre"],"referencia_producto"=>$_POST["referencia"],"precio_producto"=>$_POST["precio"],"peso_producto"=>$_POST["peso"],"categoria"=>$_POST["categoria"],"stock_producto"=>$_POST["stock"]);
            $tablaBD="producto";
            $respuesta = ProductosM::ActualizarProductosM($datosC, $tablaBD);
            if($respuesta == "ok"){
                echo "producto actualizado";
                header("location:index.php?ruta=verProductos");
            }else{
                echo "error actualizando producto";
            }
        }

    }


    public function EliminarProductosC(){
        if(isset($_GET["idproducto"])){
            $datosC = $_GET["idproducto"];
            $tablaBD="producto";
            $respuesta = ProductosM::EliminarProductosM($datosC, $tablaBD);
            if($respuesta == "ok"){
                echo "producto eliminado";
            }else{
                echo "error eliminando producto";
            }
            
        }
    }



    public function VenderProductosC(){
      
      if(isset($_POST["stock"])){
        $datosC = array("precio_venta"=>$_POST["precio"],"fecha_venta"=>date('Y-m-d'),"producto_idproducto"=>$_POST["nombre"]);

        $tablaBD="venta";
        $respuesta = ProductosM::VenderProductosM($datosC, $tablaBD);

        if($respuesta == "ok"){
            echo "producto vendido";
        }else{
            echo "error vendiendo producto";
        }
    }

      
  }



}

?>