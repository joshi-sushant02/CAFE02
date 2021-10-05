window.onload = function(){
    const navToggleMobile = document.querySelector('.nav-bar-toggle');
    const navbar = document.querySelector('.show');
    const dropMenu = document.querySelector('.drop-menu')
    
    navToggleMobile.addEventListener('click', function(){
        navbar.classList.toggle('expand');
        dropMenu.classList.toggle('drop-it');
       
    });
    }