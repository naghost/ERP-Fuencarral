<?php
$titulo="Añadir productos almacen";
include 'Plantilla/head.php';
?>
<div class="row">
	<div class="col-md-12">
		         <form role="form" method="POST" action="Acciones/Relaciones/añadir.php">
                   
                    
                <div class="form-group">
                	<label for=""> Almacen</label>
                    <select id="basic-live" name="Almacen" class="form-control" data-live-search="true">
                        <option selected="" value="0">Buscar Producto</option>
                       <?php
                       $query = "SELECT IDProducto, NombreProducto FROM Productos";
                       $EjecutarQuery = mysqli_query($link, $query)or die('Error en la ejecucion'); 
                       while ($fila=mysqli_fetch_row($EjecutarQuery)) {
                         echo "<option value='$fila[0]'>$fila[1]</option>";
                       }
                       ?>
                    </select><br>
                   
                </div>
                   
                   
                <div class="form-group">
                	<label for="">Producto</label>
                    <select id="basic-live" name="Producto" class="form-control" data-live-search="true">
                        <option selected="" value="0">Buscar almacen</option>
                       <?php
                       $query = "SELECT IDAlmacen, Nombre FROM Almacen";
                       $EjecutarQuery = mysqli_query($link, $query)or die('Error en la ejecucion'); 
                       while ($fila=mysqli_fetch_row($EjecutarQuery)) {
                         echo "<option value='$fila[0]'>$fila[1]</option>";
                       }
                       ?>
                    </select><br>
                 <div class="form-group">
                 	<label for="">Cantidad</label><br>
                 	<input type="number" name="Cantidad">
                 </div>
                   <input type="submit" value="Guardar"> 
                </div>
            </form>
	</div>
</div>
<?php
include 'Plantilla/foot.php'
?>