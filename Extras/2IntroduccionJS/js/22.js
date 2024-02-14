//   Estructuras de control 


//  if

const puntuaje = 1000;

if(puntuaje == 1000){
    console.log("Si el puntuaje es 1000")
}
else{
    console.log("No es igual")
}

// Else

const efectivo = 1000;
const carrito = 800;

if (efectivo > carrito){
    console.log("El usuario puede pagar")
}
else{
    console.log("Fondos Insuficientes")
}


// ELSE IF

const rol = 'ADMINISTRADOR'

if (rol == 'ADMINISTRADOR'){
    console.log("Accedo a todo el sistema")
}
else if(rol == 'EDITOR'){
    console.log('Puedes entrar pero no puedes hacer mucho')
}
else{
    console.log('No tienes acceso')
}