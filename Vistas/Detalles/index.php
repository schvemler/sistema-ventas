<div class="form-group">
        <label for="dir" class="col-lg-2 control-label">
          ID factura:
          <?php foreach ($GLOBALS['factura'] as $dato ):?>
            <?php echo $dato['idfactura'] ?>
        </label>
</div>
<div class="form-group">
        <label for="dir" class="col-lg-2 control-label">
          Cliente:
        
            <?php echo $dato['nombre'] ?>
        
      </div>

   <div class="form-group">
        <label for="dir" class="col-lg-2 control-label">
          Fecha:
        
            <?php echo $dato['fecha'] ?>
        <?php endforeach;?></label>
      </div>
<br>

<div class="col-md-12">
<table id="myTable" border="1" class="table table-bordered">
<th>
  ID
</th>
<th>
  Articulo
</th>
<th>
  Detalle
</th>
<th>
  Precio
</th>
<tr>

</tr>
</table>
</div>
<div class="col-md-12 form-group">
      

<table id="myTable" border="1" class="table table-bordered">
<th>Articulo</th><th>  Detalle</th><th>  Precio</th>
<tr>    

<TD>
 <div class="col-md-12">
      <select name="idarticulo" id="idarticulo" class="form-control"  onclick="ArticuloClick()" onkeydown="ArticuloPress()">
      <?php foreach ($GLOBALS['articulos'] as $dato ):?> 
        <option selected="<?php echo $dato['articulo'] ?>" value="<?php echo $dato['idarticulo']; ?>"><?php echo $dato['articulo'] ?></option>
      <?php endforeach;?>
      </select>
      </div>
</TD>



<TD>


<div class="col-md-12">
      <input name='detalle' id='detalle' type='text' onkeypress= "enterEvent1(event)" />
      </div>




</TD>
<TD>
   <div class="col-md-12">
      <select name="idprecio" id="idprecio" class="form-control" ondblclick="ArticuloClick()" onkeydown="ArticuloPress()" disabled="true">
      <?php foreach ($GLOBALS['articulos'] as $dato ):?> 
        <option selected="<?php echo $dato['precio'] ?>" value="<?php echo $dato['idarticulo']; ?>"><?php echo "$ ".$dato['precio'] ?></option>
      <?php endforeach;?>
      </select>
      </div>
</TD>
</tr></table> 



      
      
   
</div> 

      



<button onclick="myCreateFunction()">Crear</button>
<button onclick="myDeleteFunction()">Borrar</button>
<button onclick="contar()">CONTAR TABLA</button>



<div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancelar Compra</button>
        <button type="submit" class="btn btn-primary">Guardar detalles</button>
      </div>
    </div>

<!--los siguientes son los scripts-->

   
<script type="text/javascript">
function ArticuloPress()
{
  if(event.keyCode==13)
  {
    document.getElementById("detalle").focus();
  }
}


function enterEvent1()
{
  if(event.keyCode==13)
  {
    document.getElementById("idarticulo").focus();
    myCreateFunction();
  }
}



function myCreateFunction()
{
  
  
  //document.getElementById("myAnchor2").value=parseInt(x)+parseInt(1);
  //document.innerHTML=
  var table = document.getElementById("myTable");
  var yea=document.getElementById("myTable").rows.length;
  {
  var row = table.insertRow(yea);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);


  var x=document.getElementById("idarticulo").value;
  var combo = document.getElementById("idarticulo");
  var y = combo.options[combo.selectedIndex].text;
  var combo = document.getElementById("idprecio");
  var z = combo.options[combo.selectedIndex].text;
  var d=document.getElementById("detalle").value;
  cell1.innerHTML = x;
  cell2.innerHTML = y;
  cell3.innerHTML = d;
  cell4.innerHTML = z;
  }
}

</script>
<script>
function ArticuloClick()
{
  var posicion=document.getElementById('idarticulo').options.selectedIndex;
  document.getElementById("idprecio").selectedIndex = posicion;

}




function myDeleteFunction()
{
  var yea=document.getElementById("myTable").rows.length;
  if (yea>2)
  {
    document.getElementById("myTable").deleteRow(yea - 1);
  }
}
function contar()
{
var yea=document.getElementById("myTable").rows.length;
//alert(document.getElementById("myTable").tBodies[0].rows[0].cells[0].innerHTML);
alert(yea);
}
</script>