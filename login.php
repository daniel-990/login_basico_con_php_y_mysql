<?php
session_start();
require_once('funcionesPHP/funciones.php');
conectar('localhost', 'root', 'registro');

//Recibir
$user = strip_tags($_POST['user']);
$pass = strip_tags(sha1($_POST['pass']));

$query = @mysql_query('SELECT * FROM user WHERE user="'.mysql_real_escape_string($user).'" AND pass="'.mysql_real_escape_string($pass).'"');
if($existe = @mysql_fetch_object($query))
{
	$_SESSION['logged'] = 'yes';
	$_SESSION['user'] = $user;

	echo '<script>window.location="logeado.php"</script>';
}else{
	echo ' <script language="javascript">alert("El usuario y/o pass son incorrectos");</script> ';	
	echo '<script>window.location="login.html"</script>';
}
?>