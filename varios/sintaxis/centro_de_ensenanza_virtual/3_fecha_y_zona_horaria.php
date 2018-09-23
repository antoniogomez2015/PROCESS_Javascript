
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<!--
aquí quidamos: 30.-Curso XHTML. JavaScript. Crear el primer script: https://www.youtube.com/watch?v=bks3Mz_wQho&index=30&list=PLB275F6F2EBC6BA66&hd=1
-->
    
    <script type="text/javascript">
	
		/*1.creamos una variable "ahora"*/
		/*2.como valor le asignamos las palabra reservadas fecha y hora actual "new date()"*/
		
		/*la instrucción u objeto "new date(), nos permite almacenar fechas en milisegundos"*/
		
		/*la instrucción "toString(),", nos permite convertir el resultado en un string de texto*/
		
		/*ToGMTString(), nos permite expresar la hora global*/
		
		/*la instrucción "document.write()", nos permite imprimir en el navegador cualquier parámetro ó argumento que le indiquemos dentro de los (), paréntesis de la instrucción*/
		
		/*los operadores nos permiten agregar más elementos a una sentencia, en este caso utilizaremos el operador (+),*/
		
		ahora = new Date();
		
		horaLocal = ahora.toString();
		
		horaUTC = toGMTString();
		
		document.write("hora Local: " + horaLocal + "<br />");
		
		document.write("Hora Global: " + horaUTC);
		
		
	</script>
    
    hola mundo
    
</body>
</html>
