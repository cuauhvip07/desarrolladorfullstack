
// "use strict"       Ayuda a detectar y tener las buenas practicas de js

// Creacion del objeto  
const producto = {
    nombreProducto : 'Monitor 20 pulgadas',
    precio : 300,
    disponible : true
}



//Object.seal   Permite SOLAMENTE cambiar informacion, NO deja eliminar y añador datos al objeto
Object.seal(producto);
producto.precio = 200

// Object.freeze  Congela el objeto y no deja añadir mas propiedades, no permite eliminar, tampoco agregar nuevas cosas, ni cambiar informacion 
Object.freeze(producto);

producto.imagen = 'imagen.jpg'

// Object.isFrozen    Detecta si un objeto esta congelado
console.log(Object.isFrozen(producto)); 

console.log(producto)