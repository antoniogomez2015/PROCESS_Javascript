<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sistema de tabs con jquery</title>
<!--css-->
<style type="text/css">
	
	body{
		margin:0 auto;
		padding:0;
	}
	
		#tabs_contenido{
			width:800px;
			margin:auto;				
		}
		
			#tabs_contenido ul{
				list-style:none;				
			}
			
				#tabs_contenido ul li{					
					display:inline;				
					background: -webkit-linear-gradient(top, #fff, #eee);
					margin:8px 15px 8px 15px;
					padding:8px 15px 8px 15px;									
				}
												
					#tabs_contenido ul li a{
						text-decoration:none;
					}
				
				#tabs_contenido ul li:hover{
					background:-webkit-linear-gradient(top,#eee, #fff);
				}
				
			.contenido p{
				text-align:justify;
				line-height:2;
				color:#666;
				font-family:arial,helvetica,sans serif;
				font-size:12px;
			}
			
</style>
<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>

<!--
canal de YouTube: SoloProgramacion
https://www.youtube.com/channel/UCHMuELrYb7ynDGsWoB71-YQ

Tutoriales jQuery - Tabs (Pestañas)
https://www.youtube.com/watch?v=Fc4-5WhRGc4&hd=1
-->



	<!--finciones para hacer funcionar el sistema de tabs-->
    
    <!--paso 1: perimero ocultamos todo el contenido a través del selector ".contenido", y a su vez, hacemos mostrar sólo la primera perte del mismo a través de la primera considencia ó instancia del selector encontrada-->
    
    <!--paso 2: a través del selector ".nav_tabs", de lista desordenada, seleccionamos el primer item de lista ":fist", "li", al cuál se asignamos un evento de tipo "click()", más la instrucción "removeClass('active')", para que así, se remueva la clase con el contenido activo mostrado y, posteriormente se tomará como activa la siguiente coincidencia de la instancia de la clase ".contenido", esto es posible a través de una variable jquery con la palabra reservada "this", asignada como parámetro a dicha variable "$(this)"-->
    
    <!--paso 3: a continuación ocultamos todo el contenido para que éste no sea visible ante usuario, recordando que ya tenemos almacenado el contenido que será activo en la variable jquery $(this)-->
    
    <!--paso 4: creamos una variable llamada en este caso "contenido_activo", a la cuál le asignaremos como valor =( el contenido activo almacenado en la variable jquery $(this), más (.), la instrucción "find('a')", a la cuál le asignaremos como parámetro el atributo html ('a'), para que éste nos encientre los enlaces de los item de lista y, a su vez más (.), la instrucción "attr('')", la cuál nos permitirá obtener el atributo ó valor de los enlaces, asígnándole a esta instrucción el atributo "href", para que nos indique la ruta de los enlaces seleccionados.
    
    Y posterior mente solo hará falta llamar el contenido activo a través de la variable que creamos "contenido_activo", dentro de una variable jquery $(), más (.), una instrucción de efecto jquery, en este caso utilizaremos "fadeIn()",-->
    

<!--LOGICA: al conincidir el valor ó atributo de los enlaces encontrados por el "paso 4", con el identificador "id="",", de un determinado contenido ej: "#tab_content1", pasará este contenido a sumarse junto con el elemento activo "this", permitiendo así, hacer coincidir el elemento de etiquetas ó tag li, seleccionada ".nav_tabs", con el elemento de contenido "#nav_tabs", mostrando así, la etiqueta correcto y el contenido correcto deseados-->
    
    <script type="text/javascript">
		$(document).ready(function(e) {
			/*paso 1*/
			$('.contenido').hide();
			$('.contenido:first').show();
			
			/*paso 2*/
			$('.nav_tabs li').click(function(){
				$('.nav_tabs li').removeClass('active');
				$(this).addClass('active');
				
				/*paso 3*/
				$('.contenido').hide();
				
				/*paso 4*/
				contenido_activo = $(this).find('a').attr('href');
				$(contenido_activo).fadeIn();				
			});
            
        });
	</script>
    
    <div id="tabs_contenido">    
    	<!--pestañas ó tabs-->
        <ul class="nav_tabs">
        	<li><a href="#tab_content1">empresa</a></li>
            <li><a href="#tab_content2">productos</a></li>
            <li><a href="#tab_content3">pedidos</a></li>
            <li><a href="#tab_content4">contacto</a></li>
        </ul>
        
        <!--contenido de las tabs-->
        <div id="tab_content1" class="contenido">
        	<p>Parrafo (1) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in laoreet odio, egestas convallis lectus. Duis mollis ligula id dui adipiscing, sit amet ultricies dolor sollicitudin. Praesent blandit turpis id ante eleifend, quis luctus tellus tristique. Pellentesque viverra pretium ante pulvinar pharetra. In eleifend nibh vitae leo posuere, at aliquam enim bibendum. Nulla nec lectus nec nisi pretium rutrum quis nec elit. Quisque a tempor ipsum. Sed cursus tempus odio at pretium. Vestibulum imperdiet placerat sapien a hendrerit. Donec quis velit molestie orci cursus lacinia. Vivamus nulla nisl, pharetra id mollis vitae, mattis et odio. Ut quis metus purus. Pellentesque interdum sollicitudin enim ac eleifend. Aliquam non tortor mollis, varius enim vel, rhoncus felis. Ut blandit porttitor nisl nec suscipit.</p>
        </div>
        
        <div id="tab_content2" class="contenido">
        	<p>Parrafo (2) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in laoreet odio, egestas convallis lectus. Duis mollis ligula id dui adipiscing, sit amet ultricies dolor sollicitudin. Praesent blandit turpis id ante eleifend, quis luctus tellus tristique. Pellentesque viverra pretium ante pulvinar pharetra. In eleifend nibh vitae leo posuere, at aliquam enim bibendum. Nulla nec lectus nec nisi pretium rutrum quis nec elit. Quisque a tempor ipsum. Sed cursus tempus odio at pretium. Vestibulum imperdiet placerat sapien a hendrerit. Donec quis velit molestie orci cursus lacinia. Vivamus nulla nisl, pharetra id mollis vitae, mattis et odio. Ut quis metus purus. Pellentesque interdum sollicitudin enim ac eleifend. Aliquam non tortor mollis, varius enim vel, rhoncus felis. Ut blandit porttitor nisl nec suscipit.</p>
        </div>
        
        <div id="tab_content3" class="contenido">
        	<p>Parrafo (3) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in laoreet odio, egestas convallis lectus. Duis mollis ligula id dui adipiscing, sit amet ultricies dolor sollicitudin. Praesent blandit turpis id ante eleifend, quis luctus tellus tristique. Pellentesque viverra pretium ante pulvinar pharetra. In eleifend nibh vitae leo posuere, at aliquam enim bibendum. Nulla nec lectus nec nisi pretium rutrum quis nec elit. Quisque a tempor ipsum. Sed cursus tempus odio at pretium. Vestibulum imperdiet placerat sapien a hendrerit. Donec quis velit molestie orci cursus lacinia. Vivamus nulla nisl, pharetra id mollis vitae, mattis et odio. Ut quis metus purus. Pellentesque interdum sollicitudin enim ac eleifend. Aliquam non tortor mollis, varius enim vel, rhoncus felis. Ut blandit porttitor nisl nec suscipit.</p>
        </div>    
    </div>

</body>
</html>