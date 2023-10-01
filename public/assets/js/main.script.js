/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav__menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')
 
/* Menu show */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}
 
/* Menu hidden */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== SCROLL SECTIONS ===============*/
const scrollHeader = () =>{
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll class to the header tag
    this.scrollY >= 104 ? header.classList.add('scroll') 
                       : header.classList.remove('scroll')
}
window.addEventListener('scroll', scrollHeader)
