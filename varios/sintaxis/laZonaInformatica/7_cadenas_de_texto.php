<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>variables</title>
</head>

<body>

	<script type="text/javascript">
	
		/*las propiedades de una objeto terminan en (;) ej: length;*/
		
		/*los métodos de un objeto terminan en (), ej: toUpperCase(); similar a una instrucción*/
		
		
		
		/*la propiedad "length", permite saber la cantidad de caracteres contenido en un string*/
		
		/*el método toUpperCase(), nos permite convertir los carácteres de un string a mayúsculas*/
		
		/*el método toLowerCase(); nos permite convertir los carácteres de un string a mnúsculas*/
		
		/*el método indexOf(), nos permite identificar un índice deseado dentro de un string, para esto debemos indicale la conincidencia a través de un parámetro, así, nos devolverá en que posición se encuentra la coincidencia que indicamos dentro del string, esto lo hace a través de un número: 0123...., ej: en el caso del string "tony", nos daría como resultado (3)*/
		
		/*el método substring(,); nos permite limitar la cantidad de caracteres de un string, para esto debemos indicarle como parámetro donde empezará y donde terminará la cadena de texto ó string deseada; observación: siempre debe empezar en "0", ej: substring(0, 2); así, de un string "tony", tomará sólo: "ton"*/
		
		var user = "";
		
		user = prompt("Cuál es tu nombre?");
		
		alert("Bienvenido a nuestro sitio web " + user);
		
		caracteristica = user.length;
		
		alert(caracteristica);
		
		id = user.toUpperCase();
		
		document.write(id + "<br />");
		
		id2 = user.toLowerCase();
		
		document.write(id2 + "<br />");
		
		id3 = user.indexOf("y");
		
		document.write(id3 + "<br />");
		
		id4 = user.substring(0, 2);
		
		document.write(id4);
		
				
		
	
	</script>

</body>
</html>