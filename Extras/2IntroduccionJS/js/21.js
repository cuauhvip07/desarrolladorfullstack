//   Arrow Functions



const sumar2 = (n1,n2) => console.log(n1 + n2)
sumar2(10,5)

const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`)

aprendiendo('JavaScript')




const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

const carrito = [ 
    { nombre:'Monitor 20 pulgadas', precio: 500 },
    { nombre:'Television 50 pulgadas', precio: 700 },
    { nombre:'Tablet ', precio: 300 },
    { nombre:'Audifonos ', precio: 200 },
    { nombre:'Teclado ', precio: 50 },
    { nombre:'Celular', precio: 500 },
    { nombre:'Bocinas', precio: 300 },
    { nombre:'Laptop', precio: 800 }
    
];



// forEach

//Iteracion de los meses
 meses.forEach(mes => {
    if (mes =='Marzo'){
        console.log('Marzo si existe')
    }
})





//Some ideal para arreglo de objetos

const resultado2 = carrito.some(producto => producto.nombre === 'Celular');

console.log(resultado2);


//Reduce  Sumar los datos

const resultado3 = carrito.reduce((total,producto) => total + producto.precio, 0)  //Parametro de inicializacion 

console.log(resultado3)


// Filer    Obtener informacion con o sin discriminacion 

const resultado4 = carrito.filter(producto =>  producto.precio > 400 );

const resultado5 = carrito.filter(producto => producto.nombre !== 'Celular');

console.log(resultado4);
console.log(resultado5)