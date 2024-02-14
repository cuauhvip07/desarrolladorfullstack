// Objetos

// Creacion del objeto  
const producto = {
    nombreProducto : 'Monitor 20 pulgadas',
    precio : 300,
    disponible : true
}

console.log(producto);

// Acceder a las propiedades 
console.log(producto.nombreProducto);
console.log(producto.precio);

//Modificar objetos

// Añadiendo nuevas propiedades
producto.imagen = 'imagen.jpg'

console.log("Se añadio imagen", producto);

// Eliminar propiedades 

delete producto.disponible;

console.log("Se elimino disponible" , producto);