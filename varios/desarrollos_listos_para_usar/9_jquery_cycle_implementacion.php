<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jquery cycle</title>

<!--Css-->
<style type="text/css">

*{
	border:0px;
	margin:0px;		
}

body{
	margin:0 auto;
}

	#wrapper{
		margin:auto;
		width:1050px;
		height:575px;
		padding:100px 0 0 0;
	}
	
		#gallery{
			width:1024px;
			height:492px;
			overflow:hidden;
			/*cursor:pointer;*/			
		}
		
		#slides{
			display:inline;
		}
		
</style>

<!--librerias jquery cycle-->
	<!--se requiere la libreria base ó general de jquery, más la librería de jquery cycle-->
<script type="text/javascript" src="../librerias/jquery/jquery.js"></script>
<script type="text/javascript" src="../librerias/jquery cycles all/jquery.cycle.all.js"></script>

	<!--funciones para implementar el jquery cycle-->
<script type="text/javascript">

	/*formato de implementación base*/
	/*$(document).ready(function() {
     	$('#gallery').cycle({
             fx: 'scrollVert'
             });
                
    });*/
	
	$(document).ready(function() {
     	$('#gallery') 
		.before('<div id="slides">') 
		.cycle({ 
    	fx:     'turnDown', 
    	speed:  'fast', 
    	timeout: 0, 
    	pager:  '#slides' 
		});	
	        
    });
	
	
	
	/*éstas son las instrucciones permitidas para la galería de jquery cycle:1*/
	
		
		/*1_la instrucción que permite hacer un desvanecimiento es simplemente llamando a .cycle(), como se indica a continuación*/
		
			/*
			$('#fade').cycle();
			*/
		
		
		/*2_la instrucción 'shuffle', permite lograr el efecto de pasar de páginas, pasando la página de adelante hacia atras, para esto es necesario hacer el contenedor el doble de ancho para así, permiter la acción del efecto para poder pasar a un lado una imágen sobre la otra*/
		
			/*		
			$('#gallery').cycle({ 
			fx:     'shuffle', 
			easing: 'easeOutBack', 
			delay:  -4000 		
			});		
			*/
		
		
		/*3_la instrucción 'zoom', permite hacer un efecto de zoom de las slides escalándolas en su centro hasta desaparecerlas, para luego hacer el efecto contrario hasta aparecer la siguiente slide hasta la posición inicial de la primera slide*/
		
			/*
			$('#gallery').cycle({ 
			fx:    'zoom', 
			sync:  false, 
			delay: -2000 
			*/

		/*4_la instrucción que permite hacer un efecto de zolapado superior-inferior es 'turnDown',*/
	
			/*
			$('#slide').cycle({ 
    		fx:      'turnDown', 
    		delay:   -4000 
			});
			*/

		/*5_la instrucción que permite hacer cerrado vertical al centro de la imágen es 'curtainX',*/
	
			/*
			$('#up').cycle({ 
    		fx:    'curtainX', 
    		sync:  false, 
    		delay: -2000 
 			});
			*/
			
		/*6_esta serie de instrucciones permiten hacer un slide que permite pasar las slides haciendo click sobre ellas (cheuqear no funciona da error, en: http://jquery.malsup.com/cycle/)*/
	
			/*
			$('#right').cycle({ 
    		fx:      'scrollRight', 
    		next:   '#right', 
    		timeout:  0, 
    		easing:  'easeInOutBack' 
			});			
			*/
			
		/*7_esta serie de instrucciones permiten hacer un slide que permite pasar las slides haciendo click sobre ellas, solapando unas sobre otras de arriba hacia abajo*/
	
			/*
			$('#s1').cycle({ 
    		fx:     'slideY', 
    		speed:  300, 
    		next:   '#s1', 
    		timeout: 0 
			});
			*/
			
		/*8_estas instrucciones permite hacer una slide con botones de "next y prev",*/
	
			/*
			$('#s2').cycle({ 
    		fx:     'fade', 
    		speed:  'fast', 
    		timeout: 0, 
    		next:   '#next2', 
    		prev:   '#prev2' 
			});
			*/
			
		/*9_estas instrucciones permiten hacer un slide con desvanecimiento con untervalores graduables y también al tacto*/
	
			/*
			$('#s3').cycle({ 
    		fx:     'fade', 
    		speed:   300, 
    		timeout: 3000, 
    		next:   '#s3', 
   			 pause:   1 
			});
			*/
			
		/*10_estas instrucciones permiten hacer una slide con botones para cada una de las slides, aparecen unos botones automáticamente en forma de números en relación a la cantidad de slides*/
	
			/*
			$('#s4') 
			.before('<div id="nav">') 
			.cycle({ 
    		fx:     'turnDown', 
    		speed:  'fast', 
    		timeout: 0, 
    		pager:  '#nav' 
			});
			*/

</script>
</head>

<body>

	<div id="wrapper">
    
    	<div id="gallery">
        	<a href="#"><img src="img/img1.jpg" id="right" width="1024" height="492" alt="proof"></a>
            <a href="#"><img src="img/img2.jpg" id="right" width="1024" height="492" alt="proof"></a>
            <a href="#"><img src="img/img3.jpg" id="right" width="1024" height="492" alt="proof"></a>
            <a href="#"><img src="img/img4.jpg" id="right" width="1024" height="492" alt="proof"></a>
            <a href="#"><img src="img/img5.jpg" id="right" width="1024" height="492" alt="proof"></a>
            <a href="#"><img src="img/img6.jpg" id="right" width="1024" height="492" alt="proof"></a>
        </div>
        
        <!--estas son características opcionales que sólo aplican ha algunos slides que así lo requieren-->
        
        <!--slide (8)-->
        <div id="botones">
        	<input type="button" value="next" id="next">
            <input type="button" value="back" id="back">
        </div>
        
        <!--slides (10) (no aplicó para el ejemplo)-->
        <div id="slides">
        	<a href="#" id="img">slide_1</a>
            <a href="#" id="img">slide_1</a>
            <a href="#" id="img">slide_1</a>
            <a href="#" id="img">slide_1</a>
            <a href="#" id="img">slide_1</a>
            <a href="#" id="img">slide_1</a>
        </div>
            
    </div>	

</body>
</html>