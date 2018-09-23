<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>lightbox</title>

<!--lightbox-->
	<!--estilos css-->
    <link rel="stylesheet" type="text/css" href="librerias/lightbox/lokeshdhakar/css/lightbox.css">
    
    <!--jquery-->
    	<!--jquery_base-->
	<script type="text/javascript" src="librerias/lightbox/lokeshdhakar/js/jquery-1.11.0.min.js"></script>
    	<!--jquery_lightbox-->
	<script type="text/javascript" src="librerias/lightbox/lokeshdhakar/js/lightbox.min.js"></script>
</head>

<body>

	<!--método rotativo, a través de la instrucción; "data-lightbox="roadtrip", como atributo de la etiqueta <a>, esta instrucción permitirá que cada enlace que tenga la instrucción "data-lightbox="roadtrip", tomará la imágen automática mente para para la rotativa de las imágenes cargadas en el lightbox, en sus propiedades de "next-previo"-->
    <a href="img/huella_high.jpg" data-lightbox="roadtrip">descirpción<img src="img/huella.jpg" width="450" height="470" alt="huella"></a>
    <a href="img/huella_high.jpg" data-lightbox="roadtrip">descirpción<img src="img/huella.jpg" width="450" height="470" alt="huella"></a>
    <a href="img/huella_high.jpg" data-lightbox="roadtrip">descirpción<img src="img/huella.jpg" width="450" height="470" alt="huella"></a>
    <a href="img/huella_high.jpg" data-lightbox="roadtrip">descirpción<img src="img/huella.jpg" width="450" height="470" alt="huella"></a>
    
    
    <!--método referido, a través de la instrucción "data-lightbox="image-1", indicando consecutivamente la número de la imágen en la cada enlace, ej: "image-1,2,3..."-->
    <!--en el atributo "data-title="",", podemos incluir una descripción para las imágenes peviews-->
    <a href="img/B r200F_high.jpg" data-lightbox="image-1" data-title="My caption">moto</a>
    
    <a href="img/B r200F_high.jpg" data-lightbox="image-1" data-title="My caption"><img src="img/B r200F.jpg" width="300" height="168" alt="moto"></a>
	
    	

</body>
</html>