
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
			<hr style="color: white; background-color: black; width:100%; margin-top:-2%;" />
			<hr style="color: white; background-color: black; width:100%; margin-top:-3%;" />

		</div>

		<nav class="navbar navbar-inverse" role="navigation" style="margin-top:3%;">
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

		<div style="position:absolute; left:34px; top:520px; width:79px; height:53px; color:#940114;">
			<span class="estilo">Nuestros Sorteos Zocalo 2017</span>
			<br>
			"El periodico de Saltillo"
		</div>

	<form id="form_reg" style="display:none;">
		<div id="des"></div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="button" id="button" class="btn btn-default">Reiniciar</button>
					<button type="button" name="submit" id="submit" class="btn btn-success">Sortear</button>

				</div>
			</div>
		</form>

</body>

</html>


