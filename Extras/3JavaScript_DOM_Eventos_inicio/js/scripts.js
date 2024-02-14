
// Todos inician con .document


//querySelector   Solo manda a llamar UN tipo de clase
const heading = document.querySelector(".header__texto h2")   // Retorna 0 o 1 elementos
console.log(heading)
// heading.textContent = 'Nuevo Heading'   .textContent   Permite cambiar el texto 
// heading.classList.add('nueva-clase')    .classList.add()   Permite agregar nuevas clases 


//querySelectorAll   
const enlaces = document.querySelectorAll('.navegacion a')   //Retororna de 0 a VARIOS elementos
// console.log(enlaces[0])    [] Si quieres acceder a uno en concreto 

// enlaces[0].textContent = 'Nuevo Texto para enlace'  .textContent  Cambia el texto 
// enlaces[0].href = 'http://google.com'     .href   Cambia la URL
// enlaces[0].classList.remove('navegacion__enlace')  classList.remove()  Remueve clases creadas    no necesitas poner el punto

console.log(enlaces)   



//getElementByID

const heading2 = document.getElementById('heading')   //No necesita numeral


console.log(heading2)




//    --------------------------------------------
//Generar codigo HTML
// Agrehar una nueva navegacion 
const nuevoEnlace = document.createElement('A')  //Etiqueta en mayusculas

//agregar href
nuevoEnlace.href = 'nuevo-enlace.html'

//agregar texto
nuevoEnlace.textContent = 'Tienda nueva'


//agregar la clase
nuevoEnlace.classList.add('navegacion__enlace')


//agregarlo al documento
const navegacion = document.querySelector('.navegacion')
navegacion.appendChild(nuevoEnlace)      //.appendChild      Insertar una variable a un lugar

console.log(nuevoEnlace)





//            EVENTOS


// console.log(1)

// //window es mayor que document     Puedes acceder a todas las funciones
// window.addEventListener('load', function(){// window.addEventListener('load',) Espera a que el JS y archivos html, css esten listos
//     console.log(2)
// })


// window.addEventListener('load', imprimir) // Otra manera de llamra una funcion 

// function imprimir (){
//     console.log(6)
// }



// window.onload = function(){ //La misma funcion de .addEvenetListener('load',)
//     console.log(3)
// }



// document.addEventListener('DOMContentLoaded',function(){  //Espera a que SOLAMENTE el HTML este listo, NO espera css ni imagenes 
//     console.log(4)
// })



// console.log(5)


// window.onscroll = function(){
//     console.log('Scrolling...')
// }



//            SELECCIONAR ELEMENTOS Y ASOCIARLES UN EVENTO 

// const btnEnviar = document.querySelector('.boton--primario')           //Click para todo menos formulario

// btnEnviar.addEventListener('click',function(evento){
//     console.log(evento)  //Informacion del evento 
//     evento.preventDefault()  // No hace la accion por default, ya que previene antes de enviar.  Sirve para validar un formulario 
//     console.log('Enviando Formualario')
// })




//       EVENTO DE LOS INPUTS Y TEXTAREA

const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}

const nombre = document.querySelector('#nombre')  //id del html
const email = document.querySelector('#email')
const mensaje = document.querySelector('#mensaje')
const formulario = document.querySelector('.formulario')           //Seleccionar el formulario 

nombre.addEventListener('input', leerTexto)
email.addEventListener('input', leerTexto)
mensaje.addEventListener('input', leerTexto)
//      EL EVENTO DE SUBMIT

formulario.addEventListener('submit',function(evento){             // Usar Siempre tener un formulario con boton tipo "SUBMIT"
    evento.preventDefault()
    
    // Validar Formulario

    const {nombre,email,mensaje} = datos    // Destructuring  con el evento global de la parte de arriba
    
    if (nombre == ''|| email == '' || mensaje == ''){
        mostrarAlerta('Todos los campos son obligatorios', 'error')
        return      //Corta la ejecucion del codigo 
    }
    

    // Enviar el formulario
    mostrarAlerta('Mensaje enviado correctamente')    // Mandar a llamar la funcion 
    
})   


function leerTexto(e){
    datos[e.target.id] = e.target.value   // e es de la funcion   target hace referencia al input     id es de los datos     value es el valor 
    // console.log(datos)
}



//       TODO EL CODIGO ES LO MISMO QUE LO DE HASTA ABAJO SOLO MAS EXPLICITO 


//    MUESTRA UN ERROR EN PANTALLA




// function mostrarError(mensaje){
//     const error = document.createElement('P')
//     error.textContent = mensaje
//     error.classList.add('error')
//     formulario.appendChild(error)


//     //Desaparecer la alerta despues de 5 segundos

//     setTimeout(() => {
//         error.remove()
//     },5000)
// }

// //   MUESRA ENVIO DE FORMULARIO 

// function mostrarEnvio(mensaje){
//     const enviado = document.createElement('P')
//     enviado.textContent = mensaje
//     enviado.classList.add('enviado')
//     formulario.appendChild(enviado)

//     // Desaparecer despues de 5 segundos 

//     setTimeout(() => {
//         enviado.remove()
//     },5000)
// }



//      REFACTURING    SER MAS COMPACTO EL CODIGO

function mostrarAlerta(mensaje,error = null){

    const alerta = document.createElement('P')
    alerta.textContent = mensaje
    if (error){
        alerta.classList.add('error')
    }
    else{
        alerta.classList.add('enviado')
    }

    formulario.appendChild(alerta)

    setTimeout(() => {
        alerta.remove()
    },5000)
}