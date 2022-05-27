function openSearch(){
    document.getElementById('my-search').style.display="block";
    document.body.classList.toggle('scroll-desactivate');
}

function closeSearch(){
    document.getElementById('my-search').style.display="none";
    document.body.classList.toggle('scroll-desactivate');
}

let openBtn = document.querySelector('.open-search');
let closeBtn = document.querySelector('.overlay__close-search');

if(openBtn){
    openBtn.addEventListener('click', ()=>{
        openSearch();
    });
}

if(closeBtn){
    closeBtn.addEventListener('click', ()=>{
        closeSearch();
    });
}