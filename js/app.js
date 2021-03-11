let hamburger = document.querySelector('.hamburger');
let nav = document.querySelector('.nav-link');
hamburger.addEventListener('click',()=>
{
 
    nav.classList.toggle('nav-active');
    hamburger.classList.toggle('cross');
})