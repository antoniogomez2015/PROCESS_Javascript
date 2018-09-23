<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ventana modal</title>
<!--css-->
<link rel="stylesheet" type="text/css" href="css/ventana_modal.css">
<!--libreria jquery-->
<script type="text/javascript" src="js/jquery.js"></script>

<!--funciones de jquery para abrir y cerrar nuestra ventana modal-->
<script type="text/javascript">

	/*función para abrir nuestra ventana modal*/
	function open_ventana_modal(){
		$("#ventana_modal").slideDown("slow");
	};
	
	/*función para cerrar nuestra ventana modal*/
	function cerrar_ventana_modal(){
		$("#ventana_modal").slideUp("slow");
	};

</script>
</head>

<body>

	<div id="wrapper">
    
    	<!--div, contenedor de la info emergente que traeremos a través jquery-->
        <div id="ventana_modal">
        	
            <!--descripción general del lightbox-->
            <h3>Información</h3>
            
            <!--contenedor de contenido, en este caso mostrará un video-->
            <div id="video">
            
            	<!--contenedor para un botón tipo enlace para cerrar lightbox-->
                <div id="cerrar">
                	<!--evento javascript, en el destino del enlace para la función cerrar ventana modal-->
                    <a href="javascript:cerrar_ventana_modal()"><img src="img/cerrar.png" width="36" height="36" alt="Cerrar"></a>
                </div>
                
            	<!--contenido principal, un video relacionado de youtube-->
                <iframe width="560" height="315" src="//www.youtube.com/embed/JkyMXQV3_vc" frameborder="0" allowfullscreen></iframe>
                
            </div>
        </div>
        
        <!--body-->
        	<!--evento javascript, en el destino del enlace para la función abrir ventana modal-->
        <a href="javascript:open_ventana_modal();">información</a>
    
    </div>
    
    

</body>
</html>