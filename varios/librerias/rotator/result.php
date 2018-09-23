<head>
<title>Resultados</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js" type="text/javascript"></script>
</head>
<center>

<?php 
   include("conex.phtml"); 
   $link=Conectarse(); 
   $result=mysql_query("select * from  contador_clicks",$link); 
?>

<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=1> 


<?php 
    

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td><BR>&nbsp;<font color='green' size='4'><center><b>En el banner '%s' se han obtenido:</b> <font color='darkblue'>'%s'</font> <b>Clicks y</b><font color='darkblue'> '%s' </font><b>Impresiones</b></font></center></font></td></TR>",$row["id"],$row["clicks"],$row["impresiones"]);
}    
   mysql_free_result($result); 
   mysql_close($link); 

?> 
</table>
<a href="delete.php"><div class="clear">eliminar</div></a>
</center>