<?php
	$bd_host = "localhost";
	$bd_user = "root";
	$bd_password = "Scand3r@321";
	$bd_base = "carrito";

	$link = mysql_connect( $bd_host, $bd_user, $bd_password) or die ('Could not connect to server MySQL Database: '. mysql_error());
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db($bd_base, $link) or die ('Can not open the database structure: '.mysql_error());
?>