<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
?>
<div class="container-fluid">
    <div class="row">
    
    <div class="col-md-2 col-md-offset-1">

      <button id="singlebutton" type="submit" name="singlebutton"
      onclick="javascript:location.href='clientes.php'" class="btn btn-primary" >Clientes</button>
      <button id="singlebutton" type="submit" name="singlebutton"
      onclick="javascript:location.href='index.php'" class="btn btn-primary" >Ventas</button>
      <button id="singlebutton" type="submit" name="singlebutton"
      onclick="javascript:location.href='crearVentas.php'" class="btn btn-primary" >Producir ventas</button>

    </div>
    
        <div class="col-md-10 col-md-offset-1">

            
            <!--  cabecero tabla muestra de los datos de ventas -->
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nombre Empresa</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                    </tr> 
                  </thead>
                  
                    <tbody>
                        <?php

                          //sentencia para recoger los datos  
                          $mostrar_Cliente="Select * from cliente";
                          $mostrar_Clientef=mysqli_query($link,$mostrar_Cliente);
                          //$mostrar_Clienteff=mysqli_fetch_array($mostrar_Clientef);


                          //bucle generar la tabla con los datos recogidos

                          while ($fila = mysqli_fetch_array($mostrar_Clientef) ){

                            echo"<tr>";
                             echo"<td align='center'>";
                                echo"<a class='btn btn-default'><em class='fa fa-pencil'></em></a>";
                                echo"<a class='btn btn-danger'><em class='fa fa-trash'></em></a>";
                              echo"</td>";
                             echo"<td class='hidden-xs'>".$fila['idCliente']."</td>";
                              echo"<td>".$fila['nombreEmpresa']."</td>";
                              echo"<td>".$fila['direccion']."</td>";
                              echo"<td>".$fila['email']."</td>";
                              echo"<td>".$fila['telefono']."</td>";
                            echo "</tr>";
                          }
                          
                        ?>
                      </tbody>
                  
                </table>

            
              </div>
             
            </div>

</div></div></div>

<?php
include '../Plantilla/foot.php'
?>