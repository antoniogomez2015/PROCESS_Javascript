<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>efecto turn</title>

<!--tutorial:
gigpz1
Album o Libro web con Turn.js
https://www.youtube.com/watch?v=mTZ8CrATd6Q&index=1&list=PLoo24U0izhRflGKVV5_eAGwOKrkn97Ssj&hd=1
-->

<!--css-->
<style type="text/css">
	#flipbook{
		width:800px;
		height:1100px;
		background-color:#0CF;
	}
	
	.hard{
		background-color:#09C;
	}
	
	.pages{
		background-color:#999;
	}
</style>
<!--js-->
	<!--librería jquery-->
<script type="text/javascript" src="../librerias/jquery/jquery.js"></script>
	<!--librería turn-->
<script type="text/javascript" src="../librerias/turnjs/turn.js"></script>
</head>

<body>

	<!--scripts de funcionamiento turn-->
	<script type="text/javascript">
        $(document).ready(function(e) {
            $("#flipbook").turn({
            width: 800,
            height: 1100,
            autoCenter: true
            });
        });
    </script>
    
    <!--contenedor principal para "turn" y con un id="",-->
    <div id="flipbook">
       	<!--presentación libro abirerto-->
        <div class="hard"> 
        	Turn.js 
        </div>
        
        <!--página número 1-->
        <div class="hard">
        	inicio
        </div>
        
        <div class="pages"> 
        	Page 1 
        </div>
        
        <div class="pages"> 
        	Page 2 
        </div>
        
        <div class="pages"> 
        	Page 3        
        </div>
        
        <div class="pages"> 
        	Page 4 
        </div>
        
        <!--final-->
        <div class="hard">
        	fin1
        </div>
        
        <!--otros final-->
        <div class="hard">
        	fin2
        </div>
	</div>

</body>
</html>