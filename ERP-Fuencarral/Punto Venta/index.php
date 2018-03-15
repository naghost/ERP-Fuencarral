<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TPV</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script language="JavaScript">
		function maximizar(){
			window.moveTo(0,0);
		window.resizeTo(screen.width,screen.height);
		}
	</script>
  </head>
  <body onload="maximizar()" background="img/fondo.jpg" class="img-responsive" style="background-size: cover">

		
		
  			<p style="margin-top: 100px">
			<div class="col-md-6" >

				<div class="row" style="background-color: #00BDFE; border-radius: 25px;border-width: thick;border-color: black;border-style: solid;">
				<center><h2>
					BIENVENIDO!
				</h2>
				<p>
					APARTADO TPV
				</p></center>
					
				
				
				<br><br>
				<div class="col-md-1">
				</div>
				<center><div class="col-md-10" style="background-color: white; border-radius: 25px;border-style: double;">
					<div class="col-md-12">
		               <div class="col-md-12" >
		                   <label>TPV </label> <br> 
		                   <table id="myTable" class="table">
		                       <thead>
		                           <tr>
		                               <th>NOMBRE: </th>
		                               <th>CANTIDAD: </th>
		                               <th>PRECIO:</th>
		                               <th>P.V.P:</th>
		                               <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
		                           </tr>
		                       </thead>
		                       <tbody id="datostabla">
		                       	<th>
		                       	</th>
		                       </tbody>
		                   </table>

		                  
							
							
		               </div>
		               <div class="col-md-12" >
		               	
		               	<div class="col-md-4">
		               	</div>
		               	<div class="col-md-4">
		               	</div>
		               	<div class="col-md-4">
		               		<label>total: <samp id="sp">0€</samp></label>
		               	</div>
		               	
		               </div>

		           </div>



					

				</div></center>
				<br><br><br>

			<style>
	input[type="button"]:hover{
		background-color:slategray;
		cursor: pointer;
	}
	input[type="button"].arit{
		background-color:maroon;
	}
	input[type="button"].igual{
		background-color: green;
	}
	input[type="button"].clear{
		background-color:orangered;
	}
	form{
		background-color:#00BDFE;
	}
	input[type="text"]{
		background-color:black;
		border:0px;
		width:250px;
		height: 40px;
		font-size: 20px;
		color: white;
		text-align: right;
		pointer-events: none;
	}
	input[name="txtcaja1"]{
		height: 20px;
		font-size: 16px;
	}
	input[name="txtcaja2"]{
		margin-bottom: 5px;
		font-size: 26px;
	}
	input[type="button"]{
		font-size: 18px;
		font-weight:lighter;
		font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
		width:60px;border:0px;
		height: 60px;
		color: white;
		background-color:blue;
		margin-bottom: 5px;
        }
	body{

		background-color:#00BDFE;
	}
</style>
</head>
<body>
<center>
<form name="f1"><br>
<input type="text" name="txtcaja1">
<br>
<input type="text" name="txtcaja2" value="0">
<br>

<input type="button" onclick="escribir(this.value)" value="7">
<input type="button" onclick="escribir(this.value)" value="8">
<input type="button" onclick="escribir(this.value)" value="9">
<input type="button" class="arit" onClick="arit('*')" value="×">
<br>
<input type="button" onclick="escribir(this.value)" value="4">
<input type="button" onclick="escribir(this.value)" value="5">
<input type="button" onclick="escribir(this.value)" value="6">
<input type="button" class="arit" onClick="arit('-')" value="-">
<br>
<input type="button" onclick="escribir(this.value)" value="1">
<input type="button" onclick="escribir(this.value)" value="2">
<input type="button" onclick="escribir(this.value)" value="3">
<input type="button" class="arit" onClick="arit('+')" value="+">
<br>
<input type="button" class="arit" onClick="arit('/')" value="÷">
<input type="button" onclick="escribir(this.value)" value="0">
<input type="button" onClick="escribir('.')" value=".">
<input type="button" class="igual" onClick="calcular()" value="=">
<br>
</form>
</center>
<script type="text/javascript">
	var borrar = false;
	function deletecarac(){
		var caja2 = document.f1.txtcaja2.value;
            if (caja2 == "" || caja2 == "0" || caja2.length == 1 && blocdel!=true){
            	document.f1.txtcaja2.value = "0";
            }
            else if(blocdel!=true){
             	var res = caja2.substring(0,caja2.length-1);
             	document.f1.txtcaja2.value = res;
            }
	}
   function escribir(n){
		var caja2 = document.f1.txtcaja2.value;
		if (borrar) {
			//alert("se borro");
			document.f1.txtcaja2.value="";
			borrar = false;
			document.f1.txtcaja2.value = n;
		}
		else if (caja2 == "0" && n != "."){
			cajao = caja2.replace("0", "")
			document.f1.txtcaja2.value = cajao + n;
		}
		else{
			document.f1.txtcaja2.value = caja2 + n;
		}
	}
	function raiz(){
		var caja1 = document.f1.txtcaja1.value;
		var caja2 = document.f1.txtcaja2.value;
		document.f1.txtcaja1.value = "Math.sqrt("+ caja2 + caja1 +")";
		document.f1.txtcaja2.value = "";
	}
	function arit(o){
		var caja1 = document.f1.txtcaja1.value;
		var caja2 = document.f1.txtcaja2.value;
		var unum = caja1.substring(caja1.length-1);
		calcular()
		if (unum == "+" || unum == "-" || unum=="*" || unum=="/") {
			unum = unum.replace(unum,o);
			var res = caja1.substring(0,caja1.length-1);
			document.f1.txtcaja1.value = res+unum;
		}
		if (caja1 == "" && caja2 != ""){
			document.f1.txtcaja1.value = caja2 + o;
		}
		else{
			document.f1.txtcaja1.value = caja1 + caja2 + o;
 		}
 		borrar = true;
	}
	function calcular(){
		var caja1 = document.f1.txtcaja1.value;
		var caja2 = document.f1.txtcaja2.value;
		document.f1.txtcaja2.value = eval(caja1 + caja2);
		document.f1.txtcaja1.value = "";
		borrar = true;
		blocdel = true;
	}
	function masmenos(){
		var caja2 = document.f1.txtcaja2.value;
		if (caja2 > 0){
			document.f1.txtcaja2.value = "(-" + caja2 + ")";
		}
		else{
			cajaplus = caja2.replace(/[-|(|)]/g, "");
			document.f1.txtcaja2.value = cajaplus;
		}
	}
