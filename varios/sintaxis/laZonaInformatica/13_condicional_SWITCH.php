<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>condicional switch</title>
</head>

<body>

	<script type="text/javascript">
	
		/*el condicional "switch(){}, permite extender las posibilidades de un condicional simple con el if(){}", incluso con las opciones de else if.
		
		Ya que el condicional switch(){}, nos permite crear casos concretos y configurables de variables del condicional deseado*/
		
		/*ejemplo de caso*/
			/*la palabra reservada "case", nos permite representar un caso comparativo*/
			/*y entre comillas, "":, debe colocarse el elemento a comparar con el parámetro que le indicamos a el condicional switch(){}, en este caso es la variable "switch(edad){}",*/
			/*lógica: si el caso "1":, es igual que "edad", entonces escribirá en pantalla: 'este es el caso numero "1",'*/
			
			/*la palabra reservada "break", permite romper la secuencia cuando ha encontrado una coincidencia, esto permite que no siga evaluando más casos innecesaria mente por que ya encontro un caso que coincide*/
			
		
		edad = prompt("¿Cuál es tu edad?");		
		
		switch(edad){
			
			case "1":
				document.write('este es el caso numero "1",');
				break;
				
			case "2":
				document.write('este es el caso numero "2",');
				break;
				
			case "3":
				document.write('este es el caso numero "3",');
				break;
				
			case "4":
				document.write('este es el caso numero "4",');
				break;
				
			/*excepción: podemos unir dos ó más casos cuando sus sentencias son las mismas*/
			case "5":
			case "6":
				document.write('este es el caso numero "5 y 6",');	
				/*el último caso no necesita "break", por que después de éste no hay más casos*/			
		};
	
	</script>

</body>
</html>