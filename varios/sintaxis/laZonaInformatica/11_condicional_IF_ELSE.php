<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>condicional IF Else</title>
</head>

<body>

	<script type="text/javascript">
	
		/*el condicional if(){}, nos permite limitar la ejecución de un determinado número de sentencias a la comprobación previa de unos parámetros indicados previamente*/
		
		/*más el método "else{}", colocado al final podremos agregar otro condicional "else{}", en el caso de que la condición del condicional if(){}, no se cumpla*/
		
		/*ejemplo de programa para acceso para una página para adultos*/
		
		edad = prompt("¿Cuál es tu edad?");
		parseInt(edad);
		
		if(edad >= 18){
			document.write("Bienvenido a nuestro sitio web");
		}else{
			alert("aún no tiene la edad suficiente para entrar en este sitio");
		};
	
	</script>

</body>
</html>