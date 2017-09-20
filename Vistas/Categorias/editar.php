<div class="container">
  <div class="rows">
    
    <div class="col-md-8">
      

<form class="form-horizontal well" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Editar Articulo</legend>
     <?php foreach ($GLOBALS['categorias'] as $dato) :?>
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Id</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="idcategoria" id="nombre" placeholder="Articulo" value="<?php echo $dato['idcategoria'] ?>" readonly="readonly">
      </div>
    </div>  
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="categoria" id="nombre" placeholder="Articulo" value="<?php echo $dato['categoria'] ?>">
      </div>
    </div>
    <?php endforeach ?>

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
