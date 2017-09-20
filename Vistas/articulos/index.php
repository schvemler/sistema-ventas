<center>
<h1><i><u>Índice de artículos</u></i></h1></center>
<div>
<div class="pull-right">
<a href="<?php echo URL;?>articulos/nuevo" class="btn btn-primary">Agregar Articulo</a>
</div>
</div>
<div class="container well">
  <div class="row">

   <div class="col-md-8">
 	
 	<table class="table table-bordered">
 		<tr>
 			<th>ID</th>
 			<th>Artículo</th>
 			<th>Costo</th>
 			<th>Precio</th>
 			<th>Stock</th>
 			<th>Imagen</th>
 			<th>categoría</th>
 			<th>Acciones</th>
 		</tr>
 		<?php foreach ($datos as $dato ):?>	
 			<tr>
 				<td><?php echo $dato['idarticulo'] ?></td>
				<td><?php echo $dato['articulo'] ?></td>
				<td><?php echo $dato['costo'] ?></td>
				<td><?php echo $dato['precio'] ?></td>
				<td><?php echo $dato['stock'] ?></td>
				<td><img width='50px' src=<?php echo URL.$dato['imagen'] ?></td>
				<td><?php echo $dato['categoria'] ?></td>
				<td>
				<a href="<?php echo URL;?>articulos/editar/<?php echo $dato['idarticulo'] ?>" class="btn btn-primary">Editar<span class="glyphicon glyphicon-pencil"></a>
				<a href="<?php echo URL;?>articulos/eliminar/<?php echo $dato['idarticulo'] ?>" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-trash"></a>
				
				



				</td>
				



 			</tr>
		<?php endforeach;?>

 	</table>


    </div>
  </div>
 </div>
 </h1>