<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>galeria con jquery</title>
<!--css-->
<link rel="stylesheet" type="text/css" href="css/14_galeria_personalizada_con_jquery.css">
<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>

<!--Tutorial:Galeria con css y jQuery 1/2  https://www.youtube.com/watch?v=36h0HBoMENY&hd=1-->


<!--para obtener gif de precargas: http://ajaxload.info/-->


<!--Parte 1: ocultamos el gif preloader-->

<!--Parte 2: almacenamos la imágen principal ó primera, las cuales se encuentras como parámetros de los atributos href, ésto lo hacemos para dos cosas; primero: para que se muestre esta imágen por defecto, segundo: para luego hacer comparaciones con esta imágen y de ser diferente la búsqueda del usuario entonces se podrá cargar otra imágen reemplazando la anterior-->

<!--Parte 3: aquí cargaremos dentro del contenedor "#review", la imágen del primer elemento "a", dentro de la lista "li", seleccionado y almacenado en la variable que creamos en el paso anterior "principal"-->

<!--Paso 4: en este paso hacemos dos cosas; primero: creamos un evento de tipo "click({})", para los atributos de tipo "a", html, segundo: y como sentencias dentro de la función dentro del evento click({}), creamos una variable "img_select", y a ésta, como valor le asignamos el atributo seleccionado a través del evento click del usuario ejecutado a través de la instrucción "click({})",-->

<!--Parte 5: primero creamos un condicional "if(){}", al cuál como parámetro condicional "if()" le indicaremos que haga un comparación; que si la variable que contiene la imágen que ha hecho click, el usuario "img_select", es diferente "!", de la variable que contiene la imágen que se cargará por defecto "principal", entonces ejecute las sentencias indicadas if{}, para cargar las imágen deseada ó correcta-->

	<!--al indicar como condicional que compare y vea que si hay coincidencia; entre que si la imágen que ha sidoseñeccionada para ver por el usuario es diferente que la imágen que se cargará por defecto, entonces si no hay coincidencia, osea que la imágen que selecciona el usuario es igual a la imágen que se mostrará por defectos entonces nos se ejecutarán las sentencias dentro del condicional if{}, más sí, se ejecurá un "else{},", en el cuál indicaremos que regrese  a través de la palabra reservara "return", y que de un valor negativo, osea "false", para que así, no se ejecute la acción del usuario cargando la imágen que se encuentra en la ruta del "parámetro", del atributo "href", seleccionado por el usuario-->
    
<!--Parte 6: para seguir haciendo comparación ahora para de indicar que la variable "principal", es igual ó tendrá como valor asginado "=", la variable imágen seleccionada "img_select"-->

<!--Parte 7: hacemos un selector ó variable jquery para los elementos de tipo atributo "a", html más (.), un ciclo "each(function(){})", a la cuál como sentencias crearemos un condicional "if(){}",-->

	<!--esta instrucción each(function(){}), nos permitirá intercambiar lás imágenes indicadas por el usuario-->
    
    <!--y como sentencias de la instrucción "each(function(){}", crearemos un condicional de tipo if(){}, y ha este condicional "if", como parámetros "()", le asignaremos el siguiente condicional; que si la imágen seleccionada "$(this)", su atributo ó nombre es "attr('href')", es igual igual "==", que la imágen seleccionada "img_select", entonces ejecute las sentencias indicadas-->
    
    <!--Parte 7.1. si la imágen dentro del ciclo "each(function(){})", es igual a la imágen seleccionada entonces realice la siguiente animación -->
    
    <!--y de lo contrario, de no ser la imágen dentro del ciclo "each(function(){})", iguales a la imágen seleccionada por el usuario entonces ejecutará un "else", en vez de las sentencias del "if", y como sentencias del "else" crearemos una sentencia de animación a cero, para que así, éstas no se animen-->
    
