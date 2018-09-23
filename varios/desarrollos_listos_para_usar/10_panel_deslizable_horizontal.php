
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>paneldeslizable horizontal</title>

<!--tutorial: http://www.funcion13.com/2012/10/01/panel-deslizable-horizontal-con-jquery/-->
<!--demo: http://www.funcion13.com/wp-content/ejemplos/09-12/panel_deslizable/-->

<!--Css-->
<style type="text/css">

	#tab {
		width:40px;
		height:50px;
		position: absolute;
		left: 0;
		top: 25px;
		display:block;
		cursor:pointer;
		background-color:#232526;
		border-radius: 0 10px 10px 0;
		padding: 5px 0 5px 5px; 
	}       
	#tab_interna {
		border-radius: 5px 0 0 5px;
		width: 100%;            
		height: 100%;
		margin:12px 0 0 7px;
		background-image:url(img/arrow_right.png);
		background-repeat:no-repeat;
	}               
	#tab_interna:hover {
		margin-left:3px;		
	}
	.expandida {
		background: #CCC url('images/arrow_posts_right.png') no-repeat center center !important;            
	}       
	.expandida:hover {
		background-position: 11px 13px !important;
	}
	 
	#panel {
		position: absolute;
		right: 0;
		top:25px;
		background-color:#CCC;
		height:250px;
		width:0;
		font: 18px Arial;
		color: #707275;
		text-align: center;
		border-radius: 0 0 0 15px;
	}
	#panel h3 {
		margin: 0;
		margin-bottom: 15px;
		text-transform: uppercase;
	}
	 
	#panel .content {
		width:320px;
		margin: 5px auto;
	}

</style>

<!--javascript-->

<script type="text/javascript">

	(function($){
  	  var $contenido = $(".contenido").hide(),
      $tab = $('#tab'),
      $tab_interna = $('#tab_interna'),
      $panel = $('#panel')
      $abre_tab = $('a#abre_tab');
     
  	  $abre_tab.on('click',function(e){ e.preventDefault();});
   
  $tab.toggle(
    function(){
      $tab
        .stop()
        .animate({
          right: "400px"
        },500, function(){
          $tab_interna.addClass('expandida');
        });
      $panel
        .stop()
        .animate({
          width: "400px",
          opacity: 0.8
        }, 500, function(){
          $contenido.fadeIn('slow');
        });
    },
    function(){
      $contenido.fadeOut('slow', function() {
        $tab
          .stop()
          .animate({
            right: "0"
          },500, function(){
            $tab_interna.removeClass();
          });
        $panel
          .stop()
          .animate({
            width: "0",
            opacity: 0.1
          }, 500);
      });
    }
  );
})(<span class="hq371zn" id="hq371zn_4">jQuery</span>);

</script>

</head>

<body>

	<!-- Botón que activa el panel -->
	<a href="#" id="abre_tab">
    <div id="tab"> 
        <!--arrows-->
        <div id="tab_interna"> 
        </div>
    </div> 
	</a>
    
	<!-- Panel oculto -->
	<div id="panel">
    	<div class="contenido">
        	<h3>Contenido</h3>
    	</div>    
	</div>
    

</body>
</html>