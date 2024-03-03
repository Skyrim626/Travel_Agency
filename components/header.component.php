<header class="navbar">
      <div class="container p-3 d-flex justify-content-space-between align-items-center">
        <a href="#" class="navbar__logo">Travel Agency</a>
        <div class="hamburger" data-hamburger>
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
        </div>

        <ul role="list" class="nav-link">
          <li><a href="#" class="animation-underline">Home</a></li>
          <li><a href="#" class="animation-underline">Service</a></li>
          <li><a href="#" class="animation-underline">Packages</a></li>
          <li><a href="#" class="animation-underline">About</a></li>
          <li><a href="signUp.php" class="animation-underline">Sign Up</a></li>
          <li><a href="login.php" class="animation-underline">Login</a></li>
          <li><a href="test.php" class="animation-underline">Test Data</a></li>
        </ul>
      </div>
</header>



<style>

  @import url("../utilities.css");

/* Header */

.navbar {
    position: fixed;
    background: var(--clr-secondary-800);
    width: 100%;
    z-index: 9999;
}

.navbar__logo {
    font-size: var(--fs-500);
    letter-spacing: 2px;
    color: var(--clr-primary-900);
    transition: 200ms;
}

.navbar__logo:hover {
    color: var(--clr-accent-200);
}

.nav-link  {
  display: none;
  width: 0;
}

.nav-link.active {
  background: var(--clr-secondary-800);
  position: absolute;
  right: 0;
  top: 0;
  height: 100vh;
  width: 250px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 3rem;
  padding: 1.5rem;
  transition: width 500ms ease;
}

.nav-link  li > * {
  color: var(--clr-primary-700);
}

/* Hamburger Styling */
.hamburger {
    width: 60px;
    height: 50px;
    /* background: gray; */
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    cursor: pointer;
    padding: 0.75rem;
    border: 1px solid var(--clr-secondary-600);
    border-radius: 3px;
    transition: 200ms;
    z-index: 999;
}

.hamburger > * {
    width: 100%;
    height: 3px;
    background: var(--clr-primary-900);
    border-radius: 7px;
    transition: 200ms;
 
}

.hamburger:hover {
    border: 1px solid var(--clr-accent-200);
}

.hamburger:hover > * {
    background: var(--clr-accent-200);
}

.animation-underline::after {
  background: var(--clr-accent-100);
}

/** Medium Width  */
@media (width > 768px) {

  .hamburger {
    display: none;
  }

  .nav-link  {
    display: flex;
    gap: 2rem;
    justify-content: space-between;
    align-items: center;
    width: auto;
  }

}


</style>

<script defer>
  /** Hamburger Click Event */
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-link');

hamburger.addEventListener('click', (event) => {

    if(navLinks.classList.contains("active")) {
      navLinks.classList.remove('active');
    }

    else {
      navLinks.classList.add('active');
    }

});
</script>