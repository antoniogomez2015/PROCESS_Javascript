//primero, seleccionamos al elemento html, input de tipo text donde el usuario indicará la información
let camp = document.querySelector('form input[type=text]');        
        

//luego, agregamos el evento "change", al elemento que hemos seleccionado  
camp.addEventListener('change', function(){ 

    //luego, seleccionamos al elemento de destino sobre el cuál, se volcará la información dinámica        
    let sc = document.querySelector('form [value=""]'); 

    //luego, al elemento de destino le cambiamos el valor del atributo value, por el valor del value, del elemento inicial donde el usuario indicará la informaicón
    let re = camp.value;
     
    //para que así, el primer elemento recoja la información y se la pase al segundo elemento
    sc.value = re;
    
               
});