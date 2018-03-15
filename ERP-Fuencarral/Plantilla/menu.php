<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ERP Fuencarral</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  	<?php
  	//aqui dentro se hacen las condiciones
  	session_start();

  	$puesto = $_SESSION['permiso'];

  	//menu para los administradores
  	if($puesto == "admin"){
  		echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='\Fabricacion\index.php'>Inventario <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='\Fabricacion\index.php'>Fabricacion <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Punto de Venta <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Ventas <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Proyecto <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Contabilidad <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Compras <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='\Personal\infopersonal.php'>Personal <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Calendario <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Chat <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Parte de Horas <span class='sr-only'>(current)</span></a>";
      	echo "</li>";
  	}

  	//menu para los fabricantes
  	if($puesto == "fabricante"){
  		echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Inventario <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='\Fabricacion\index.php'>Fabricacion <span class='sr-only'>(current)</span></a>";
      	echo "</li>";
  	}

  	//menu para los vendedores
  	if($puesto == "vendedor"){
  		echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Punto de Venta <span class='sr-only'>(current)</span></a>";
      	echo "</li>";

      	echo "<li class='nav-item'>";
        	echo "<a class='nav-link' href='#'>Ventas <span class='sr-only'>(current)</span></a>";
      	echo "</li>";
  	}


  	?>
     <!-- <li class="nav-item ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    
  </div>
</nav>