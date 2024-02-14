// Tipos de datos

// String o cadena de texto
const producto = "Monitor de 20 Pulgadas";
const producto2 = String('Monitor 30 pulgadas');
const producto3 = new String('Monitor 50 pulgadas');
const producto4 = "Monitor de 20\"" ; //Usar comillas dobles

const tweet = "Aprendiendi JavaScript con los fundamentos necesarios";

console.log(producto);
console.log(typeof producto);   //Tipo de Dato
console.log(producto2);
console.log(producto3);
console.log(producto4);

//Length  Conocer numero de caracteres
console.log(tweet.length);

// IndexOf  Conocer la posicion de una palabra o letra
console.log(tweet.indexOf("JavaScript"))
console.log(producto4.indexOf("d"));    //Cuando sale -1 significa que no lo pudo encontrar

//Includes  Conocer si existe o no con TRUE O FALSE

console.log(tweet.includes('con'));
console.log(tweet.includes('hola'));


