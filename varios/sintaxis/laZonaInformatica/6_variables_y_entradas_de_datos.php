<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>variables</title>
</head>

<body>

	<script type="text/javascript">
	
		/*las variables permiten almacenar información, esta puede ser de dos tipos
			1_de tipo numético, enteros ó integralesde así como con valores decimales ó punto flotante 
			
			2_también de tipo string ó texto*/
		
		/*existen dos tipos de variables; las variables globales y las variables locales*/
			/*las variables globales se expresan a través de la palabra reservada "var",*/
			/*las variables locales se expresan sólamente con su nombre; sin la palabra reservada "var",*/
						
		var proof = 10;
		
		
		/*ahora vamos ha hacer un programa de ejemplo*/
		
		/*la instrucción "prompt("")", permite solicitarle datos al usuario a través de una ventana contextual*/
		
		/*lógica: dejamos el valor inicial de la variable "user", como un string vacío, luego le asignamos a la variable "user", la palabra reservada "prompt()", para hacerle una pregunta al usuario y obtener datos de este, los cuales serán guargados en el "string" vacío que dejamos en el valor inicial de la variable y, por último, creamos un "aler()", en el cuál invitamos al usurio mientras concatenamos el dato guardado en el string inicial*/
		
		var user = "";
		
		user = prompt("Cuál es tu nombre?");
		
		alert("Bienvenido a nuestro sitio web " + user);		
		
	
	</script>

</body>
</html>