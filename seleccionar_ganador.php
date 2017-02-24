<!DOCTYPE html>
<html>
<head>
	<title></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style_img.css">
		<script src="bootstrap/script/jquery-3.0.0.min.js"></script>
		<script src="bootstrap/script/bootstrap.min.js"></script>

</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$conexionBD = mysql_connect('localhost', 'root', '') or die('No se pudo establecer la conexion con la base de datos');
//conectar a base de datos
mysql_select_db('random_zs') or die('No se puede abrir la base de datos imagen');
$sql = mysql_query("SELECT * FROM registro_usuario where valor = 'SORTEO TELEVISION' order by RAND() limit 1;");



if($sql === FALSE) { 
die(mysql_error());
}

while($res=mysql_fetch_array($sql)) {

echo "<form id='datos_select'><div class='well col-sm-4 form'><label for='inputEmail3' class='col-sm-4 control-label'>Folio Ganador</label><input class='form-control' type='textbox' name='id_usuario' id='id_usuario' value='".$res['id_usuario']."'><br>";
echo "<label for='inputEmail3' class='col-sm-4 control-label'>Ganador</label><input class='form-control' type='textbox' name='nombre_usuario' id='nombre_usuario' value='".$res['nombre_usuario']."'><br>";
echo "<label for='ganador' class='col-sm-4 control-label'>Felicidades</label><input class='form-control' type='textbox' id='valor' name='valor' value='GANADOR'><br>";
}

mysql_free_result($sql);
?>
	