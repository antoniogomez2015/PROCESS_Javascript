<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<!--Css-->
<style type="text/css">

	#mostrar{
		display:none;
	}

</style>

<!--librerias jquery-->
<script type="text/javascript" src="../librerias/jquery/jquery.js"></script>
<script type="text/javascript" src="../librerias/jquery min/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../librerias/jquery ui/jquery-ui.js"></script>
<script type="text/javascript" src="../librerias/jquery ui/jquery-ui.min.js"></script>

<!--funciones jquery-->
<script type="text/javascript">
	
	<!--función para ocultar el contenido-->
	$(document).ready(function() {
		
		$('#ocultar').click(function(){
		
		$('#contenido').hide('Slide');
		$('#mostrar').show('Slide');
		$('#ocultar').hide('Slide');		
		});
        
    });
	
	<!--función para mostrar el contenido-->
	$(document).ready(function() {
		
		$('#mostrar').click(function(){
		
		$('#contenido').show('Slide');
		$('#mostrar').hide('Slide');
		$('#ocultar').show('Slide');		
		});
        
    });
</script>

<!--Canal de youtube: abell12, Tutorial: JavaScript: Show and hide DIV's (With Animation); https://www.youtube.com/watch?v=ALSQtqz6RmU&hd=1-->

<!--opciones ó parámetro de las instrucciones "show/hide",-->

	<!--'Blind', función: plegado hacia arriba-->
    <!--'Bounce', función: rebotado hacia arriba-->
    <!--'Clip', función: hundimiento hacia abajo-->
    <!--'Drop', función: slide_left, con desvanecimiento-->
    <!--'Explode', función: explición en forma de fragmentación-->
    <!--'Fold', función: plegado hacia arriba y luego hacia la izquierda-->
    <!--'Highlight', función: highlight de un color y luego desvanecimiento-->
    <!--'Puff', función: aumento tipo zoom y luego desvanecimiento-->
    <!--'Pulsate', función: efecto estroboscópico y luego desvanecimiento-->
    <!--'Scale', función: esale-in, hasta cero hasta desaparecer-->
    <!--'Shake', función: saltos a la izquierda y luego se desvanece-->
    <!--'Blind', función: plegado hacia arriba-->
    <!--'Size', función: escala su tamaño hasta desaparecer (similar a Scale)-->
    <!--'Slide', función: slide-left luego desaparece-->

</head>

<body>

	<div id="buttons">
    	<a href="#" id="mostrar">mostrar</a>
    	<a href="#" id="ocultar">ocultar</a><!--
        <input type="button" value="mostrar" id="mostrar">
        <input type="button" value="ocultar" id="ocultar">-->
    </div>

	<div id="contenido">
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in laoreet odio, egestas convallis lectus. Duis mollis ligula id dui adipiscing, sit amet ultricies dolor sollicitudin. Praesent blandit turpis id ante eleifend, quis luctus tellus tristique. Pellentesque viverra pretium ante pulvinar pharetra. In eleifend nibh vitae leo posuere, at aliquam enim bibendum. Nulla nec lectus nec nisi pretium rutrum quis nec elit. Quisque a tempor ipsum. Sed cursus tempus odio at pretium. Vestibulum imperdiet placerat sapien a hendrerit. Donec quis velit molestie orci cursus lacinia. Vivamus nulla nisl, pharetra id mollis vitae, mattis et odio. Ut quis metus purus. Pellentesque interdum sollicitudin enim ac eleifend. Aliquam non tortor mollis, varius enim vel, rhoncus felis. Ut blandit porttitor nisl nec suscipit.

Morbi laoreet lacus a mollis malesuada. Suspendisse ipsum leo, ultricies in nunc vitae,</p>
    </div>

</body>
</html>