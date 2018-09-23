<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>condicionales anidados</title>
</head>

<body>

	<script type="text/javascript">
	
		/*
		aqui quedamos: (10) Tutorial de Javascript en Español -10- Sentencias IF Anidadas: https://www.youtube.com/watch?v=1vn0OSQYfmI&list=PLNWyzHT7WnGOdkfbaW1LdJL6vgEOKSWOa&index=10&hd=1						
		*/
		
		/*un condicional anidado es aquel que se encuentra dentro de otro condicional, así, un condicional if(){}, se puede anidar dentro de otro if(){}*/
		
		/*ejemplo de programa para venta de televisores*/
		
		/*descuentos*/
			/*si vendemos una televisión blanco y negro el descuento será de un "5%"*/
			/*si vendemos una televisión de color el descuento dependerá del tamaño de la pantalla:
			si la pantalla es de '32"', el descuento será de un "8%",
			si la pantalla es de '50"', el descuento será de un "12%"*/
		
		/*preguntas al usuario*/
		
		tv_tipo = prompt("¿Qué tipo de televisión quieres: C/B");
		
		
		/*ahora vamos a chequear que tipo de televisor se venderá*/
		
		if(tv_tipo == "b"){
			descuento = 5;
		}else if(tv_tipo == "c"){
			/*anidamiento de un if(){} - else if(){}*/
			tv_dimension = prompt('¿De que tamaño quieres tu televisión: 32" ó 50"?');
			if(tv_dimension == 32){
				descuento = 8;
				}else if(tv_dimension == 50){
					descuento = 12;
				}
		};
		
		document.write(descuento);			
	
	</script>

</body>
</html>