/*scripts*/

//primeramente seleccionaremos los elementos html
const red =  document.getElementById('red');
const green =  document.getElementById('green');
const blue =  document.getElementById('blue');

//ahora vamos ha obtener los estilos principales de todo el html
const rootStyle = document.documentElement.style;


//Paso: 3_para por últimos, una vez tenemos la información tanto del cambio de posición del slider, de input de tipo rango, como de la posición del mouse sobre el input, ahora si podremos con ésta información cambiar dinámicamente el color del background, en éste caso
const changeColorRed = e =>{
    rootStyle.setProperty('--red', e.target.value)
}

//Paso: 2_en éste caso capturaremos el evento del cambio del valor del slider, del input tipo rango
red.addEventListener('change', e =>{
    changeColorRed(e)
})

//Paso: 1_en éste caso capturaremos el evento de el movimiento del mouse sobre el input tipo rango
red.addEventListener('mousemove', e =>{
    changeColorRed(e)
})




//--ahora procedeeremos ha repetir todo para los demás sliders




//para green
const changeColorGreen = e =>{
    rootStyle.setProperty('--green', e.target.value)
}

green.addEventListener('change', e =>{
    changeColorGreen(e)
})

green.addEventListener('mousemove', e =>{
    changeColorGreen(e)
})




//para blue
const changeColorBlue = e =>{
    rootStyle.setProperty('--blue', e.target.value)
}

blue.addEventListener('change', e =>{
    changeColorBlue(e)
})

blue.addEventListener('mousemove', e =>{
    changeColorBlue(e)
})

