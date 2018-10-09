
/*
Masonry-Layout:
_______________

_primeramente debemos de recorrer los items, ó imágenes ha organizar para configurar el mansory layout 

_para posicionánlos uno en uno en cada rspectiva columna del layout, respectivo de ésta manera, el item 1, lo debemos de colocar en la columna 1, el seundo item, debemos de colocarlo en la segunda columna y el tercer iterm, debemos de colocarlo en la tercera columna

_de ésta manera, debemos de repetir el ciclo para el 4 item, en adelante nuevamente a partir de la columna 1, para crear un nuevo "row", respectivamente

*/

/*
_primeramente crearemos una constante la cuál, contendrá una función anónima la cuál, recibirá 3, parámetros; 

    _donde el primer parámetro será el contenedor de elementos en éste caso el tag, <main>

    _como segundo parámetro recibirá los contenedores de cada imágen <div>

    _y a su vez, recibirá la cantidad de columnas creadas en la maquetación de tipo grid layout css
*/

const masonryLayout = (main, item, columns) =>{
    //agregamos la clase mansory-layout, y "columns", al contenedor del sistema
    //NOTA: estamos interpolando "columns-${columns}", del parámetro "columns", de la función anónima de la constante masonryLayout
    main.classList.add('masonry-layout', `columns-${columns}`)
    
    //array vacío para crear 3, columnas
    let col =[];

    //ciclo for para crear tantos elementos como columnas se hayan indicado en el parámetro de la constante "masinryLayout/columns"
    for(let i = 1; i <= columns; i++){
        //crear un nuevo elemento html por cada iteración
        let nIt = document.createElement('div')
        //al cada elemento creado agregar éstas clases
        nIt.classList.add('n-Column', `colum-${i}`)
        //agregar éstos elemeento dentro del tag <main>, en éste caso
        main.appendChild(nIt)
        //agregar los elementos creados dentro del array vació "col[]"
        col.push(nIt)
    }

    //ciclo para recorrer cada "row", de elementos
    //así, determinaremos la cantidad de iteraciones ó lo que será igual a la cantidad de "rows", en relación a la cantidad de "items", ya que si por ejemplo hay "13 items", entre "3", columnas, ésto dará 3, columnas de 3 ó 3 rows, de ésta manera, a través, del método "ceil()", se redondeará ha otra iteración más u otro "row", con el item, sobrante de los 12
    for(let n = 0; n < Math.ceil(item.length / columns); n++){
        for(let m = 0; m < columns; m++){
            col[m].appendChild(item[m * columns + m])
        }        
    }
}

masonryLayout(document.getElementById('gallery'), 
document.querySelectorAll('.item-img'), 3)



