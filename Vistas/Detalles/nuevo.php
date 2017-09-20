<div class="container">
  <div class="rows">
    
    <div class="col-md-8">
      

<form class="form-horizontal well" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Agregando Articulo Nuevo</legend>
    
     <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Clientes</label>
      <div class="col-lg-10">
      <select name="idcliente" class="form-control">
      <?php foreach ($GLOBALS['clientes'] as $dato ):?> 
        <option value="<?php echo $dato['idcliente']; ?>"><?php echo $dato['nombre'] ?></option>
      <?php endforeach;?>
      </select>
      </div>
      </div>

    <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Clientes</label>
      <div class="col-lg-10">
      <input class="form-control" type="date" name="fecha" min="2017-01-01" max="2100-01-01">
      </div>
      </div>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Precio</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" name="monto" id="monto" placeholder="Monto">
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
      <select name="idcategoria" class="form-control">
      <?php foreach ($GLOBALS['articulos'] as $dato ):?> 
        <option value="<?php echo $dato['idarticulo']; ?>"><?php echo $dato['articulo'] ?></option>
      <?php endforeach;?>
      </select>
      </div>
      </div>


    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Costo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="costo" id="costo" placeholder="Costo">
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Precio</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="precio" id="precio" placeholder="precio">
      </div>
    </div>
   
   <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Stock</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="stock" id="stock" placeholder="stock">
      </div>
    </div>
    



      
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <label for="exampleFormControlFile1">Subir Foto</label>
        <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
        <br>
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
</div>