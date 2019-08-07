/*
    _primeramente debemos determinar el scroll máximo, para determinar cuando se termina de hacer sroll 
    
    _para que la barra que hemos creado pueda llenarse en el momento justo que se a caba el contenido respectivo representado por el scroll


    Scroll Hight:
    _____________

        _para lo cuál, debemos de implementar el concepto "scroll hight", ó altura total del navegador

        _de ésta manera, por ejemplo, en la consola podremos comprobar la altura del navegador a través de:

            const h1 = console.log(document.documentElement.scrollHeight);

        _lo cuál, nos arrojará en éste ejemplo un valor de:

            _"1328"

        
    Client Hight:
    _____________

        _más para ésto debemos de restar la altura de la pantalla inicial, para lo cuál, debemos de implementar el concepto de "client height"

        _de ésta manera, por ejemplo, en la consola podremos comprobar diferencia de la altura del navegador a través de:

            const h2 = console.log(document.documentElement.clientHeight);

        _lo cuál, nos arrojará en éste ejemplo un valor de:

            _"648"


        _de ésta manera, ahora podremos hacer la resta para obtener la diferencia entre ambos valores:

            console.log(h1 - h2);

        _de ésta manera, podremos obtener ahora que la diferencia entre ambos valores es:

            _2667
*/

    /*tomamos la altura del navegador*/
    const h1 = console.log(document.documentElement.scrollHeight);

    /*tomamos la diferencia de la altura del navegador*/
    const h2 = console.log(document.documentElement.clientHeight);

    /*calculamos la diferencia entre ambos valores*/
    const scrollUnit = (h1 - h2) / 100;

    /*ahora vamos ha acceder a todos los estilos css, que están en el :root html*/
    const rootStyle = document.documentElement.style;

    /*
        _ahora tenemos que saber que cada vez que hacemos scroll, detectar cuantas unidades "scrollUnit", hemos avanzado

        _para lo cuál, debemos devidir el scroll detectado entre la diferencia de la altura del navegador que ya hemos calculado previamente
    */
    addEventListener('scroll', () =>{
        rootStyle.setProperty('--width', Math.round(scrollY / scrollUnit))        
    });