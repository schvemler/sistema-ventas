<div class="container">
  <div class="rows">
    
    <div class="col-md-8">
      

<form class="form-horizontal well" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Agregando Articulo Nuevo</legend>
    
     <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Cliente</label>
      <div class="col-lg-10">
      <select name="idcliente" class="form-control">
      <?php foreach ($GLOBALS['clientes'] as $dato ):?> 
        <option value="<?php echo $dato['idcliente']; ?>"><?php echo $dato['nombre'] ?></option>
      <?php endforeach;?>
      </select>
      </div>
      </div>

    <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">fecha</label>
      <div class="col-lg-10">
      <input class="form-control" type="date" name="fecha" min="2017-01-01" max="2100-01-01">
      </div>
      </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
</div>