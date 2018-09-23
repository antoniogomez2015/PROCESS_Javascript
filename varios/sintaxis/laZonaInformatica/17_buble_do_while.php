<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>buble do while</title>
</head>

<body>

	<script type="text/javascript">
	
		/*el bucle do while, nos permite primero ejecutar el contenido del bucle y después es que analizará el condicional del bucle. así, se garantiza que el contenido del bucle se ejecutará al menos una vez*/
		
		x = 0;
		
		do{
			x++;
			document.write(x + "<br />");
			}while(x < 10);
			
		
		/*ejemplo de un programa don do while, a través de una pregunta de acierto al usuario*/
		
		coincidencia = "0";
			
		do{
			coincidencia = prompt("¿Cuanto es 5 + 5?");
			if(coincidencia == "10"){
				document.write("Es correcto! la respuesta es 10");
			}else{
				alert("Tu respuesta no es correcta vuelve a intentar");
			};
		}while(coincidencia != "10");
	
	</script>

</body>
</html>