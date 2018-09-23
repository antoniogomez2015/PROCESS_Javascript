<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>galeria</title>
<!--Css-->
<style type="text/css">
	body{
		background: #212121;
	}
	h2{
		text-align: center;
		color:#ddd;
	}
	#grande{
		width: 400px;
		margin:0 auto;
		margin-bottom: 2%;
		display: block;
	}
	#grande img{
		width: 400px;
	
	}
	#miniaturas{
		width: 400px;
		margin:0 auto;
		display: block;
	
	}
	#miniaturas img{
		width: 80px;
		border-radius: 80px;
		border:4px solid #ddd;
		-webkit-transition:all .25s linear;
	}
	#miniaturas img:hover{
		-webkit-transform:scale(1.2);
	}
	.preloader{
		position: absolute;
		top:30%;
		left: 50%;
	}
</style>
<!--Js-->
	<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>

	<!--scripts de funcionamiento de la galería-->
    <script type="text/javascript">
		$(document).ready(function(){
			$('.preloader').hide()
			var principal = $('a:first').attr('href')
			$("#grande").html("<img src='"+principal+"' />")
		
			$('a').click(function(){
		
				var imagen_seleccionada = $(this).attr('href')
				if(imagen_seleccionada!=principal){
					principal = imagen_seleccionada
		
					$('a').each(function(){
						if($(this).attr('href')==imagen_seleccionada){
							$(this).animate({'opacity':'.5'})
						}
						else{
							$(this).animate({'opacity':'1'})
						}
					})
		
					$("#grande").html("<img src='"+imagen_seleccionada+"'/>").animate({'opacity':'0'},0)
					$(".preloader").fadeIn()
					$("#grande img").load(function(){
						$('.preloader').fadeOut(500,function(){
							$("#grande").animate({'opacity':'1'},200)
						})
					})
					return false;
				}
				else{
					return false;
				}
			})
		})
	</script>
	
    <!--galería html-->
	<h2>Galeria con css y jQuery</h2>
	<div id="grande"></div>
	<div id="miniaturas">
		<a href="uno.jpg"><img src="thumb1.jpg" /></a>
		<a href="dos.jpg"><img src="thumb2.jpg" /></a>
		<a href="tres.jpg"><img src="thumb3.jpg" /></a>
		<a href="cuatro.jpg"><img src="thumb4.jpg" /></a>
	</div>
	<img src="cargar.gif" class="preloader"/>
    
</body>
</html>