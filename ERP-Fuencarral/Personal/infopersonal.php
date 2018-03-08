
      <?php
        $titulo="Personal";
        include '../Plantilla/head.php';
        ?>
    <div id="wrapper">
      
        <?php 

            $conecta = 'SELECT * FROM Empleados';
            $conect=false;
            $fallos=0;
            $link = mysqli_connect('192.168.4.81','root','Grado-Fuencarral-17');
            //conecta host
            do{
            if($link = mysqli_connect('192.168.4.81','root','Grado-Fuencarral-17')){
            $conect=true;
            $fallos=0;
            }
            else if($fallos>5){
            echo "fallo de conexion";   
            echo '<br>';
            }
            else{
            $fallos++;
            }
            }while($conect=false);

            //conecta database

            do{
            if(mysqli_select_db($link,'ERP-Fuencarral')){
            $conect=true;
            $fallos=0;
            }
            else if($fallos>5){
            echo "error con la BD"; 
            echo '<br>';
            }
            else{
            $fallos++;
            }
            }while($conect=false);   
   
         if(!EMPTY($_POST['vacacionesButton'])){

                $dni = $_POST['DNI'];

                $select = "SELECT * FROM Empleados where dni like $dni";

                $resultadoBusqueda2 = mysqli_query($link,$select);

                while($buscada2 = mysqli_fetch_array($resultadoBusqueda2)){
                    

                   $idUS = $buscada2['id_empleado'];


                }
                
            $string = "Location: http://127.0.0.1/Personal/vacaciones.php?ID=".$idUS;
            header($string);

         }
         ?>

        <!-- Page Content -->
          <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    </br>
                    <form action="infopersonal.php" method="post">
                       
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">Nombre</span>
                                  <?php
                                if(!EMPTY($_GET['var1'])){
                                    echo "<input type='text' class='form-control' name='Nombre'  id='Nombre' placeholder='Nombre' value='$_GET[var1]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='Nombre'  id='Nombre' placeholder='Nombre' >";
                                }
                            ?>   
                        </div>
                
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">Apellidos</span>
                                    <?php
                                if(!EMPTY($_GET['var2'])){
                                    echo "<input type='text' class='form-control' name='Apellidos'  id='Apellidos' placeholder='Apellidos' value='$_GET[var2]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='Apellidos'  id='Apellidos' placeholder='Apellidos' >";
                                }
                            ?>  
                        </div>
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">DNI</span>
                            <?php
                                if(!EMPTY($_GET['var3'])){
                                    echo "<input type='text' class='form-control' name='DNI'  id='DNI' placeholder='DNI' value='$_GET[var3]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='DNI'  id='DNI' placeholder='DNI' >";
                                }
                            ?>   
                        </div>
                        
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">Dirección</span>
                            <?php
                                if(!EMPTY($_GET['var4'])){
                                    echo "<input type='text' class='form-control' name='Direccion'  id='Direccion' placeholder='Direccion' value='$_GET[var4]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='Direccion'  id='Direccion' placeholder='Direccion' >";
                                }
                            ?>  
                        </div>
                     
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">Nacionalidad</span>
                             <br>
                              <?php
                                if(!EMPTY($_GET['var5'])){
                                    echo "<select name='Nacionalidad' size=1>
                                <option selected value ='$_GET[var5]'>$_GET[var5]</option>
                                <option value ='Spain'>España</option>
                                <option value ='Francia'>Francia</option>
                                <option value ='Italia'>Italia</option>
                                <option value ='Portugal'>Portugal</option>
                                </select>";
                                }else{
                                    echo "<select name='Nacionalidad' size=1>
                                <option selected value ='0'>------</option>
                                <option value ='Spain'>España</option>
                                <option value ='Francia'>Francia</option>
                                <option value ='Italia'>Italia</option>
                                <option value ='Portugal'>Portugal</option>
                                </select>";
                                }
                            ?>  
                        </div>
                
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">Fecha de Nacimiento</span>   <br>                         
                            <?php
                                if(!EMPTY($_GET['var6'])){

                                    $convert = $_GET['var6'];

                                    $fecha_nac2 = date('d/m/Y', strtotime($convert));
                                    echo "<input type='text' class='form-control' name='fecha_nac' id='fecha_nac' placeholder='Fecha' value='$fecha_nac2'>";
                                }else{
                                    echo "
                                  <input type='text' class='form-control' name='fecha_nac' id='fecha_nac' placeholder='Fecha'>";
                                }
                            ?>  
                        </div>
                       
                        <div class="form-group col-md-3">
                            <span class="input-group-addon label label-default" id="basic-addon1">Tlf. Particular</span>
                             <?php
                                if(!EMPTY($_GET['var7'])){
                                    echo "<input type='text' class='form-control' name='tlf'  id='tlf' placeholder='Tlf.Particular' value='$_GET[var7]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='tlf'  id='tlf' placeholder='Tlf.Particular' >";
                                }
                            ?>  
                        </div>

                        <div class="form-group col-md-6">
                            <span class="input-group-addon label label-default" id="basic-addon1">Dirección de Trabajo</span>
                              <?php
                                if(!EMPTY($_GET['var8'])){
                                    echo "<input type='text' class='form-control' name='dirTrabajo'  id='dirTrabajo' placeholder='Dirección de Trabajo' value='$_GET[var8]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='dirTrabajo'  id='dirTrabajo' placeholder='Dirección de Trabajo' >";
                                }
                            ?>  
                        </div>

                        <div class="form-group col-md-6">
                            <span class="input-group-addon label label-default" id="basic-addon1">Ubicación de Trabajo</span>
                                <?php
                                if(!EMPTY($_GET['var9'])){
                                    echo "<input type='text' class='form-control' name='ubTrabajo'  id='ubTrabajo' placeholder='Ubicación' value='$_GET[var9]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='ubTrabajo'  id='ubTrabajo' placeholder='Ubicación' >";
                                }
                            ?>  
                        </div>
                        
                        <div class="form-group col-md-6">
                            <span class="input-group-addon label label-default" id="basic-addon1">Horario</span>    
                             <br>
                            <select name="horario" size=1>
                                <option selected value ="0"> ------- </option>
                                <option value ="morn">Mañana</option>
                                <option value ="noon">Tarde</option>
                                <option value ="night">Noche</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <span class="input-group-addon label label-default" id="basic-addon1">Responsable</span>           <br>    <?php
                                if(!EMPTY($_GET['var10'])){
                                    echo "
                                <select name='responsable' size=1>
                                <option selected value ='$_GET[var10]'>$_GET[var10]</option>
                                <option value ='1'>1</option>
                                <option value ='2'>2</option>
                                <option value ='3'>3</option>
                                </select>";
                                }else{
                                    echo "
                                <select name='responsable' size=1>
                                <option selected value ='0'> ------- </option>
                                <option value ='1'>1</option>
                                <option value ='2'>2</option>
                                <option value ='3'>3</option>
                                </select>";
                                }
                            ?>                  
                        </div>

                        <div class="form-group col-md-6">
                            <span class="input-group-addon label label-default" id="basic-addon1">Categoría</span>     <br>
                            <?php

                                if(!EMPTY($_GET['var11'])){
                                    echo "<input type='text' class='form-control' name='categoria'  id='categoria' placeholder='Categoria' value='$_GET[var11]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='categoria'  id='categoria' placeholder='Categoria' >";
                                }
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <span class="input-group-addon label label-default" id="basic-addon1">Tlf.Trabajo</span>
                                <?php
                                if(!EMPTY($_GET['var13'])){
                                    echo "<input type='text' class='form-control' name='tlfTrabajo'  id='tlfTrabajo' placeholder='Tlf.Trabajo' value='$_GET[var13]'>";
                                }else{
                                     echo "<input type='text' class='form-control' name='tlfTrabajo'  id='tlfTrabajo' placeholder='Tlf.Trabajo' >";
                                }
                            ?>  
                        </div>    

                       <div class="btn-group col-md-9">
                            <input class="btn btn-default" type="submit" name = "buscarButton" value="Buscar">
                            <input type="text" class="form-control" style="width:120px" name="DNIBusca"  id="DNIBusca" placeholder="DNI">
                            <input class="btn btn-default" type="submit" name = "addButton" value="Añadir">
                            <input class="btn btn-default" type="submit" name = "editButton" value="Editar">
                        </div>

                        <div class="btn-group col-md-3">
                            <input class="btn btn-default" type="submit" name = "vacacionesButton" value="Vacaciones">
                            <input class="btn btn-default" type="submit" name = "checkButton" value="Registro">
                        </div>

                        <div class="col-md-12">
                     </br>
                        <label for="usuarios">Resultados de búsqueda</label>
                            <table class="table">                            
                                <thead>
                                    <tr>
                                        <th> Nombre </th>
                                        <th> Apellidos </th>
                                        <th> DNI </th>
                                    </tr>
                                </thead>
                            <tbody>
