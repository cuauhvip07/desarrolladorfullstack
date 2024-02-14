// Notifiacion API

//     documento html  Llamado query    id del boton
const boton = document.querySelector('#boton')

boton.addEventListener('click', () => {
    Notification.requestPermission()
        .then(resultado => console.log(`El resultado es ${resultado}`))
})

if(Notification.permission == 'granted'){
    new Notification('Esta es una notificacion',{
        icon:'img/ccj.png',
        body: 'Cuauh probando'
    })
}