

<div class="container">
  <br>
  <p>Editar producto</p>
  <br>
  <form method="post">     
    
  

    <?php
      //objeto 
      $editar = new ProductosC();
      $actualizar = new ProductosC();
      //funcion
      $editar -> EditarProductosC();
      $actualizar -> ActualizarProductosC();
      
      

    ?>    
    
  </form>
</div>




