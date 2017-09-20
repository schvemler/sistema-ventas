<div class="container">
  <div class="rows">
    
    <div class="col-md-8">
      

<form class="form-horizontal well" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Editar Articulo</legend>
     <?php foreach ($GLOBALS['clientes'] as $dato) :?>
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Id</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="idcliente" id="id" placeholder="ID" value="<?php echo $dato['idcliente'] ?>" readonly="readonly">
      </div>
    </div>  
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombre Cliente</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Cliente" value="<?php echo $dato['nombre'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">DNI</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI"
        value="<?php echo $dato['dni'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Dirección</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="dir" id="dir" placeholder="Dirección"
        value="<?php echo $dato['dir'] ?>">
      </div>
    </div>
    

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <br>
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </div>
    </div>
    <?php endforeach ?>

  </fieldset>
</form>

    </div>
  </div>
</div>
