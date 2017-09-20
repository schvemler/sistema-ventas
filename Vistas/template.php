<?php 
	namespace Vistas;

	$template = new Template();

	class Template{

		public function __construct(){

?>
<!-- aca va el body -->
	<!DOCTYPE html>
	<html lang="es">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Sacks Fith</title>
	    <!-- Bootstrap core CSS -->
	    <link href="<?php echo URL;?>Vistas/template/css/bootstrap.css" rel="stylesheet">
	    <!-- Custom styles for this template -->
	    <!-- <link href="starter-template.css" rel="stylesheet"> -->
  </head>

  <body>
	


 <?php		
 		include "partes/navbar.php";

		} //contructor

 		public function __destruct(){


 ?>
 			<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		 
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  
		  </body>
		</html>


 <?php  		
		}

	}// }clase

 ?>


	
    

   