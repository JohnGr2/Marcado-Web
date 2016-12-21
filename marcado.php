<?php 

include ("conexion.php");
include("index.php")

date_default_timezone_set("America/Managua");
$id = $_POST['cedula'];
$date = date("Y-m-d");
$time = date("h:i:s");
	
	if(isset($_POST['cedula']) && !empty($_POST['cedula']) && isset($_POST['pin']) && !empty($_POST['pin']) ) 
{
	$con = mysql_connect($host,$user,$pw) or die ("Problemas al conectar");

	mysql_select_db($db,$con) or die ("Problemas al conectar con la base de datos");

	mysql_query("INSERT INTO llegadas (id_usuario,fecha,hora) VALUES ('$user','$date','$time')",$con);

}
	
	else{
		echo "Problemas al insertar datos";
	}
 ?>