<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!--css-->
<style type="text/css">

	#container{
		width:1100px;
		height:500px;
		margin:0 auto;
		padding:0 auto;
	}
	
		#slideshow{
			width:800px;
			height:500px;
			float:left;
		}
		
		#tumbs{
			width:300px;
			height:500px;
			float:left;
		}
		
			#tumbs ul{
				list-style:none;
			}
			
				#tumbs ul li{
					text-decoration:none;
					display:block;
					padding:5px;
				}
			
			#tumbs img, p, a{
				float:left;
			}
						
</style>

<!--js-->
	<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
	<!--jquery cycle-->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
</head>

<body>

<!--tutorial: https://www.youtube.com/watch?v=zREFgeVHWHA&src_vid=A-KhL13HMTc&feature=iv&annotation_id=annotation_944053&hd=1-->

<!--

jQuery Plugin Notification - Mostrar mensajes en nuestra web
https://www.youtube.com/watch?v=dJ-LgJlyTgU&hd=1

Como hace un menu desplegable con JQuery
https://www.youtube.com/watch?v=PHj9jE6OBEk&hd=1

jQuery UI Menu Example
https://www.youtube.com/watch?v=3XEoxdCv4to&hd=1

Jquery carousel slider tutorial, Jquery Slider tutorial Introduction - Pt.1 / 5
https://www.youtube.com/watch?v=FgArKmD7Jlw&list=PLZU0qJlzY07VyUpJfz8MNU6FBYkfPKDfz&hd=1

Tutorial HTML5 YCSS3:Galeria de JQuery
https://www.youtube.com/watch?v=9VHZBkgetUk&hd=1

Galeria de Imágenes en HTML5 con Least.js
https://www.youtube.com/watch?v=WTxotCg4nmU&hd=1

Tutorial: Creacion de galeria de imagenes con JavaScript
https://www.youtube.com/watch?v=XYwqoyGsMJU&hd=1

Hacer un carrusel 3D con jQuery
https://www.youtube.com/watch?v=QXhfR_L0R-8&hd=1

Introducción a Jquery
	https://www.youtube.com/playlist?list=PLA7DE2D97049F804B
Introducción a Jquery (Parte 3) Galeria de imagenes de Flickr con Jquery y Ajax (1de4)
https://www.youtube.com/watch?v=CZpChnXaJjQ&list=UU6odSAU0iJWBXhFYjYCWzLg&hd=1
-->

	<!--funciones para hacer funcionar el slideshow-->
	<script type="text/javascript">
		
		$(document).ready(function(e) {
			/*función cycle para el slideshow principal*/
            $('#slideshow').cycle({
				fx:          'fade',
				timeout:      3000,
				pager:        '#container',
				pagerEvent:   'mouseover',
				fastOnEvent:  true,
			});
			
			/*función cycle para las tumbs*/
			$('#rotador1').cycle({
				fx:        'scrollUp',
				timeout:    6000,
				delay:      -2000,
			});
			
			$('#rotador2').cycle({
				fx:        'scrollUp',
				timeout:    5000,
				delay:      -2000,
			});
			
			$('#rotador3').cycle({
				fx:        'scrollUp',
				timeout:    4000,
				delay:      -2000,
			});
        });
	</script>


	<div id="container">
        <div id="slideshow">
            <img src="img/800_500_1.jpg" width="800" height="500" alt="slide1">
            <img src="img/800_500_2.jpg" width="800" height="500" alt="slide2">
            <img src="img/800_500_3.jpg" width="800" height="500" alt="slide3">        
        </div>
        
        <div id="tumbs">
        	<ul>
            	<li>
                	<div id="rotador1">
                        <div>
                            <img src="img/tumb1.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_1</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                        
                        <div>
                            <img src="img/tumb2.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_2</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                        
                        <div>
                            <img src="img/tumb3.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_3</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                    </div>
                </li>
                
                <li>
                	<div id="rotador2">
                        <div>
                            <img src="img/tumb1.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_1</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                        
                        <div>
                            <img src="img/tumb2.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_2</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                        
                        <div>
                            <img src="img/tumb3.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_3</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                    </div>
                </li>
                
                <li>
                	<div id="rotador3">
                        <div>
                            <img src="img/tumb1.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_1</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                        
                        <div>
                            <img src="img/tumb2.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_2</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                        
                        <div>
                            <img src="img/tumb3.jpg" width="100" height="50" alt="tumb1">
                            <p>Titulo_3</p>
                            <p>Este es el primer contenido de la escena le invitamos a ver nuestro portafolio en:</p>
                            <a href="#">visitenos</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>