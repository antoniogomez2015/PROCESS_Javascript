//éste es el modo correcto de escribir comentarios en línea en JavaScript
/*éste el modo de correcto de escribir comentarios en bloque en JavaScript*/

/*para ejecutar cualquier programa javaScript debemos utilizar la etiqueta html <script>, de inicio y cierre*/
	/*éstas etiquetas etiquetas puedem ir em cualquier parte del código html*/
	/*si queremos que se ejecute el programa JavaScript antes que se renderise la página html, debemos colocarlo dentro de la etiqueta <head>*/
	/*si el programa ejecuta acciones que implican al "body", de la página web, colocaremos las etiquetas <script>, dentro del body*/
	
	/*atributos de la etiqueta <script>*/
	/*languaje="JavaScript1.5", permite especifica el tipo de lenguaje a interpretar por le navegador, ha (sido desentimado)*/
	/*type="text/javascript", hace refencia a su vez al lenguaje y a su typo (recomendado)*/
	/*src="sintaxys.js", permite relacionar un archivo JavaScript externo pero de modo local al documento*/
	/*src="http://hostname/sintaxys.js", permite relacionar un archivo JavaScript externo ó remoto al documento*/
	
/*orden y gerarquía de scripts JavaScript*/
	/*las etiquetas <script>, de la cabecera son las que se ejecutarán primero, éstos no tienen un salida ó escritura en la página web*/
	/*las etiquetas <script>, de la sección body son ejecutadas después de las de la sección <head>*/
	/*lod manejadores de eventos en línea son ejecutados cuando ocurre el evento*/

/*JavaScript de ir entre etiquetas de comentario html para en caso de no reconocer JavaScript en el navegador lo interprete como comentarios*/
<script language="javascript" type="text/javascript">
	<!--Ocultar JavaScript para navegadores antiguos
		document.writeln("<h2>!Bienvenidos al Curso de javaScript de MassivoStudio!</h2>");
	//Para de ocultar JavaScript para navegadores antiguos-->
</script>

/*JavaScript enbebido en html*/
	<script language="javascript" type="text/javascript">

	</script>

/*ANOTACIONES*/

/*javascript no es un programa compilado si no interpretado por el navegador para generar interactividad con el usuario*/
/*javascript es case sensitivity, por ende diferencia entre elementos escritos con minúsculas y mayúsculas*/
/*javascript es flexible y no toma en cuenta los espacios entre la escritura del código como sintaxis*/

/*palabrar recervadas ó Keyworks de javascript-->
	/*éstas nos las podemos utilizar para crear nombres, variables, funciones u otros*/
	/*ésta son:*/
	abstract - boolean - break - byte - case - catch - char - class - const - continue - defaul - delete - do - double - else - extends - false - final - finally - float - for - function - goto - if - implements - import - in - instanceof - int - interface - long - native - new - null - package - private - protected - public - return - short - static - super - switch . synchronized - this - throw - throws - transient - true - try - typeof - var - void - volatile - while - with
	
	
/*statement ó frases ó declaraciones ó sentencias en programación sintáctica*/
	/*se coloca una sóla frase ó declaración por línea y se finaliza por punto y coma (;), aunque no se obligatorio al ser una sola línea*/
	/*al colocar más de una declaración por línea se requerirá la separación de mabas por un punto y como (;)*/
	

/*investigar todos los métodos integrados de las propiedades de un objeto, ejemplo: "Date" JavaScript*/

/*el contenido dentro de las propiedades expresados son parámetros y se expresan en parentesis y cuando le damos un valor se le llama: "argumentos"*/

/*agrupar declaraciones en bloques a través de llaves*/


