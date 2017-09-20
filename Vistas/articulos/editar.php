<div class="container">
  <div class="rows">
    
    <div class="col-md-8">
      

<form class="form-horizontal well" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Editar Articulo</legend>
     <?php foreach ($GLOBALS['articulos'] as $dato) :?>
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Id</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="idarticulo" id="nombre" placeholder="Articulo" value="<?php echo $dato['idarticulo'] ?>" readonly="readonly">
      </div>
    </div>  
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Articulo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="articulo" id="nombre" placeholder="Articulo" value="<?php echo $dato['articulo'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Costo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="costo" id="costo" placeholder="Costo"
        value="<?php echo $dato['costo'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Precio</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="precio" id="precio" placeholder="precio"
        value="<?php echo $dato['precio'] ?>">
      </div>
    </div>
   
   <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Stock</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="stock" id="stock" placeholder="stock"
        value="<?php echo $dato['stock'] ?>">
      </div>
    </div>
       <div class="form-group">
      <label for="dir" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
      <select name="idcategoria" class="form-control">
      <?php foreach ($GLOBALS['categorias'] as $dato ):?> 
        <option value="<?php echo $dato['idcategoria']; ?>"><?php echo $dato['categoria'] ?></option>
      <?php endforeach;?>
      </select>
      </div>
      </div>
    

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <label for="exampleFormControlFile1">Subir Foto</label>
        <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1" accept="image/">
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
