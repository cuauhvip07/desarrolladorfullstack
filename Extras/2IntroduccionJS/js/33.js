//  Fetch API

async function obtenerEmpleados(){
    const archivo = 'empleados.json'
    // fetch(archivo)
    //     .then(resultado => resultado.json())
    //     .then(datos =>{
    //         // console.log(datos)

    //         const { empleados } = datos    //Aplicando destructuring
    //         // console.log(empleados)

    //         empleados.forEach(empleado =>{
    //             console.log(empleado)
    //         })
    //     })

    const resultado = await fetch(archivo)
    const datos = await resultado.json()
    console.log(datos)    // Da el mismo resultado que el de arriba 
}

obtenerEmpleados()

