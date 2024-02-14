// Promises

const usuarioAutenticado = new Promise( (resolve,reject) => {
    const auth = false;

    if(auth){
        resolve('Usuario Autenticado'); // El promise se cumple
    }else{
        reject('No se pudo iniciar sesion'); // El promise NO se cumple
    }
});

usuarioAutenticado.then( function (resultado){
    console.log(resultado)
}).catch(function(error){
    console.log(error);
})


// En los promises existen tres valores posibles

// Pending : No se ha cumplido pero no se ha rechazado. Esta en espera.
// Fulfilled: Ya se cumplio
// Rejected: Se ha rechazado o no se ha cumplido.

