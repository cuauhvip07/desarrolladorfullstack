// Arrays o Arreglos

const numeros = [10, 20, 30, 40 ,50];

// Verlo en una tabla
console.table(numeros);

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

console.table(meses);

// Acceder a los valores de un arreglo 

console.log(numeros[4]);
console.log(numeros[2]);


// Conocer la extension de un arreglo

console.log(meses.length)


// Iterador 
numeros.forEach(function(numero){
    console.log(numero)
})

// Agregar elemento NO muy comun

numeros[5] = 60;


//PRIMERA VERSION 

// Agregar hasta el final del arreglo    
numeros.push(70,80)
// Agrega al principio del arreglo
numeros.unshift(1,2)
console.table(numeros);



//Eliminar valores de un arreglo    PRTIMERA VERSION

// Elimina el ultimo elemento del arreglo
meses.pop()
//Elimina el primer elemento del arreglo
meses.shift()
//Eliminar elementos que estas en medio
meses.splice(1,1)   //Primer elemento la posicion, segundo elemento cuanros quieres eliminar
console.table(meses)


//SEFGUNDA VERSION

// Conservar los datos originales y pasarlos a otro arreglo 

// Rest Operator o Spread Operator
// Lo pasa a un nuevo arreglo 
const numevoArreglo = ['primero',...meses, 'junio'] // AGREGAR junio y primero
//ELIMINAR 

console.table(numevoArreglo)


