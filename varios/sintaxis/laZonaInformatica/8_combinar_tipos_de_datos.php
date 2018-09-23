<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>combinar datos</title>
</head>

<body>

	<script type="text/javascript">
	
		/*en este caso al sumar las variables x + y, javascript, interpreta los valores de las mismas como valores de strings*/
		
		/*para solucionar esto y que javascript, interprete los valores de las variables como números debemos utilizar el método "parseFloat()", y a este método debemos darle como parámetro el elemento numérico que deseamos convertir*/
		
		/*el método parseFloat(), permite convertir elementos numéricos a elementos numéricos de punto flotante*/		
		/*el método parseInt(), permite convertir elementos numéricos a elementos numéricos enteros*/
		
		x = prompt("Primer valor:");
		
		y = prompt("Segundo valor:");
		
		suma = x + y;
		
		suma2 = parseFloat(x) + parseFloat(y)
		
		document.write(suma + "<br />");
		
		document.write(suma2 + "<br />");
		
		
		
		/*para redondear cifras con puntos flotantes*/
		
		/*a través del método "Math.ceil()", podremos hacer aproximaciones hacia arriba expresiones de punto flotante a números enteros, ej: de 8.4, a 9, para esto debemos indicar el elemento a conbertir como parámetro del método "Math.ceil()"*/
		
		/*a través del método "Math.floor()", podremos hacer aproximaciones hacia abajo expresiones de punto flotante a números enteros, ej: de 5.2, a 5, para esto debemos indicar el elemento a conbertir como parámetro del método "Math.floor()"*/
		
		/*a través del método "Math.round()", podremos redondear hacia el número que esté más cercano en expresiones de punto flotante a números enteros, ej: de 6.7, está más cercano a 7, que a 6, para esto debemos indicar el elemento a conbertir como parámetro del método "Math.ceil()"*/
		
		resultado = 8.4;
		
		resultado2 = 5.2;
		
		resultado3 = 6.7;
		
		ponderacion = Math.ceil(resultado);
		
		ponderacion2 = Math.floor(resultado2);
		
		redondeo = Math.round(resultado3);
		
		document.write(ponderacion + "<br />");
		
		document.write(redondeo);
		
	</script>

</body>
</html>