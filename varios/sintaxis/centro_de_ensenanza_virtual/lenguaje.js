// JavaScript Document


/*FUNCIONES*/

	/*las funciones permiten facilitar tareas*/
	/*javascrip incluye una gran cantidad de funciones, también llamadas building, ó internas ó integradas*/
	
	/*las funciones son un grupo de declaraciones que javascript interpreta como una unidad simple*/
	/*para usar una función lo primero que tenemos que hacer es definirla, ejemplo:*/
	
	/*declarar un función*/
	
			/*las funciones comienzan con la palabra recervada ó keywork: "function"*/
			/*el nombre de la función en este caso es: usuario*/
				/*javascrip es key sensityvity, y distingue entre minúsculas y mayúsculas*/
				/*el nombre no debe llebar espacion ni empezar por signos salgo algunas excepciones*/
			/*posteriormente del nombre se colocan los parámetros de la función a través de los parentesis*/
			/*en este caso la función no lleva argumentos dentro de los parentesis*/
			/*en las llaves de apertura y cierre lleva la sentencia a ejecutar la función*/
			/*alert(); es un método del objeto window que se ejecutará en el navegador*/
			/*cada declaración dentro de la función; específicamente dentro de las llaves finaliza con ";"*/
			<head>
				function usuario(){
					alert("Buenos Días");
				}
			<head/>
			
	/*vamos a ver un ejemplo de una función con argumentos personalizados*/
	
			/*las funciones comienzan con la palabra recervada ó keywork: "function"*/
			/*el nombre de la función en este caso es: usuario*/
				/*javascrip es key sensityvity, y distingue entre minúsculas y mayúsculas*/
				/*el nombre no debe llebar espacion ni empezar por signos salgo algunas excepciones*/
			/*las funciones permiten como argumentos el uso de variables, este caso usamos la variable "quien"*/
			/*en las llaves de apertura y cierre lleva la sentencia a ejecutar la función*/
			/*en la declaración alert(), lleva un string + el nombre de la variable que usamos como argumento de la función*/
			/*cada declaración dentro de la función; específicamente dentro de las llaves finaliza con ";"*/
			
			<head>
				function registrados(quien){
					alert("Buenos Días: "+pablo);
				}
			<head/>
			
	/*vamos a crear una función que devuelve y almacena un valor resultante*/
	
			/*la función promedio recibe los argumentos que indiquemos al llamar la función en (a+b+c+d)*/
			/*la varible resultado guarda el resultado de la opeación de los argumentos dividido entre 4*/
			/*la palabra clave keywork: "return", permite devolver el resutado de la variable resultado al script, para ser luego reutilizado en cualquier momento*/
			function promedio(a+b+c+d){
				resultado=(a+b+c+d)/4;
				return resultado;
			}
			
		/*vamos a llamar la función promedio*/		
			promedio(12,8,5,25);
			
		/*vamos a crear un variable que permita guargar el resultado de la función promedio, ejemplo:*/
		
			/*tomese en cuenta que el trabajo de la variable resultado definido como el trabajo de la función promedio, al ser tomadas todas sus sentencias dentro de la función como un todo de forma simple ó encapsulado*/
			save=promedio(5,7,14,9);
	
	
			
			
	/*llamado de una función*/
	
		/*llamamos a la función para su utilización ó implementación, ésto lo hacemos a través de su nombre y parámetros*/
			/*ejemplo: llamamos a una función a través de su nombre y parámetros, tenga esta argumentos ó nó*/
		
			<body>
				/*nombre de la función que llamamos: registrados*/
				/*argumento que le enviamos a la función creada es el string: "Pablo"*/
					/*indicar el argumento de la función cuando la llamemos esto permite personlizar el argumento cada vez que llamemos la función permitiendo una gran flexibilidad*/
				/*finaliza la declaración con ";"*/
				registrados("Pablo");
			<body/>
	
	
	
	
	
	
			
	
	/*las funciones son un conjunto de declaraciones que nos permiten realizar y facilitar tareas*/
	
	/*tipos de funciones, presentadas a continuación*/
	
		/*funciones incluidas en el programa "building", ejemplo:*/	
		
			document.write()
				/*posterior al nombre de la función deben colocarse los parámetros de referencia a través de parentesis, los cuales son requeridos, cuando solo se llama a una función se dejan vacios los parentesis, no se le agregan argumentos*/
				
				/*en algunas ocaciones las funciones toman en sus parámetros ó parentesis elementos y, cuando esos parámetros toman valor es lo que se conoce como argumentos de una función */
				
				
		/*funciones personalizadas por el desarrollador, a esto se le llama declarar un función*/
		
		
		
		
		
		