/*PARTES Ó COMPONENTES QUE COMPONEN JAVASCRIPT*/


	/*funciones - objetos - métodos - propiedades - variables - condicionales - arrays - loops*/
		/*objetos: los objetos pueden almacenar múltiples datos como números un stream partes de datos, otros y relacionarlos entre si*/
			/*los datos almacenados en un objeto se denomina las propiedades del objeto*/
			/*los objetos pueden también contener métodos; los métodos son funciones que trabajan con los datos y propiedades del objeto*/
			/*JavaScript permite tres tipos de objetos*/
				/*1.build team ó integrdos ó interno del lenguaje, ejemplo Date*/
				/*2.objetos del navegador; son aquillos que representan un objeto en un documento html, ejemplo: alert*/
				/*3.objetos personalizados; éstos son objetos personalizados creados por nosotros mismos*/
				
		/*FUNCIONES*/
		
		/*las funciones es un grupo de declaraciones que JavaScript tratada como una unidad simple*/
		
		/*definición de una función*/
			/*se definen con la "keywork", (palabra clave); function al inicio de la declaración*/
			/*las funciones son key sensitive, si nombramos una función con mayúscula debemos llamarla con mayùscula igual*/
			/*ejemplo:*/
			/*en este ejemplo declaramos la función con el keywork function, "Saludo" es el nombre de la función*/
			/*las llaves de apertura y cierre permiten agrupar todas las declaraciones que conforman la función*/
			/*el navegador usa las llaves para ver donde comienza y donde termina la función*/
			function Saludo(){
				/*declaración única en su conjunto*/
				/*función interna alert*/
				/*en el parámetro ó argumento de la función indicamos un string "Buenos Días"*/
				alert("Buenos Días");
			}
			
			/*llamar a la función*/
			Saludo ("quien");
		
		/*función para devolver un vaolor*/
			function Promedio (a,b,c,d){
				resultado = (a+b+c+d) /4;
				return resultado;
			}
			
			puntos = Promedio (4,5,7,3);
			document.writeln("El resultado es: " + puntos);
		
		/*combinar tareas usando funciones*/
		/*las funciones son un grupo de declaraciones que permiten realizar una tarea*/
		/*funciones internas ó integradas del lenguaje*/
		/*nosotros podemos crear nuestras propias funciones; ésto es declarar una función*/
		
	
		/*variables*/
			/*variables: éstas son contenedores, en los cuales podemos guardar datos como: fechas, streams valores, nobres, otros*/
			/*las variables con case sentitive, y por ende distinguen entre minúsculas y mayúsculas*/
			/*no podemos usar carácteres especiales del español, acentos y otros en los nombre de las variables*/
			/*éstas pueden llevar letras, números, guiones bajos (no permiten espacios entre sí)*/
			/*el primer carácter del nombre de la variable no puede ser un número si no una letra un gión bajo*/
						
			/*variables locales y variables globales*/
				/*keywork para declarar un variable "var", ejemplo: Palabra Clave var*/
					/*para variables globales podemos declarar una variable con ó sin la palabra clave "var" colocando sólo el nombre de la variable*/
						/*ejemplo: 1. var nombre1 = "Pedro" 2. nombre2 = "maría"*/
					/*para variables locales si es impresindible la palabra clave "var" antecediendo al nombre de la variable*/
				/*Scope (Alcance), alcance de las variales locales y globales*/
					/*las variables globales tienen un alcance de todo el script y todos los script de el documento html*/
					/*las variales locales tiene un alcance limitado que es dentro de una función*/
				/*a las variables se asigna un valor a través de un operador "=", precedido del nombre de la variables emeplo: nombre1 = "Pedro"*/
				
			
		
		/*eventos, gestionar y manejar eventos*/
			/*están relacionados con objetos del navegador*/
			/*se definen en la etiqueta que define el objeto*/
				/*evento se define como el acontecimiento que debe pasar para que se desencadene una serie de acciones determinadas*/
				/*ejemplos: cuando le damos botón derecho del mouse, cuando la página termina de cargarse, pulso de un enlace, otros*/
		
		/*loops; son un grupo de declaraciones que se repite un cierto número de veces*/
		
	
	/*tipos de datos en JavaScript*/
		/*datos con operadores de incremento y disminución*/
			/*declaración*/
			puntos = 40;	
				/*declaración más incremental de "1"; incrementará el valor puntos más "1"*/
				puntos = puntos+1;
					/*declaración  más simplificada, al agregar el operador luego del nombre evita tener que escribir 2 veces el nomre de la misma*/
					puntos+=1;
						/*declaración aún más simplificada, indica de puntos aumento 1, su valor*/
						puntos++;
						/*si escribimos el operador antes ó después del nombre, así se ejecutará antes ó después que se le lea la variable*/
						++puntos;
						
		/*tipos de datos de una variable*/
			/*datos numéricos: Numbers 3,25,2.546*/
			/*datos boleanos: Boolean true, false*/
			/*datos de texto: String "Estamos en Primavera"*/
			/*dato tipo indefinido: Null (para fallos en silencio (no muestra nada el navegador))*/
			
		/*conversión de datos*/
			/*conversión de datos de números a strings*/
				total = 40;
				document.writeln("el total es" + total);
			
			/*conversión de datos de strings a números*/
				/*condiciones para poder realizar este tipo de conversiones*/
					/*1.tiene que aparecer como String el número ó decimal que queremos convertir*/
					/*2.tiene que estar al principio del String*/
				parselnt() éste es un build team que convierte un String en un número entero
				parseFloat() éste es un build team que convierte un número en decimal
		
		
	
	
		
		
	
		
	/*expresiones ejemplo: resutado = (a+b+c+d) /4; se definen como una combinación de variables y valores que interprete de JavaScript tomará como una valor simple*/
	
	/*operadores JavaScript*/
	+ Concatena()combina strings Ejmeplo: mensaje="esto es" + " una prueba";
	
	+ Suma Ejmeplo: resultado = 5 + 7;
	
	- Resta Ejmeplo: puntos = puntos +1;
	
	* multiplica Ejmeplo: total = cantidad * precio;
	
	/ Divide Ejmeplo: promedio = 5uni / 4;
	
	% Modulo(resto) Ejmeplo:resto =uni % 4;
	
	++ Incrementar Ejmeplo: intento++;
	
	-- Decrementar Ejmeplo: total--;
	
	/*prioridades de los operadores para el interprete de javaScript*/
		/*prioridad de mayor a menor en un orden de izquierda a derecha*/
		-- ++ % / * - +
		/*ejemplo de prioridades*/
			/*aplicando las reglas el interprete multiplicará 5*3 y luego le sumará 3*/
			resultado = 4+5*3;
			/*para que sume primero 4+5 y luego lo multiplique por 3, tendremos que colocarlo entre paréntesis*/
			resultado = (4+5) *3;
	





	


