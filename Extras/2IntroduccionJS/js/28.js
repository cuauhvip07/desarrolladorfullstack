//  Clases

class Producto{

    constructor(nombre,precio){
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto(){
        return `El producto ${this.nombre} tiene un precio de $${this.precio}`;
    }

}

const producto = new Producto("Monitor curvo 49 pulgadas",300),
    producto2 = new Producto('Laptop',800);


console.log(producto)
console.log(producto2)
console.log(producto.formatearProducto())

// Extends  Herencia 

class Libro extends Producto{
    constructor(nombre,precio,isbn){
        super(nombre,precio);     //SUPER  llamar a la herencia del padre
        this.isbn = isbn;
    }

    formatearProducto(){
        return `${super.formatearProducto()} y su ISBN es ${this.isbn}`
    }
}

const libro = new Libro('JavaScript la revolucion', 200,'239874972')
console.log(libro.formatearProducto())
