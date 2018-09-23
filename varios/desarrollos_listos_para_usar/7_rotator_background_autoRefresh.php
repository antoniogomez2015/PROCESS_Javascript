
<html>
<body>
<title>rotator de backgrounds auto refresh</title>

<!--Tutorial: https://www.youtube.com/watch?v=WClIjYJsynU&hd=1-->
<!--Canal de YouTube: ComoHacerMiPaginaWeb-->

<!--El script del ejemplo está preparado para poner tres banners o imagenes diferentes, 
pero puedes ampliar (o diminuir) esta cantidad a la que creas oportuna. Para ello 
tienes que indicar en la variable cuantosbanners el número exacto de imágenes 
que quieras poner. A continuación tienes que continuar (o borrar) la cadena 
que se repite por cada banner, cambiando el número contenido en: 
if (banner== 3 )... por el número que lo siga. 

Por cada banner hay 4 valores que pueden ser modificados. El primero de 
ellos es la dirección web a la que quieras que se vaya al pinchar sobre el 
banner. En la propiedad alt, tienes que poner un texto alternativo que 
aparecerá en caso de que ocurra algún error en la carga de la imagen o al 
dejar el puntero del ratón sobre ella. El otro valor que aparece tiene 
que ser rellenado con la ruta de la imagen a mostrar.-->


<script language="JavaScript"> 
<!-- 
	var cuantosbanners = 3 ; 
	var ahora = new Date() 
	var segundos = ahora.getSeconds() 
	var banner = segundos % cuantosbanners; 
	banner +=1;
	 
	if (banner==1) 
	{  
	url=" http://www.enlace.com "; 
	alt=" Texto alternativo 1 "; 
	imagen=" img/B r200F_high.jpg "; 
	}
	
	if (banner==2) 
	{  
	url=" http://www.enlace.com "; 
	alt=" Texto alternativo 2 "; 
	imagen=" img/huella_high.jpg"; 
	}
	
	if (banner==3) 
	{ 
	url=" http://www.enlace.com "; 
	alt=" Texto alternativo 3"; 
	imagen=" img/B r200F_high.jpg";  
	}
	
	document.write('<center>'); 
	document.write('<a href="' + url + '" target="_blank">'); 
	document.write('<img src="' + imagen + '" width=') 
	document.write( width + ' height=' + height + ' '); 
	document.write('alt="' + alt + '" border=0><br>'); 
	document.write('<small>' + texto + '</small></a>'); 
	document.write('</center>'); 
//--> 
	 
</script> 

</body> 
</html>
