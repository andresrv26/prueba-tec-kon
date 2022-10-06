

<div class="container">
  <br>
  <p>Vender producto</p>
  <br>
  <form method="post">  
    
    
    <div class="form-group row">
      <label for="precio" class="col-sm-2 col-form-label">Precio</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio" value="<?php echo $_GET["precio_producto"]; ?>" readonly required>
      </div>
    </div>
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="ID"  value="<?php echo $_GET["idproducto"]; ?>" readonly required>
      </div>
    </div>

    
    <div class="form-group row">
      <label for="stock" class="col-sm-2 col-form-label">Cantidad</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="stock" name="stock" placeholder="Cantidad" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="fecha" class="col-sm-2 col-form-label">Fecha de venta</label>
      <div class="col-sm-10">
        <input class="form-control" readonly type="text" id="fecha" name="fecha" placeholder="Fecha de creacion" value="<?php echo date('Y-m-d') ?>" required
      </div>
    </div>

    <br>
    <input type="submit" class="btn btn-primary" value="Vender">
</form>
</div>


<?php
//objeto 
$vender=new ProductosC();
//funcion
$vender -> VenderProductosC();

?>

