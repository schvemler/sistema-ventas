<center>
<h1><i><u>CLIENTES</u></i></h1></center>
<div>
<div class="pull-right">
<a href="<?php echo URL;?>clientes/nuevo" class="btn btn-primary">Agregar clientes</a>
</div>
</div>
<div class="container well">
  <div class="row">

   <div class="col-md-8">
 	
 	<table class="table table-bordered">
 		<tr>
 			<th>ID</th>
 			<th>Cliente</th>
 			<th>DNI</th>
 			<th>Dirección</th>
 			<th>Acciones</th>
 		</tr>
 		<?php foreach ($datos as $dato ):?>	
 			<tr>
 				<td><?php echo $dato['idcliente'] ?></td>
				<td><?php echo $dato['nombre'] ?></td>
				<td><?php echo $dato['dni'] ?></td>
				<td><?php echo $dato['dir'] ?></td>
				<td>
				<a href="<?php echo URL;?>clientes/editar/<?php echo $dato['idcliente'] ?>" class="btn btn-primary">Editar<span class="glyphicon glyphicon-pencil"></a>
				<a href="<?php echo URL;?>clientes/eliminar/<?php echo $dato['idcliente'] ?>" class="btn btn-danger">Eliminar<span class="glyphicon glyphicon-trash"></a>
				</td>
 			</tr>
		<?php endforeach;?>

 	</table>


    </div>
  </div>
 </div>
 </h1>