<!--Parte 8: ahora vamos a llamar a la imágen seleccionada por el usuario e imprimirla en pantalla de forma animada;-->

	<!--Parte 8.1. primero asignamos la imágen seleccionada por el usuario dentro del contenedor "reviews", más a ésta de indicamos un "opacity: 0", para que la imágen no se vea-->
    
    <!--Parte 8.2. a continuación procedemos a mostrar el elemento ".preloader", para que éste haga de precarga de la imágen seleccionada-->
    
    <!--ahora vamos a configurar la imágen que se cargá en el contenedor "preview img", y el modo en el que ésta lo hará, ésto lo haremos a través de la instrucción "load(function(){})", ésta instrucción nos permitirá ejecuar las sentencias que ésta contiene sólo cuando el contenido que el selector al cuál esta pertecete se haya cargado-->
    
    <!--y en la función dentro de la instrucción "load(function(){})", creamos dos sentencias; 
    primera sentencia: ocultaremos el preloader a través de la instrucción "fadeOut()", más dentro de los parámetro de ésta, creammos un "callback", esto es una función condicional, la cuál ejecutará sus sentencias sólo cuando se haya ejecutado la instrucción previa, esta es "fadeOut()"
    segunda sentencia: el "callback" procedemos llamar y ha animar el elemento "preview", cargado en este contenedor que previamente ocultamos con la instrucción "animate 0", yendo ahora de "0", a "1", haciendo visible la imágen ante el usuario-->
    
    

	<!--funciones para jaquery para activar la galería-->
    <script type="text/javascript">
	
		$(document).ready(function(e) {
            /*parte 1*/
			$('.preloader').hide();
			
			/*parte 2*/
			principal = $('a:first').attr('href');
			
			/*parte 3*/
			$('#reviews').html("<img src='"+principal+"'/>");
			
			/*paso 4*/
			$('a').click(function(){
				/*guardamos que tumbs ha si seleccionada para luego cargar la review alamacenada con "this"*/
				img_select = $(this).attr('href');
				
				/*parte 5*/
				if(img_select != principal){
					/*parte 6*/
					principal = img_select
					
					/*parte7*/
					$('a').each(function() {
						if($(this).attr('href') == img_select){
							/*parte 7.1*/
							$(this).animate({'opacity':'.5'});
							}else{
								$(this).animate({'opacity':'1'});
							};                        
                    });
					
					/*parte 8*/
					/*parte 8.1*/
					$('reviews').html("<img src='"+img_select+"'/>").animate({'opacity':'0'});
					/*parte 8.2*/
					$('.preloader').fadeIn();
					/*Parte 8.3*/
					$('#reviews img').load(function(){
						$('.preloader').fadeOut(500,function(){
							$('#reviews').animate({'opacity':'1'},200);
						})
					})
					return false;
					
				}else{
					return false;
				};
			});
        });
	
	</script>

	<div id="wrapper">
    
        <!--título-->
        <h2>Conozca nuestros Productos</h2>
        
        <!--imágenes grandes de la galería-->
        <div id="reviews">
        </div>
        
        <!--imágenes pequeñas de la galería-->
            <!--como parámetro del atributo "href", colocamo la ruta de la imágen "review", espectiva-->
        <div id="tumbs">
            <a href="img/img1.jpg"><img src="img/tumb1.jpg" width="100" height="50" alt="imagen_1"></a>
            <a href="img/img2.jpg"><img src="img/tumb2.jpg" width="100" height="50" alt="imagen_2"></a>
            <a href="img/img3.jpg"><img src="img/tumb3.jpg" width="100" height="50" alt="imagen_3"></a>
            <a href="img/img4.jpg"><img src="img/tumb4.jpg" width="100" height="50" alt="imagen_4"></a>
            <a href="img/img5.jpg"><img src="img/tumb5.jpg" width="100" height="50" alt="imagen_5"></a>
        </div>
        
        <img src="img/ajax-loader.gif" class="preloader">    
    </div>
        
</body>
</html>