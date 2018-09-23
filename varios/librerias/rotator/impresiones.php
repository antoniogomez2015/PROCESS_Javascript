<?php
	// Recibimos la ID del vinculo desde la URL
	$id = $_REQUEST['id'];
	
	// Nos conectamos con la base de datos
	mysql_connect("mysql8.000webhost.com", "a7126368_softech", "cataño") or die(mysql_error());
	mysql_select_db("a7126368_2011") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE contador_clicks SET impresiones=(impresiones + 1) WHERE id='$id'";
	mysql_query($update) or die (mysql_error());	
?>