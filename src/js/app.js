document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    darkMode();
});

function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: light)');
    //console.log(prefiereDarkMode.matches);
    if (prefiereDarkMode) {
        document.body.classList.remove('dark-mode');
    } else {
        document.body.classList.add('dark-mode');
    }
    //cambio del SO
    /*  prefiereDarkMode.addEventListener('change', function () {
         if (prefiereDarkMode) {
             document.body.classList.add('dark-mode');
         } else {
             document.body.classList.remove('dark-mode');
         }
     });
  */
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    })
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);

};

function navegacionResponsive() {
    console.log("funcionando log responsive")
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
    // si tiene quita si no agrega 

}