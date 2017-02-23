<?php
  //conectar al servidor, usuario, pwd
  $conexionBD = mysql_connect('localhost', 'root', '') or die('No se pudo establecer la conexion con la base de datos');
  //conectar a base de datos
  mysql_select_db('imagen') or die('No se puede abrir la base de datos Almacen');
  //formar el query

  $valor   = $_POST['valor'];
  $id_usuario = $_POST['id_usuario'];

if (isset($valor) && !empty($id_usuario)) {
  
  $qry = "UPDATE registro_usuario set valor='$valor' WHERE id_usuario='$id_usuario'";
  //ejecutar qry
  $result = mysql_query($qry) or die("*** Error al modificar el registro de especialidad: ".mysql_error());

  echo http_response_code(202);
  } else {
    echo http_response_code(200);
  }
  
  //copy($_FILES['imagen']['tmp_name'],$ruta.$_FILES['imagen']['name']);
 
?>