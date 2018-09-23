<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>compatibilidad entre navegadores</title>
</head>

<body>

	<script type="text/javascript">
	
		/*para navegadores antiguos existe la siguiente expresión "//<![CDATA]  //]]>", la cuál permite que los navegadores no compatibles interpreten el código javascript como comentarios*/
		
		//<![CDATA]
			alert('codigo compatible');
		//]]>
	
	</script>

</body>
</html>