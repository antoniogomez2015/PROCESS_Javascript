<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>efecto lupa</title>
<!--tutorial: Efecto Zoom con JQuery: https://www.youtube.com/watch?v=wDkB3LSTXn4&hd=1-->
<!--js-->
	<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
	<!--libreria jqueryImgageLens-->
<script type="text/javascript" src="../librerias/imageLens/jquery.imageLens.js"></script>
	<!--funciones js-->
<script type="text/javascript">
	
	$(document).ready(function(e) {
        $('#img_01').imageLens();
    });

</script>
</head>

<body>

	<!--el atributo "id="img_01..", en cada imágen que desiemos aplica el plugins es imprecindible para la aplicación del mismo-->
    <img src="img/800_500_2.jpg" id="img_01" width="800" height="500" alt="phone">

</body>
</html>