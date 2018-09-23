<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>background cycle</title>

<!--librerias jquery-->
	<!--jquery base-->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<!--jquery cycle-->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

	<!--función jquery rotación de backgrounds-->
<script type="text/javascript">

	$(document).ready(function background() {
				$('#slideshow').cycle({
				fx: 'fade',
				pager: '#smallnav', 
				pause:   1, 
				speed: 1800,
				timeout:  3500 
			});			
	});

</script>
</head>

<!--Css-->
<style type="text/css">
	
	#slideshow, img.bgM {
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
        z-index:-9999;
	}

</style>

<body>

	<div id="slideshow">
	  <img src="img/B r200F_high.jpg" class="bgM"/>
      <img src="img/huella_high.jpg" class="bgM"/>

	</div>

</body>
</html>