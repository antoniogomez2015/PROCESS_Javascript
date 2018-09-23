<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ventana emergente</title>
<!--<script type="text/javascript" src="proof.js"></script>-->

<!--vamos a crear una función javascript-->
<!--como contenido de la función vamos a utilizar la instrucción "window.open()", el cuál permite abrir ventanas emergentes-->
<!--la instrucción window.open(), tiene los siguientes parámetros:-->
<!--1. la "url", de la página a la cuál vamos a llamar con esta instrucción-->
<!--2. "string"-->
<!--3. el ancho: with = 400,-->
<!--4. alto: heght = 250,-->
<!--5. posición en la pantalla: top = 200,-->
<!--6. posición en la pantalla: left = 200,-->

<!--y por último, desencadenamos un evento javascript a través de la instrucción de html "onClick="", a la cuál le asignamos como parámetro la función que creamos "demo()", y a su vez, a la función "demo()", le asignaremos como parámetro el nombre del archivo php que contiene el contenido que deseamos que se abra dentro de la ventana emergente, en este caso es: '2_contenido_de_ventana_emergente.php'-->


<script type="text/javascript">

	function demo(url){
	
	window.open(url, "proof","width = 400, height = 500, top = 300, left = 300");
	
	};

</script>
</head>

<body>

	<a href="#" onClick="demo('2_contenido_de_ventana_emergente.php')">detalles del producto</a>
    
</body>
</html>
