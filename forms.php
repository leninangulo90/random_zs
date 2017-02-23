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

		<script type="text/javascript">
			$(document).ready(function(){
			$("#submit").click(function(e){
				alert('Hola');
				e.preventDefault();
				$("#des").load("seleccionar_ganador.php");
			});
		});
		</script>
</head>
<body>

	
	
		<form method="POST" action="update_random.php">
		<div id="des"></div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="button" id="button" class="btn btn-default">Reiniciar</button>
					<button type="button" name="submit" id="submit" class="btn btn-success">Sortear</button>

				</div>
			</div>
		</form>

			
	</div>
</body>
</html>