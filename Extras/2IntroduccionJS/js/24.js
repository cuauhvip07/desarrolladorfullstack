//  Iteradores


// For loop
for(let i = 0; i < 10; i++){
    console.log(i);
}


for(let j = 1; j < 10; j++){
    if ( j % 2 == 0){
        console.log(`El indice ${j} es par`)
    }
}


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

for(k = 0; k < carrito.length ; k++){
    console.log(carrito[k].nombre)
}



// While loop
let x = 0
while (x < 10){

    console.log(x)
    x++;
}




// Do while loop

let y = 0

do{

    console.log(y)
    y++
}while(y < 10)


