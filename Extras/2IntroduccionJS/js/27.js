// Programacion Orientada a Objetos

// Objeto Literal

const producto = {
    nombre : 'Tablet',
    precio: 500
}

// Objet Constructor

function Producto(nombre,precio,disponibilidad){
    this.nombre = nombre
    this.precio = precio
    this.disponibilidad = disponibilidad
}

// Prototype   crea funciones que solo se utilizan en un objeto en especifico 
// Al principio se pone el nombre tal cual de la clase
Producto.prototype.formatearProducto = function(){
    return `El producto ${this.nombre} tiene un precio de ${this.precio}`
}

const producto2 = new Producto('Monitor',200,false)
const producto3 = new Producto('Tablet', 300, true)
const producto4 = new Producto('Celular', 500, true)
const producto5 = new Producto('Microfono', 100, false)

console.log(producto2)
console.log(producto3)
console.log(producto4)
console.log(producto5)

console.log(producto2.formatearProducto())
console.log(producto3.formatearProducto())