/*OBJETOS*/

	/*los objetos pueden almacenar muchos datos para posteriormente relacionarlos entre sí*/
	/*los datos que almacenamos en un objeto es lo que denominamos las propiedades de un objeto, ejemplo:*/
	
		/*nombre del objeto: persona, y las propiedades del objeto persona serian: el nombre, la dirección, la edad, teléfono, otros*/
		
		/*los objetos pueden incluir "métodos"*/
			/*los métodos son funciones que trabajan con los datos ó propiedades de los objetos*/
			
	/*javascript permite 3 tipos de objetos presentados a continuación*/
		
		/*el primeer tipo de objeto son los llamados building. ó objetos integrados, ejemplo*/
			date();
			
		/*el segundo tipo de objeto son los denominados objetos de navegador, son aquellos que representan a todos los tipos de elementos que aparecen en el navegador, ejemplo*/
			alert();
				/*alert(), es un método del objeto window*/	
				
		/*el tercer tipo de objeto son los objetos personalizados, los cuales puede crear el desarrollador, ejemplo*/
			persona = new date();
			
				/*nombre del objeto: persona*/
				/*signo de asignación (=)*/
				/*instancia del objeto a través de la palabra reservada: new*/
				/*objeto integrado del lenguaje: date()*/
				
				
/*MANEJO DE EVENTOS*/

	/*estan relacionados con los objetos del navegador*/
	/*se definen en la etiqueta que define al objeto*/
	/*ejemplo: <img src="img/logo.jpg" OnMouseOver="destacar();">
	
	



/*CONDICIONALES*/

	/*un condicional contempla la ejecución de un evento para desencadenar unas sentencias previa mente determinadas*/
	/*también contempla el opuesto de que no suceda el evento esperado para desencadenar otra serie de sentencias, ejemplo:*/
		
		/*variable*/
		contador = 1;
		/*condicional if()*/
			/*si la condición se cumple se ejecutará la sentencia alert(), en el navegador*/
		if(contador == 1) alert("Bienvenido");
		

/*LOOPS*/

	/*un loops es un grupo de declaraciones que repite un número definido de veces, ejemplo:*/
	
		/*loops: for()*/
			/*variable: i=1;*/
			/*si la variable es menor ó igual que 10: <=10;*/
			/*agregar (1), a la variable: i=1;*/
			/*y si la condición expresada se cumple ejecutar la sentencia del alert()*/
			
		for(i=1;<=10; i++){
			alert("SI, es el mensaje de alerta otra vez");
		}
		
		
		
/*ORDEN DE EJECUCIÓN DE LOS SCRIPTS*/

	/*1) scripts en la cabecera <head>, indicado para relacionanmiento de archivos y scripts que se ejecutarán en otros documentos*/
	
	/*2) scripts del <body>, estos escripts son ejecutados luego de los scripts de la sección head, indicados para controlar partes del DOM, documento object model de la página web en concreto a través de sus etiquedas html*/
	
	/*3) los scrips manejadores de eventos, estos se suceden en el momento en que el usuario interactúa con los elementos, por ejemplo; botones, enlaces, formularios, otros*/
		

