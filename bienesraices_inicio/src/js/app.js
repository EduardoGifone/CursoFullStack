document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
    darkMode();
});

function eventListeners() {
    const mobileMenu = document.querySelector(".mobile-menu");
    mobileMenu.addEventListener("click", navegacionResponsive);
}; 

function navegacionResponsive(){
    const navegacion = document.querySelector(".navegacion");

    // if (navegacion.classList.contains('mostrar')) {
    //     navegacion.classList.remove('mostrar');
    // } else {
    //     navegacion.classList.add('mostrar');
    // }

    navegacion.classList.toggle("mostrar");
};

function darkMode() {

    const preferDarkMode = window.matchMedia("(prefers-color-scheme: dark)");


    if (preferDarkMode.matches) {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }

    preferDarkMode.addEventListener("change", () => {
        if (preferDarkMode.matches) {
            document.body.classList.add("dark-mode");
        } else {
            document.body.classList.remove("dark-mode");
        }
    });

    const botonDarkMode = document.querySelector(".dark-mode-boton");
    botonDarkMode.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode")
    })

}