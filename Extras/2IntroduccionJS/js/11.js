//Destructuring

// Creacion del objeto  
const producto = {
    nombreProducto : 'Monitor 20 pulgadas',
    precio : 300,
    disponible : true
}


// Asignacion Forma Anterior
const precioProducto = producto.precio;
    // nombreProducto = producto.nombreProducto

console.log(precioProducto);
// console.log(nombreProducto);



//Asignacion Nueva Forma 

//Destructuring

// const {precio} = producto;
// const {nombreProducto} = producto;


//Es lo mismo de la parte de arriba
const {precio, nombreProducto} = producto; 

console.log(precio);
console.log(nombreProducto)
