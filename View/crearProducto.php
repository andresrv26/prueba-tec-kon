

<div class="container">
  <br>
  <p>Nuevo producto</p>
  <br>
  <form method="post">  
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="referencia" class="col-sm-2 col-form-label">Referencia</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="referencia" name="referencia" placeholder="Referencia" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="precio" class="col-sm-2 col-form-label">Precio</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="precio" name="precio" placeholder="Precio" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="peso" class="col-sm-2 col-form-label">Peso</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="peso" name="peso" placeholder="Peso" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="categoria" name="categoria" placeholder="Categoria" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="stock" class="col-sm-2 col-form-label">Stock</label>
      <div class="col-sm-10">
        <input class="form-control" type="number" id="stock" name="stock" placeholder="Stock" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="fecha" class="col-sm-2 col-form-label">Fecha de creacion</label>
      <div class="col-sm-10">
        <input class="form-control" readonly type="text" id="fecha" name="fecha" placeholder="Fecha de creacion" value="<?php echo date('Y-m-d') ?>" required
      </div>
    </div>

    <br>
    <input type="submit" class="btn btn-primary" value="Crear">
</form>
</div>


<?php
//objeto 
$registrar=new ProductosC();
//funcion
$registrar -> RegistrarProductosC();

?>


