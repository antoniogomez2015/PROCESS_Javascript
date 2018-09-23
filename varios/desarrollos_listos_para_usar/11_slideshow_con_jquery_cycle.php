<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>slideshow</title>
<!--css-->
<link rel="stylesheet" type="text/css" href="css/11_slideshow_con_jquery_cycle.css">
<!--js-->
	<!--galería jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
	<!--galería jquery_cycle-->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

</head>

<body>

<!--tutorial:
	canal de youtube: 
    	Lievano San 
        	https://www.youtube.com/channel/UCoiUScbLU1MRlhgrTp2TjvQ
            
            tutorial: Como hacer un SlideShow Jquery + CSS
            https://www.youtube.com/watch?v=A-KhL13HMTc&hd=1-->
            
<!--http://jquery.malsup.com/cycle/-->

	
    <!--la instrucción "cycle()",convertirá todos los elementos que se encuentre dentro del elemento seleccionado, en este caso "#slideshow", en un slideshow funcional-->
    
    <!--el parámetro "fade", permite indicar que el método de transición será un desvanecimiento-->
    
    	<!--algunos parámetros de jquery cycle-->
        
        <!--fx: 'fade', este permite hacer un desvanecimiento->
        <!--fx: 'scrollRight', este permite hacer una transición hacia la derecha-->
        <!--fx: 'scrollLeft', este permite hacer una transición hacia la izquierda-->
        <!--fx: 'fadeZoom', este permite hacer una transición de zoom hacia nosotros-->
        <!--fx: 'scrolVert', este permite hacer una transición de arriba hacia abajo-->
        
        
        
    
    <!--estructura para utilizar jquery cycle y atravezar el dom,-->
	<script type="text/javascript">
    
        $(document).ready(function(e) {
            $('#slideshow').cycle({
				fx: 'scrollLeft'
            });
        });
    
    </script>
    
    
    
    <!--contenedor de las imágenes del slideshow-->
    	<!--éste contenedor tiene un id="", el cuál llamaremos a través de jquery cycle-->
    <div id="slideshow">
    	<img src="img/img1.jpg" width="1024" height="492" alt="slide1">
        <img src="img/img2.jpg" width="1024" height="492" alt="slide2">
        <img src="img/img3.jpg" width="1024" height="492" alt="slide3">
        <img src="img/img4.jpg" width="1024" height="492" alt="slide4">
        <img src="img/img5.jpg" width="1024" height="492" alt="slide5">    
    </div>






</body>
</html>
