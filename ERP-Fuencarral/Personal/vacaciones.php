
   <?php
    $titulo="Personal";
    include '../Personal/head.php';
    ?>
<div id="wrapper">
    <nav id="sidebar">
                    <!-- Sidebar Links -->
                    <ul class="list-unstyled components">

                        <li><!-- Link with dropdown items -->
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Personal</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="infopersonal.php">Info. Personal</a></li>
                            <li><a href="departamentos1.php">Departamentos</a></li>
                            <li><a href="checkeo1.php">Control de asistencia</a></li>
                        </ul>
                    </ul>
                </nav>
   <div id="page-content-wrapper">
        <div class="container-fluid">
                    </br>
            <form action="vacaciones.php" method="post">
                <div class="row">
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

                        if (isset($_GET['ID']) && $_GET) {
                           $ID = $_GET['ID'];
                           session_start();
                           $_SESSION['ID']=$ID;
                          
                        }else{
                            session_start();
                            $ID =$_SESSION['ID'];

                        }
                        

                        $select = "SELECT * FROM Empleados where id_empleado like '$ID'";

                        $resultadoBusqueda = mysqli_query($link,$select);

                        while($buscada = mysqli_fetch_array($resultadoBusqueda)){

                            $nombre = $buscada['nombre'];
                            $apellido = $buscada['apellidos'];
                            $dni = $buscada['dni'];
                            $id_empleado = $buscada['id_empleado'];               
                       }

                        echo "<div class='col-md-3'>";
                        echo "<span class='input-group-addon label label-default' id='basic-addon1'>$nombre $apellido DNI : $dni</span>";
                        echo "</div>";
           

                    if(!EMPTY($_POST['addButton'])){

                        if(!EMPTY($_POST['Fechai'])& !EMPTY($_POST['Fechaf'])& !EMPTY($_POST['Tipo'])& !EMPTY($_POST['DiasHab'])){

                            $fechai = $_POST['Fechai'];
                            $fechaf = $_POST['Fechaf'];
                            $Tipo = $_POST['Tipo'];
                            $Caracteristicas = $_POST['caracteristicas'];
                            $DiasHab = $_POST['DiasHab'];                     
                         
                            $insertar = 'insert into PermisosVacaciones(dias, tipo, caracteristicas, fecha_inicio, fecha_fin, id_empleado) values ('.$DiasHab.',"'.$Tipo.'","'.$Caracteristicas.'","'.$fechai.'","'.$fechaf.'",'.$id_empleado.')';

                            mysqli_query($link,$insertar);
                  

                        }else{
                                echo $_POST['fecha_nac'];
                        }    
                    }
                

                ?>
            </div>
                <br>
                <div class="form-group col-md-2">
                    <span class="input-group-addon label label-default" id="basic-addon1">Fecha Inicio</span>
                    <input type="date" style="width:140px" class="form-control" name="Fechai" id="Fechai" placeholder="Fecha">
                </div>

                <div class="form-group col-md-2">
                    <span class="input-group-addon label label-default" id="basic-addon1">Fecha Fin</span>
                        <input type="date" style="width:140px" class="form-control" name="Fechaf" id="Fechaf" placeholder="Fecha">
                </div>

                <div class="row">
                     <div class="form-group col-md-12">
                              <span class="input-group-addon label label-default" id="basic-addon1">Tipo</span>
                        <br>
                        <select name="Tipo" size=1>
                            <option selected value ="0"> ------- </option>
                            <option value ="Vacaciones">Vacaciones</option>
                            <option value ="Dia libre">Dia libre</option>
                        </select>
                        <span class="input-group-addon label label-default" id="basic-addon1">Año</span>
                         <br>
                       <select name="Año" size=1>
                            <option selected value ="0"> ------- </option>
                            <option value ="2017">2017</option>
                            <option value ="2018">2018</option>
                        </select>
                    
                            <span class="input-group-addon label label-default" id="basic-addon1">Dias hábiles</span>
                        <br>
                        <select name="DiasHab" size=1>
                            <option selected value ="0"> ------- </option>
                            <option value ="1">1</option>
                            <option value ="2">2</option>
                            <option value ="3">3</option>
                            <option value ="4">4</option>
                        </select>  
                    </div>        
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <span class="input-group-addon label label-default" id="basic-addon1">Caracteristicas</span>
                        <input type="text" class="form-control" name="caracteristicas" id="caracteristicas" placeholder="Caracteristicas">
                    </div>
                </div>
                    <div class="row">
                        <div class="btn-group col-md-6">
                            <input class="btn btn-default" type="submit" name = "addButton" value="Añadir">
                            <input class="btn btn-default" type="submit" name = "editButton" value="Editar">
                            <input class="btn btn-default" type="submit" name = "delButton" value="Borrar">
                            <input class="btn btn-default" type="submit" name = "regButton" value="Histórico">
                        </div>
                    </div>
                <div class="col-md-12">
                    </br>
                    <label for="usuarios">Resultados de búsqueda</label>
                        <table class="table">                            
                                <thead>
                                    <tr>
                                        <th> F. Inicio </th>
                                        <th> F. Fin </th>
                                        <th> Dias </th>
                                        <th> Tipo </th>
                                        <th> Características </th>
                                    </tr>
                                </thead>
                            <tbody>
<?php 

        if(EMPTY($_POST['regButton'])){

  
        $select = "SELECT * FROM PermisosVacaciones where id_empleado like '$ID'";

        $resultadoBusqueda = mysqli_query($link,$select);

        while($buscada = mysqli_fetch_array($resultadoBusqueda)){
                                
            mostrarResultados($buscada);                           

        
        }

    }
    function mostrarResultados($resultadoBusqueda){

        if ($resultadoBusqueda != NULL) {
            echo "<tr>";
            echo"<td>".$resultadoBusqueda['fecha_inicio']." "."</td>";
            echo"<td>".$resultadoBusqueda['fecha_fin']." "."</td>";
            echo"<td>".$resultadoBusqueda['dias']." "."</td>";
            echo"<td>".$resultadoBusqueda['tipo']." "."</td>";
            echo"<td>".$resultadoBusqueda['caracteristicas']." "."</td>";
            echo"</tr>";
            }
        else {
            echo "<br/>No se ha encontrado.<br/>";
        }

    }


?>
                        </tbody>              
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
    <?php
        include '../Personal/foot.php'
        ?> 
  