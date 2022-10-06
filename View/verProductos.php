

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Referencia</th>
      <th scope="col">Precio</th>
      <th scope="col">Peso</th>
      <th scope="col">Categoria</th>
      <th scope="col">Stock</th>
      <th scope="col">Fecha</th>
      <th scope="col">Editar</i></th>
      <th scope="col">Borrar</i>
      <th scope="col">Vender</i>
</th>
    </tr>
  </thead>
  <tbody>
    

    <?php
      $mostrar = new ProductosC();
      $mostrar -> MostrarProductosC();
    ?>

  </tbody>
</table>
</div>


