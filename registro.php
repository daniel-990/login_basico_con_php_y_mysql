<?php
require_once('funcionesPHP/funciones.php');
conectar('localhost', 'root', 'registro');

//Recibir
$user = strip_tags($_POST['user']);
$pass = strip_tags(sha1($_POST['pass']));
$mail = strip_tags($_POST['mail']);
$ip = $_SERVER['REMOTE_ADDR'];

$query = @mysql_query('SELECT * FROM user WHERE user="'.mysql_real_escape_string($user).'"');
if($existe = @mysql_fetch_object($query))
{
	// echo 'El usuario '.$user.' ya existe.';	
	echo ' <script language="javascript">alert("El usuario '.$user.' ya existe");</script> ';	
	echo '<script>window.location="registro.html"</script>';
}else{
	$meter = @mysql_query('INSERT INTO user (user, pass, mail, ip) values 
		("'.mysql_real_escape_string($user).'", 
			"'.mysql_real_escape_string($pass).'", 
			"'.mysql_real_escape_string($mail).'", 
			"'.$ip.'")');
	if($meter)
	{
	    echo ' <script language="javascript">alert("Tu registro '.$user.' fue exitoso");</script> ';
		echo '<script>window.location="index.html"</script>';
	}else{
	    echo ' <script language="javascript">alert("Hubo un error en el registro.");</script> ';
		echo '<script>window.location="index.html"</script>';	
	}
}
?>