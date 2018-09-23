<?php
	
	// Nos conectamos con la base de datos
	mysql_connect("mysql8.000webhost.com", "a7126368_softech", "cataño") or die(mysql_error());
	mysql_select_db("a7126368_2011") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE contador_clicks SET clicks=0, impresiones=0";
	mysql_query($update) or die (mysql_error());

	header('Location: result.php');
?>
