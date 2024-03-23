document.addEventListener('DOMContentLoaded', () => {

    eventListeners()
    darkMode();
})

function darkMode(){
    // Preferencia del sistema
    const prefernciaDArkMode = window.matchMedia('(prefers-color-scheme: dark)')

    if(prefernciaDArkMode.matches){
        document.body.classList.add('dark-mode')
    }else{
        document.body.classList.remove('dark-mode')
    }    

    prefernciaDArkMode.addEventListener('change',() => {
        if(prefernciaDArkMode.matches){
            document.body.classList.add('dark-mode')
        }else{
            document.body.classList.remove('dark-mode')
        }    
    })
    // Fin preferencias del sistema

    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click',() => {
        document.body.classList.toggle('dark-mode')
    })
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive)

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[ name="contacto[contacto]" ]');
    metodoContacto.forEach(input => input.addEventListener('click',mostrarMetodosContacto));
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function mostrarMetodosContacto(e){
    const contactoDiv = document.querySelector('#contacto');
    
    if(e.target.value === 'telefono'){
        contactoDiv.innerHTML = `
        <label for="telefono">Numero teléfono:</label>
        <input type="tel" id="telefono" placeholder="Tu telefono" name="contacto[telefono]">

        <p>Elija la fecha y la hora para la llamada</p>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="contacto[fecha]">

        <label for="hora">Hora:</label>
        <input id="hora" type="time" min="09:00" max="18:00" name="contacto[hora]">
        `
    }else{
        contactoDiv.innerHTML = `
        <label for="email">Email:</label>
        <input type="email" placeholder="Tu email" id="email" name="contacto[email]">
        `
    }
}