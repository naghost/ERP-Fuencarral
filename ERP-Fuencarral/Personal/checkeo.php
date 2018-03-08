<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style='overflow-x : hidden;'>
                <ul class="sidebar-nav">
                    <li>
                        <a href="index.html"> Empleados </a>
                     </li>
                        <ul>
                            <li>
                                <a href="infopersonal.html"> Info. Personal </a>
                            </li>
                            <li>
                                <a href="vacaciones.html"> Vacaciones </a>
                            </li>
                            <li>
                                    <a href="checkeo.html"> Checkeo </a>
                            </li>
                        </ul>
                   
                    <li>
                        <a href=""> Departamentos </a>
                    </li>

                    <li>
                        <a href=""> Categorías </a>
                    </li>
                    
                </ul>

            </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group col-md-1">
                           	</div>
							<div class="form-group col-md-3">
								<span class="input-group-addon label label-default" id="basic-addon1">DNI de Empleados</span>
								<input type="text" style="width:300px" class="form-control" name="dni" id="dni" placeholder="DNI de Empleado">
							</div>
						
						</div>
						<div class="col-md-12">
							<div class="form-group col-md-1">
                           	</div>
							<div class="form-group col-md-4">
								<span class="input-group-addon label label-default" id="basic-addon1">Fecha de Inicio</span>
								<input type="date" style="width:300px" class="form-control" name="fechainicio" id="dni" placeholder="Fecha de Inicio">
							</div>
							
						</div>
						<div class="col-md-12">
							<div class="form-group col-md-1">
                           	</div>
							<div class="form-group col-md-4">
								<span class="input-group-addon label label-default" id="basic-addon1">Fecha de Fin</span>
								<input type="date" style="width:300px" class="form-control" name="fechafin" id="dni" placeholder="Fecha de Fin">
								<input type="submit" style="margin-top:17px; width:150px  " class="btn btn-primary" name="consulta" value="Consultar">
							</div>
							
						</div>
						<div class="col-md-12" style="margin-top:50px">
						<div class="form-group col-md-1">
                           
                        </div>
					 <div class="form-group col-md-9">
                        <label for="usuarios">Resultados de búsqueda</label>
						 <div style="height:200px; overflow-y:scroll">
                            <table class="table">                            
                                <thead>
                                    <tr>
                                        <th>Nombre Cliente</th>
                                        <th> DNI     </th>
										<th> Fecha Entrada</th>
										<th> Hora Entrada</th>
										<th> Fecha Salida</th>
										<th> Hora Salida</th>
                                       
                                    </tr>
									
									<tr>
                                        <td>Nombre Cliente</td>
                                        <td> 75148741R    </td>
										<td> Fecha Entrada</td>
										<td> Hora Entrada</td>
										<td> Fecha Salida</td>
										<td> Hora Salida</td>
                                       
                                    </tr>
									
									
									
                                </thead>
                            </table>
						</div>	
                  </div></div>
					</div>
				</form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>