</script>

					
			</div>
			<div class="col-md-4">
				<div class="col-md-12">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<p style="margin-top: 110px"><button style=" border-radius: 5px;height: 65px; transform: scale(3); ">&nbsp&nbspOK&nbsp&nbsp</button>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>		
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>&nbsp

				
				
					</div>

				</div>

			
			<div class="col-md-6">

				<div class="row" style="background-color: #0084B2; border-radius: 25px;border-width: thick;border-color: black;border-style: solid; ">

					<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row" >
				
				<center>
					<div class="row">
						<br>
						<center>
							<div class="col-md-12">

								<?php

				      				require'bd2.php';
				      				$sql= $link->query("SELECT  * FROM `Productos`  ORDER BY NombreProducto ");
				      				$p='p'; $pn='1';
				      				$p1=$p.$pn;
				      				$contador='0';
				      				$n='n'; $nn='1';
				      				$n1=$n.$nn;
				      				
										while($row=mysqli_fetch_array($sql)){
											$precio=$row['Precio'];
											$nombre=$row['NombreProducto'];
											$id=$row['IDProducto'];
											
												echo "
												<div class='col-md-3'>
													<button id='".$p1."' value='".$row['Precio']."' type='button' class='btn btn-default' style=' border-radius: 25px;border-width: 3px;border-color: black;border-style: solid;' id= 'producto' onclick=añadir2('".$precio."','".$nombre."','".$id."')>
														<img style=' border-radius: 25px ' alt='Bootstrap Image Preview'  class='img-responsive'/> 
													</button>
													<label id='".$n1."'>nombre: ".$row['NombreProducto']."</label><br>
													<label id='".$p1."'>precio: ".$row['Precio']."€</label>
												</div>
												";
												
												$pn++;
												$nn++;

										}
										echo "<script type='text/javascript'>
											var pulsado=0;

											function añadir2(p,n,id){
												 var totalproducto=0;
												
												 var button= document.createElement('button');
												 button.innerHTML='borrar';
												 button.setAttribute('onclick','borrar(id)');
												var comparar='';
												comparar=document.getElementById(id);
												alert(comparar);
 												
 												if(comparar!=null){
 												 		
 												 	var cantidad=document.getElementById('datostabla').rows[id].cells[1].innerHTML;
 												 	cantidad++;
 												 	document.getElementById('datostabla').rows[id].cells[1].innerHTML=cantidad;
 												 	var total1=+document.getElementById('datostabla').rows[id].cells[2].innerHTML;
 												 	var precio=+document.getElementById('datostabla').rows[id].cells[3].innerHTML;
 												 	var total3=total1+precio;
 												 	document.getElementById('datostabla').rows[id].cells[3].innerHTML=total3;
 												 	sumar(total3);
 												 	alert(id);

												}
												else{
													
													c=1;
													var table = document.getElementById('datostabla');{
											 		var row = table.insertRow(1,id);
											 		var cell1 = row.insertCell(0);
												 	var cell2 = row.insertCell(1);
												 	var cell3 = row.insertCell(2);
												 	var cell4 = row.insertCell(3);
												 	var cell5 = row.insertCell(4);
												  	cell1.innerHTML = n;
  													cell2.innerHTML = c;
  													cell3.innerHTML = p;
  													cell4.innerHTML = p;
  													row.id=parseInt(id);
  													alert(id);
													cell5.appendChild(button);
  													sumar(p);
												}
													};
		
  												
  											}
  											var total2=0;
  											function sumar(precio){
  												
  												var total3=parseInt(total2) + parseInt(precio);
  												total2= total2;
  												document.getElementById('sp').innerHTML=total3;

  											}
  											function borrar(cont) {

				        						document.getElementById('datostabla').deleteRow(cont);
				        						
				        						
				        						
				    							}
  											
 							
								</script>";	

							mysqli_close($link);
										?>
										
				<script type="text/javascript">
					

				</script>
					
				
				<p style="margin-top: 38px">
									
			
				

	<div class="row">

	</div>

</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>