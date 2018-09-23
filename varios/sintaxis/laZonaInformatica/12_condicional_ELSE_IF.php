<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>condicional else if</title>
</head>

<body>

	<script type="text/javascript">
	
		/*el condicional if(){}, nos permite limitar la ejecución de un determinado número de sentencias a la comprobación previa de unos parámetros indicados previamente*/
		
		/*más el método "else{}", colocado al final podremos agregar otro condicional "else{}", en el caso de que la condición del condicional if(){}, no se cumpla*/
		
		/*el método "else if(){}", permite seguir evaluando condiciones indefinidamente, éste debemos colocarlo al final del condicional if(){},*/
		
		
		
		/*ejemplo de programa para acceso para una página para adultos*/
		
		edad = prompt("¿Cuál es tu edad?");
		parseInt(edad);
		
		if(edad >= 18){
			document.write("Bienvenido a nuestro sitio web");
		}else if(edad == 17){
			alert('"17", no es la edad para entrar en este sitio');
		}else if(edad == 15){
			lert('"15", no es la edad para entrar en este sitio');
		}else if(edad == 12){
			lert('"12", no es la edad para entrar en este sitio');
		};
	
	</script>
    
    
</body>
</html>