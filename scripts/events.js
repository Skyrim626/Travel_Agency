

/** Navbar Scroll Event */


/** Hamburger Click Event */
/* const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-link');

hamburger.addEventListener((event) => {
    console.log("test");
    navLinks.classList.add('active');

},); */


/** Accordions */
const accordions = document.getElementsByClassName("accordion__box-content");

console.log(accordions);

for(let i = 0; i < accordions.length; i++) {

    console.log(accordions[i]);

    accordions[i].addEventListener('click', () => {
        
        accordions[i].classList.toggle('active');

    });
}
