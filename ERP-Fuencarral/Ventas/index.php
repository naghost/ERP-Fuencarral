<?php
$titulo="Ejemplo";
include '../Plantilla/head.php';
include '../Plantilla/BBDD.php';
?>

<div class="container">
    <div class="row">
    
    
    
        <div class="col-md-10 col-md-offset-1">

            
            <!--  cabecero tabla muestra de los datos de ventas -->
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Fecha Orden</th>
                        <th>Cliente</th>
                        <th>Persona al cargo</th>
                        <th>Total</th>
                        <th>Estado</th>
                    </tr> 
                  </thead>
                  
                    <tbody>
                        <?php

                        //conexion base de datos
                          $link = mysqli_connect('192.168.4.81', 'root', 'Grado-Fuencarral-17')or die('No se pudo conectar: ' .mysql_error());
                          mysqli_select_db($link, 'ERP-Fuencarral') or die('No se pudo seleccionar la base de datos');
                          $tildes = $link->query('SET NAMES "utf8"');                      
                         

                         //sentencia para recoger los datos  
                          $mostrar_Cliente="Select * from ventas INNER JOIN cliente ON cliente.idCliente = ventas.idClienteAux INNER JOIN empleado ON empleado.idEmpleado = ventas.idEmpleadoAux INNER JOIN contavilidad ON contavilidad.idContabilidad = ventas.idContabilidadAux ORDER BY ventas.idVentas";
                          $mostrar_Clientef=mysqli_query($link,$mostrar_Cliente);
                          //$mostrar_Clienteff=mysqli_fetch_array($mostrar_Clientef);


                          //bucle generar la tabla con los datos recogidos

                          while ($fila = mysqli_fetch_array($mostrar_Clientef) ){

                            echo"<tr>";
                             echo"<td align='center'>";
                                echo"<a class='btn btn-default'><em class='fa fa-pencil'></em></a>";
                                echo"<a class='btn btn-danger'><em class='fa fa-trash'></em></a>";
                              echo"</td>";
                             echo"<td class='hidden-xs'>".$fila['idVentas']."</td>";
                              echo"<td>".$fila['fechaOrden']."</td>";
                              echo"<td>".$fila['nombreEmpresa']."</td>";
                              echo"<td>".$fila['nombre']."</td>";
                              echo"<td>".$fila['ventasTotales']."</td>";
                              echo"<td>".$fila['estado']."</td>";
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
