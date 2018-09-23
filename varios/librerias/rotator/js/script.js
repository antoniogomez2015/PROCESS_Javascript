	window.actualPage = '';
	function animateRandom(){
	var miRetorno = createAleatorio(1,9);	
	for(i=1; i<=9; i++){
		switch(miRetorno) {				
				
				case i:
					if(miRetorno = i){
						
						$("#image"+i).fadeIn();
						actualPage = '#image'+i
						//console.log(actualPage);
						var dataString = 'id='+i;
						
						  $.ajax({
						  type: "POST",
						  url: "impresiones.php",
						  data: dataString,
						  success: function() {
							
								console.log("completo impresion");
							}	
						});
					}
				break;	
			}
		}
	}

	function createAleatorio(superior, inferior){
		var numPosibilidades = superior - inferior; 
		var aleat = Math.random() * numPosibilidades;
		aleat = Math.round(aleat);
		return parseInt(inferior) + aleat;
	}
	
	$(".contadorClicks").bind("click", function()
	{
	
		actualPage = this.id
		for(j=1; j<=9; j++){
			if(actualPage == 'image'+j){
			var dataString = 'id='+j;
						
				  $.ajax({
				  type: "POST",
				  url: "go.php",
				  data: dataString,
				  success: function() {
					
						console.log("completo epaaagggg");
					}	
				});
			};
		}
	});
		
		