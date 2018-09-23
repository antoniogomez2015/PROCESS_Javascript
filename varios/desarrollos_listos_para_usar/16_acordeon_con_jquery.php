<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>acordeon</title>
<!--tutorial: Tutoriales JQuery - Efecto Acordeón: https://www.youtube.com/watch?v=MUb8bVcTW0g&hd=1-->
<!--css-->
<style type="text/css">

*{
	border:0px;
	margin:0px;
	padding:0px;
}
	.acordeon{
		width:300px;
		margin:50px 0 0 50px;
	}
	
		.acordeon h3{
			font-family:arial,helvetica,sans serif;
			font-size:16px;
			letter-spacing:6px;
			padding:3px 6px 3px 6px;
			margin:1px;
			background-color:silver;
			text-align:center;
			cursor:pointer;
		}

</style>
<!--js-->
	<!--jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
	<!--funciones para activar el acordeón-->
<script type="text/javascript">

	$(document).ready(function(e) {
        $('div.acordeon> div').hide();
		$('div.acordeon> h3').click(function(){
			$(this).next().slideToggle(90);
		});
    });

</script>
</head>

<body>

	<div class="acordeon">
    
    	<h3>Titulo_1</h3>
        
        <div>
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in laoreet odio, egestas convallis lectus. Duis mollis ligula id dui adipiscing, sit amet ultricies dolor sollicitudin. Praesent blandit turpis id ante eleifend, quis luctus tellus tristique.</p>
        </div>
        
        <h3>Titulo_2</h3>
        
        <div>
        	<p>Pellentesque viverra pretium ante pulvinar pharetra. In eleifend nibh vitae leo posuere, at aliquam enim bibendum. Nulla nec lectus nec nisi pretium rutrum quis nec elit. Quisque a tempor ipsum. Sed cursus tempus odio at pretium. Vestibulum imperdiet placerat sapien a hendrerit.</p>
        </div>
        
        <h3>Titulo_3</h3>
        
        <div>
        	<p>Donec quis velit molestie orci cursus lacinia. Vivamus nulla nisl, pharetra id mollis vitae, mattis et odio. Ut quis metus purus. Pellentesque interdum sollicitudin enim ac eleifend. Aliquam non tortor mollis, varius enim vel, rhoncus felis. Ut blandit porttitor nisl nec suscipit.</p>
        </div>
    
    </div>

</body>
</html>