<?php
session_start();
if($_SESSION['logged'] == 'yes')
{
	// echo 'Bienvenido '.$_SESSION['user'].', esta es tu pagina personal.';
    echo ' <script language="javascript">alert("hola esta es tu pagina");</script> ';
	echo '<script>window.location="index.html"</script>';

}else{
	echo ' <script language="javascript">alert("hola no estas logeado!!!");</script> ';
}
?>