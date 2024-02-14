// Unir dos objetos

// Creacion del objeto  
const producto = {
    nombreProducto : 'Monitor 20 pulgadas',
    precio : 300,
    disponible : true
}

const medidas = {
    peso: '1kg',
    medida: '1m'
}


//Union de dos objetos sin modificar
const nuevoProducto = {...producto, ...medidas};

console.log(nuevoProducto)