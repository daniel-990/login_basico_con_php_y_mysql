<?php
function conectar($servidor, $user, $name)
{
	$con = @mysql_connect($servidor, $user);
	@mysql_select_db($name, $con);	
}
?>