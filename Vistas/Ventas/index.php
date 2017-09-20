<center>
<h1><i><u>Facturas Emitidas</u></i></h1></center>
<div class="container well">
  <div class="row">

   <div class="col-md-10">
 	<div>
 	<div class="pull-right">
 	<a href="<?php echo URL;?>ventas/nuevo" class="btn btn-primary">Nueva venta</a>
 	</div>
 	</div>
 	<table class="table table-bordered">
 		<tr>
 			<th>ID factura</th>
 			<th>Cliente</th>
 			<th>Fecha</th>
 			<th>Monto</th>
 			<th>Acciones</th>
 		</tr>
 		</tr>
 		<?php foreach ($datos as $dato ):?>	
 			<tr>
 				<td><?php echo $dato['idfactura'] ?></td>
				<td><?php echo $dato['nombre'] ?></td>
				<td><?php echo $dato['fecha'] ?></td>
				<td><?php echo '$'.$dato['monto'] ?></td>
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