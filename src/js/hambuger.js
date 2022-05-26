const hamburger = document.querySelector('#hamburger'),
    menu = document.querySelector('#menu-mobile'),
    close = document.querySelector('#close-menu');

if(hamburger){
    hamburger.addEventListener('click', (e)=>{
        menu.classList.toggle('aside-desactivate');
    });

    close.addEventListener('click', (e)=>{
        menu.classList.toggle('aside-desactivate');
    });
}