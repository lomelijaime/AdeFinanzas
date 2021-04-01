//Función para mostrar menu de navegación móvil
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    burger.addEventListener('click', () => {
        //Intercambia la clase
        nav.classList.toggle('nav-active');
        
        //Animacion a los links
        navLinks.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });
        //Animacion hamburguesa/menu
        burger.classList.toggle('toggle');
    });
}

navSlide();