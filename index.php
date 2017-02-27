<!DOCTYPE html>
<html>
<head>
<title></title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta charset="utf-8">
			<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script src="bootstrap/script/jquery-3.0.0.min.js"></script>
			<script src="bootstrap/script/bootstrap.min.js"></script>

			<script>
				$(document).ready(function(){
					var valor,id_usuario;
				$('#form_reg').submit(function(e) {
					valor = $("#valor").val();
					id_usuario = $("#id_usuario").val();

					var response = $.ajax({
						url: 'update_random.php',
						type: 'POST',
						data: {valor:valor,id_usuario:id_usuario}
					});
				response.done(function(data, jqXHR, textStatus, errorThrown) {
				if (textStatus.status === 202) {
					alert('.::::GANADOR::::.');
					$('#valor').val("");
					$('#id_usuario').val("");
					$('#nombre_usuario').val("");
				} else {
					alert('---Inentar Otra Vez---')
						}
					});
					e.preventDefault();
				});

					$("#submit").click(function(e){
					alert('Hola');
					e.preventDefault();
					$("#des").load("seleccionar_ganador.php");
				});	
					$("#mostrar").click(function(e){
					alert('Hola');
					$('#form_reg').css("display","block");
			});
		});
		</script>

</head>
	<body class="wallpaper"> 
		<div class="titulo_1">
			<img src="img/imagen1.png" width="100%" height="400px">
		</div>

		<nav class="navbar navbar-inverse" role="navigation" style="margin-top:0%;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Desplegar Informacion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="#">Bienvenido</a>
			</div>		

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active" id="mostrar"><a>Sorteos Zocalos Saltillo SA de CV</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Contactanos</a></li>
					<a href="#" class="fa fa-facebook fa-2x" style="margin-top:12px; margin-right:20px; color:#fff;"></a>
					<a href="#" class="fa fa-twitter fa-2x"  style="margin-top:12px; margin-right:20px; color:#fff;"></a>
					<a href="#" class="fa fa-instagram fa-2x" style="margin-top:12px; margin-right:20px; color:#fff;"></a>
				</ul>
			</div>
		</nav>	
		
		<hr class="hr-1">
			<!-- <form id="form_reg" style="display:none;">
				<div id="des"></div>	
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="button" id="button" class="btn btn-default">Reiniciar</button>
							<button type="button" name="submit" id="submit" class="btn btn-success">Sortear</button>
						</div>
					</div>
			</form>-->
		<div class="presentacion container">
			<h2>Sorteo
				<span class="violet">Zocalo Saltillo</span>
				El periodico de todos!
			</h2>
	 		<p> Participa en nuestros sorteos Zocalo 2017</p>
	 	</div>

	 <div class="what-we-do container ">
	 	<div clas="row">
	 		<div class="service span3">
	 			<div class="icon-awesome">
	 			<center><div class="glyphicon glyphicon-equalizer"></div></center>
	 			<h1>Zocalo Saltillo</h1>
	 			<hr class="style3">
	 			<p>Sorteo de una Television del Mes de Febrero del año 2017</p>
	 			<center><a href="#">Leer mas</a></center>
	 			</div>
	 		</div>
	 	
	 		<div class="service span3">
	 		<div class="icon-awesome">
	 			<center><div class="glyphicon glyphicon-equalizer"></div></center>
	 				<h1>Zocalo Saltillo</h1>
	 				<hr class="style3">
	 				<p>Sorteo de una playera equipo Tigres del año 2017</p>
	 				<center><a href="#">Leer mas</a></center>
	 			</div>
	 		</div>	

	 		<div class="service span3">
	 			<div class="icon-awesome">
	 			<center><div class="glyphicon glyphicon-equalizer"></div></center>
	 				<h1>Zocalo Saltillo</h1>
	 				<hr class="style3">
	 				<p>Sorteo de un Refrigerador para el dia de las Madres</p>
	 				<center><a href="#">Leer mas</a></center>
	 			</div>
	 		</div>	

	 		<div class="service span3">
	 			<div class="icon-awesome">
	 			<center><div class="glyphicon glyphicon-equalizer"></div></center>
	 				<h1>Zocalo Saltillo</h1>
	 				<hr class="style3">
	 				<p>Sorteo de un Libro etc etc etc por parte de Radio</p>
	 				<center><a href="#">Leer mas</a></center>
	 			</div>
	 		</div>
	 	</div>

	 		<hr class="hr-2">
	 			<div class="portafolio container">
	 				<div class="portafolio-title">
	 					<h3>.:::::::::::::::Sorteos Anteriores:::::::::::::::.</h3>
	 				</div>	
	 			</div>
	 	</div>
 	</body>

</html>


