
/*curso de javascript*/
	
	/*canal de youtube del curso: https://www.youtube.com/user/xymind/playlists*/
	/*video actual: https://www.youtube.com/watch?v=t_Dr9vQfoAU&list=PLAAhC8kCE0VneZvNqxTuWd3xQxtzUkS7L&index=2&hd=1*/
	
	
/*para desarrollar javascript, enbebido dentro de lenguaje de marcado html, es necesario hacerlo a través de las etiquetas html <script></script>, de esta manera el navegador interpretará que a partir de estas etiquetas, partiendo de su apertura hasta su cierre; que todo lo que este dentro de estas etiquetas será considerado lenguaje javascript*/

/*para desarrollar javascript relacional ó externo al html, no hace dalta utilizar las etiquetas <script></script>, pudiendo escribir directamente el código javascript de manera libre en el documento externo, mientras este está relacido al documento html*/




/*JAVASCRIPT RELACIONAL*/



	/*para relacionar javascript de un documento externo dentro de un documento html, devemos utilizar unas etiquetas relaciones, estas son <sccript></script>,*/
	
	/*eje: <script type="text/javascript" src="Curso_javscript.js"></script>*/




/*IMPRIMIR JAVASCRIPT EN PANTALLA*/

	/*para imprimer nuestros desarrollos en el navegador debemos utilizar la sentencia*/ 
	
	/*ej: "document.write("");*/




/*VARIABLES*/



	/*las variables nos permiten almacenar algún tipo de datos como "stirngs"*, ó un valor numérico "1",*/
	
	/*para crear una variable globales debemos expresarlas a través de la palabra reservada "VAR", de varaible y, a continuación indicaremos el nomobre que le queremos asignar a la variable creada*/
	
	/*para varaiables locales, ó de uso expedito para operaciones directas y simples que no vayan a usarse en todo el documento y para procesos simultaneos; podemos crear variables sin la palabra reservada "var", y de igual manera javascript, reconocerá que es una variable si esta tiene se conforma de un nombre, un signo de asignación "=", y si tiene asignado un valor, ej: "precio = 10;"*/
	
	var cualEsTuNombre = "cuál es tu nombre? ";	
	
	miNombreEs = "tony ";
	
	miEdadEs = "y mi edad es: ";
	
	edad = 34;
	
	document.write(cualEsTuNombre + miNombreEs + miEdadEs + edad);
	
	
	
	
/*FUNCIONES*/



	/*una función nos permite configurar una serie de instrucciones ó sentencias, las cuales están almacenadas y listas para usarse ó ser llamadas por nosotros en cualquier momento*/
	
	/*las funciones pueden contener todo tipo de operaciones incorporadas de javascript*/
		
	/*las funciones se conforman de la siguiente manera:*/
	
		/*de la palabra resevada "function"*/
		/*de un nombre "miFuncion",*/
		/*de parámetros "()", a través de los parámetro podemos crear condicionales, y si éstos se cumplen entonces se ejecutarán las instrucciones que están dentro de la función*/
		/*y de instrucciones "{}", las instrucciones son una cadena de sentencias que se ejecutarán cuando las condicionales de los parámetros de la función se cumplan, si es que ésta tiene parámetros asígnados*/
		
		/*para llamar ó imprimer a las funciones debemos expresar su nombre más los paréntesis de los parámetros, ej: "miFuncion()", de esta manera se ejecutará la función deseada*/
		
			
	function miFuncion(){
		
		dia_txt = "Dia: ";
		dia = 08 ;
		mes_txt = "Mes: ";
		mes = "Julio" ;
		anio_txt = "Anio: ";
		anio = 2014;
		
		document.write(dia_txt + dia + mes_txt + mes + mes_txt + anio_txt + anio);
		/*
		confirmacion = "su consulta ha sido enviada";
		alert(confirmacion);*/
	};
	
	
	/*las funciones con parámetros permiten aumentar las posiblidades de las funciones incluyento tanto condicionales que deben complirse como el desarrollo de programas a través de valores que pueden incorporarse por medio de parámetro difidos previamente en la función, ej:,*/
	
		
	function usuario(x,y){
		/*var nuevo = "El usuario es " + x + " " + y;*/
		var usuario = x+y;
		document.write(x,y);
	};
	
	
	
	
	
	
	
	
	
	
	
	