//arreglo que contiene las respuestas
let correctas =[2,1,1,3,1];

//arreglo donde se guardan las resp del usuario

let op_elegida=[];

let cant_correctas = 0;

//funcion que toma el num de preg y el input elegido

function respuesta(num_preg, seleccionada){
    //guarda la resp elegida
    op_elegida[num_preg] = seleccionada.value;

    //el siguiente codigo es para poner en color blanco
    //el fondo de los inputs para cuando elige otra opcion
    //armo el id para selecionar el section correspondiente

    id = "p" + num_preg;

    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor= "red";
    labels[5].style.backgroundColor= "red";
    labels[7].style.backgroundColor= "red";
    labels[9].style.backgroundColor= "red";
    labels[11].style.backgroundColor= "red";

    //doy color al label seleccionado
    seleccionada.parentNode.style.backgroundColor = "#148f77";
    console.log(op_elegida);
    console.log(correctas)
    //funcion que compara las correctas con las seleccionadas
       
}  
function corregir() {
    cant_correctas = 0;
    for(i=0; i< correctas.length;i++){
        if (correctas[i] == op_elegida[i]){
            cant_correctas++;
        }
    }
    console.log(cant_correctas);
    document.getElementById("resultado").innerHTML = cant_correctas;
}