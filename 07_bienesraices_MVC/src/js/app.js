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
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}