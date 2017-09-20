<center>
<h1><i><u>CATEGORÍAS</u></i></h1></center>
<div>
<div class="pull-right">
<a href="<?php echo URL;?>categorias/nuevo" class="btn btn-primary">Agregar Categoria</a>
</div>
</div>
<div class="container well">
  <div class="row">

   <div class="col-md-8">
 	
 	<table class="table table-bordered">
 		<tr>
 			<th>ID</th>
 			<th>Categoria</th>
 			<th>Acciones</th>
 		</tr>
 		<?php foreach ($datos as $dato ):?>	
 			<tr>
				<td><?php echo $dato['categoria'] ?></td>
				<td><?php echo $dato['idcategoria'] ?></td>
				<td>
				<a href="<?php echo URL;?>categorias/editar/<?php echo $dato['idcategoria'] ?>" class="btn btn-primary">Editar<span class="glyphicon glyphicon-pencil"></a>
				<a href="<?php echo URL;?>categorias/eliminar/<?php echo $dato['idcategoria'] ?>" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-trash"></a>
				</td>
 			</tr>
		<?php endforeach;?>

 	</table>


    </div>
  </div>
 </div>
 </h1>