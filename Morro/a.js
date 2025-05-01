
let indiceimg= 0;
let indicetxt= 0;
const imagenes2= document.querySelectorAll(`.galeria img`);
const ventanasec = document.querySelector(`.contenedorPpal`);
const imgactiva= document.querySelector(`#img_activa`);
const atras= document.querySelector(`.atras`);
const adelante= document.querySelector(`.adelante`);
const cerrar= document.querySelector(`.btn-cerrar`);

//ABRE VENTANA POPUP
const AbreVentanasec = (event) =>{
    imgactiva.src = event.target.src;
    ventanasec.style.visibility= 'visible';
    ventanasec.style.opacity= 1;
    indiceimg= Array.from(imagenes2).indexOf(event.target);

};

imagenes2.forEach((imagen)  =>{
    imagen.addEventListener('click', AbreVentanasec);
});
console.table(imagenes2);

//CIERRA VENTANA POPUP

cerrar.addEventListener('click', () => {
    ventanasec.style.displey = 'none';
    window.location.reload();
});