<?php

    
            
if(!EMPTY($_POST['addButton'])){

    if(!EMPTY($_POST['Nombre'])& !EMPTY($_POST['DNI'])& !EMPTY($_POST['Apellidos'])& !EMPTY($_POST['Direccion'])& !EMPTY($_POST['Nacionalidad'])& !EMPTY($_POST['fecha_nac'])& !EMPTY($_POST['tlf'])& !EMPTY($_POST['dirTrabajo'])& !EMPTY($_POST['ubTrabajo'])& !EMPTY($_POST['horario'])& !EMPTY($_POST['responsable'])& !EMPTY($_POST['categoria'])& !EMPTY($_POST['tlfTrabajo'])){

    $dni = $_POST['DNI'];
    $nombre = $_POST['Nombre'];
    $apellidos = $_POST['Apellidos'];
    $direccion = $_POST['Direccion'];
    $nacionalidad = $_POST['Nacionalidad'];

    $convert = $_POST['fecha_nac'];

    $fecha_nac = date('Y-m-d', strtotime($convert));

    $tlf = $_POST['tlf'];
    $dirTrabajo = $_POST['dirTrabajo'];
    $ubTrabajo = $_POST['ubTrabajo'];
    $horario = $_POST['horario'];
    $responsable = $_POST['responsable'];
    $categoria = $_POST['categoria'];
    $tlfTrabajo = $_POST['tlfTrabajo'];
    $departamento = 0;

    
    $insertar = 'insert into Empleados(nombre, apellidos, dni, direccionPrivada, nacionalidad, fechaNacimiento, tlfMovil, tlfEmpresa, direccionTrabajo,ubicacionTrabajo,idResponsable,idDepartamento,idCategoria) values ("'.$nombre.'","'.$apellidos.'","'.$dni.'","'.$direccion.'","'.$nacionalidad.'","'.$fecha_nac.'",'.$tlf.','.$tlfTrabajo.',"'.$dirTrabajo.'","'.$ubTrabajo.'",'.$responsable.','.$departamento.','.$idCategoria.')';


    mysqli_query($link,$insertar);

    }else{
            echo $_POST['fecha_nac'];
    }
}
    
  function mostrarResultados($resultadoBusqueda){

             if ($resultadoBusqueda != NULL) {
                     echo "<tr>";
                        echo"<td><a href='infopersonal.php?var1=".$resultadoBusqueda['nombre']." & var2=".$resultadoBusqueda['apellidos']." & var3=".$resultadoBusqueda['dni']." & var4=".$resultadoBusqueda['direccionPrivada']." & var5=".$resultadoBusqueda['nacionalidad']." & var6=".$resultadoBusqueda['fechaNacimiento']." & var7=".$resultadoBusqueda['tlfMovil']." & var13=".$resultadoBusqueda['tlfEmpresa']." & var8=".$resultadoBusqueda['direccionTrabajo']." & var9=".$resultadoBusqueda['ubicacionTrabajo']." & var10=".$resultadoBusqueda['idResponsable']." & var11=".$resultadoBusqueda['categoria']." & ID=".$resultadoBusqueda['id_empleado']."''>Link</a></td>";
                        echo"<td>".$resultadoBusqueda['nombre']." "."</td>";
                        echo"<td>".$resultadoBusqueda['apellidos']." "."</td>";
                        echo"<td>".$resultadoBusqueda['dni']." "."</td>";
                    echo"</tr>";
            }
            else {
                echo "<br/>No se ha encontrado.<br/>";
            }

        }

 if(!EMPTY($_POST['buscarButton'])){

    if(!EMPTY($_POST['DNIBusca'])  ){

        $dni = $_POST['DNIBusca'];

        $select = "SELECT * FROM Empleados where dni like '$dni'";

        $resultadoBusqueda = mysqli_query($link,$select);

        while($buscada = mysqli_fetch_array($resultadoBusqueda)){
                                
            mostrarResultados($buscada);
                           
        }

     }
}


 if(!EMPTY($_POST['editButton'])){


    $trimmed = $_POST['DNI'];
  
    $dni = rtrim($trimmed);
    $nombre = rtrim($_POST['Nombre']);
    $apellidos = rtrim($_POST['Apellidos']);
    $direccion = rtrim($_POST['Direccion']);
    $nacionalidad = rtrim($_POST['Nacionalidad']);

    $convert = $_POST['fecha_nac'];

    $fecha_nac = date('Y-m-d', strtotime($convert));

    $tlf = rtrim($_POST['tlf']);
    $dirTrabajo = rtrim($_POST['dirTrabajo']);
    $ubTrabajo = rtrim($_POST['ubTrabajo']);
    $horario = rtrim($_POST['horario']);
    $responsable = rtrim($_POST['responsable']);
    $categoria = rtrim($_POST['categoria']);
    $tlfTrabajo = rtrim($_POST['tlfTrabajo']);
    $departamento = 0;

     $update = "UPDATE Empleados set Empleados.nombre='".$nombre."',Empleados.apellidos='".$apellidos."',Empleados.dni ='".$dni."',Empleados.direccionPrivada='".$direccion."',Empleados.nacionalidad='".$nacionalidad."',Empleados.fechaNacimiento='".$fecha_nac."',Empleados.tlfMovil=".$tlf.",Empleados.tlfEmpresa = ".$tlfTrabajo.",Empleados.direccionTrabajo='".$dirTrabajo."',Empleados.ubicacionTrabajo='".$ubTrabajo."',Empleados.idResponsable=".$responsable.",Empleados.idDepartamento = ".$departamento." where Empleados.dni = '".$dni."'";

    mysqli_query($link,$update);


}


$tildes = $link->query("SET NAME 'utf8'"); //Para que se muestren las tildes correctamente

mysqli_close($link);
?>
                </tbody>
                </table>
              </div>
                    </form></div>
                </div>
            </div>
        </div>
   
        <!-- /#page-content-wrapper -->
    </div>
          <?php
        include '../Plantilla/foot.php'
        ?>
