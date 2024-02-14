//   This

// Esta llamando al mismo objeto 

const reservacion = {
    nombre: 'Cuauhtemoc',
    apellido: 'Villalba',
    total: 5000,
    pagado: false,
    informacion: function(){
        console.log(`El cliente ${this.nombre} reservo y su cantidad a pagar es de $${this.total}`)
    }
}

reservacion.informacion()