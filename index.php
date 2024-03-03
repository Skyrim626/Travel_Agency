<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- CDJSN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
      <?php include "styles/utilities.css" ?>
      <?php include "styles/main.css" ?>
      <?php include "styles/index.css" ?>
      <?php include "styles/animation.css" ?>
  </style>

  
      <!--Scripts -->
      <script src="scripts/events.js" defer></script>

</head>
<body>
    
    <!-- Header -->
    <?php
      include("components/header.component.php");
    ?>

    <main>

      <!-- Hero Section -->
     <section class="hero-section">
        <div class="container p-3">
          <div class="hero__content w-75 text-primary-800 my-auto">
            <h1 class="fw-600">The whole world waits for you.</h1>
            <p class="mt-3">Let's start your journey with us, your dream will come true</p>
            <button class="btn btn-primary mt-3">Get Started</button>
          </div>
        </div>
     </section>

     <!-- Travel Section -->
     <section class="travel-section">
      <div class="container p-3 | d-flex-md align-items-center justify-content-center gap-3">
        <p class="travel-section__text">Where you want to go?</p>

        <form action="" method="post" class="travel-section__form | d-flex flex-column-xs flex-row-md mt-2-xs mt-0-sm gap-1">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Where to go?" name="destination">
          </div>

          <div class="input-group">
            <input type="text" class="form-control" placeholder="Date" name="date">
          </div>

          <div class="input-group">
            <input type="text" class="form-control" placeholder="Travel Type" name="travelType">
          </div>

          <button type="submit" class="btn btn-primary">Search</button>
        </form>

      </div>
     </section>

     <!-- Feature Section -->
     <section class="feature-section p-3">
        <div class="container p-1 mx-auto text-center">
          <h2 class="h2 text-center text-secondary-700 fw-500 mt-3">Best Packages In This Weeks</h2>

          <!-- Button Group -->
          <ul class="btn-group | d-flex gap-1 mt-4 mx-auto  justify-content-space-between">
            <li><button class="btn btn-secondary">Hot Deals</button></li>
            <li><button class="btn btn-secondary">Backpack</button></li>
            <li><button class="btn btn-secondary">South Asia</button></li>
            <li><button class="btn btn-secondary">Honeymoon</button></li>
            <li><button class="btn btn-secondary">Europe</button></li>
            <li><button class="btn btn-secondary">More</button></li>
          </ul>

          <div class="cards p-3 mt-4 ">
            
            <div class="card ">
              <div class="card__wrapper-image">
                <img src="images/card-1.jpg" alt="" class="card__img">
              </div>
              <div class="card__body">
                <div class="card__content-group">
                  <p class="card__visit-duration">
                    3 Days, 2 nights
                  </p>
                  <p class="card__text card__pricing">$500/Person</p>
                </div>

                <p class="card__paragraph">
                Explore the Beauty of the Island for 3 days and 2 nights with our travel agency.
                </p>

                <div class="card__content-group">
                  <p class="card__location"><i class="fa-solid fa-location-dot"></i> Indonesia</p>
                  <a href="" class="card__link animation-underline">Know More</a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card__wrapper-image">
                <img src="images/card-2.jpg" alt="" class="card__img">
              </div>
              <div class="card__body">
                <div class="card__content-group">
                  <p class="card__visit-duration">
                    3 Days, 2 nights
                  </p>
                  <p class="card__text card__pricing">$500/Person</p>
                </div>

                <p class="card__paragraph">
                Enjoy the Shrimes and blossoms here in this beautiful country
                </p>

                <div class="card__content-group">
                  <p class="card__location"><i class="fa-solid fa-location-dot"></i> Indonesia</p>
                  <a href="" class="card__link animation-underline">Know More</a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card__wrapper-image">
                <img src="images/card-3.jpg" alt="" class="card__img">
              </div>
              <div class="card__body">
                <div class="card__content-group">
                  <p class="card__visit-duration">
                    3 Days, 2 nights
                  </p>
                  <p class="card__text card__pricing">$500/Person</p>
                </div>

                <p class="card__paragraph">
                Explore the majestic mountains and landscapes day and night
                </p>

                <div class="card__content-group">
                  <p class="card__location"><i class="fa-solid fa-location-dot"></i> Indonesia</p>
                  <a href="" class="card__link animation-underline">Know More</a>
                </div>
              </div>
            </div>

          </div>

          <button class="btn btn-primary">Summary View</button>

        </div>
     </section>

     <!-- Services Section -->
     <section class="services-section p-3">
      <div class="container">
        <h2 class="h2 text-center text-secondary-700">Our Services</h2>
        <p class="text-center text-secondary-700 mb-3">We help our clients throughout the trip</p>

        <div class="feature-wrapper | d-flex flex-wrap justify-content-space-between gap-2">
          <div class="feature-container">
            <div class="feature-icon-container">
            <i class="fa-solid fa-map-location-dot"></i>
            </div>
            <h4 class="h4">Destination</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo itaque error, labore sequi pariatur est repellat tenetur provident neque numquam voluptatem quam ipsum dignissimos veritatis facilis porro iste eos soluta?</p>
          </div>

          <div class="feature-container">
            <div class="feature-icon-container">
            <i class="fa-solid fa-earth-asia"></i>
            </div>
            <h4 class="h4">Tours</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo itaque error, labore sequi pariatur est repellat tenetur provident neque numquam voluptatem quam ipsum dignissimos veritatis facilis porro iste eos soluta?</p>
          </div>

          <div class="feature-container">
            <div class="feature-icon-container">
            <i class="fa-solid fa-hotel"></i>
            </div>
            <h4 class="h4">Luxury Hotel</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing eli</p>
          </div>

          <div class="feature-container">
            <div class="feature-icon-container">
            <i class="fa-solid fa-handshake-angle"></i>
            </div>
            <h4 class="h4">Assistance</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo itaque error, labore sequi pariatur est repellat tenetur provident neque numquam voluptatem quam ipsum dignissimos veritatis facilis porro iste eos soluta?</p>
          </div>
        </div>

      </div>
     </section>

     <!-- Album Section -->
     <section class="destination-section p-3">
      <div class="container">
        <h2 class="h2 text-center text-secondary-700">Our Destination</h2>
        <p class="text-center text-secondary-700">Choose Your Next Destination</p>

        <div class="cards cards-image-only mt-2">
          <div class="card">
            <div class="card__wrapper-image">
              <img src="images/album-1.jpg" alt="" class="card__img">
            </div>
            <div class="card__card-image-content-group">
              <h4 class="h4">Hello</h4>
              <p>Hello World</p>
            </div>
          </div>
          <div class="card">
          <div class="card__wrapper-image">
              <img src="images/album-2.jpg" alt="" class="card__img">
            </div>
            <div class="card__card-image-content-group">
              <h4 class="h4">Hello</h4>
              <p>Hello World</p>
            </div>
          </div>
          <div class="card">
          <div class="card__wrapper-image">
              <img src="images/album-3.jpg" alt="" class="card__img">
            </div>
            <div class="card__card-image-content-group">
              <h4 class="h4">Hello</h4>
              <p>Hello World</p>
            </div>
          </div>
          <div class="card">
          <div class="card__wrapper-image">
              <img src="images/album-4.jpg" alt="" class="card__img">
            </div>
            <div class="card__card-image-content-group">
              <h4 class="h4">Hello</h4>
              <p>Hello World</p>
            </div>
          </div>
          <div class="card">
          <div class="card__wrapper-image">
              <img src="images/album-5.jpg" alt="" class="card__img">
            </div>
            <div class="card__card-image-content-group">
              <h4 class="h4">Hello</h4>
              <p>Hello World</p>
            </div>
          </div>
          <div class="card">
          <div class="card__wrapper-image">
              <img src="images/album-6.jpg" alt="" class="card__img">
            </div>
            <div class="card__card-image-content-group">
              <h4 class="h4">Hello</h4>
              <p>Hello World</p>
            </div>
          </div>
        </div>
      </div>
     </section>

    <!-- About Us -->
    <section class="about-us-section p-3 mt-5">
      <div class="container d-flex gap-2">
        <div class="about__about-text | d-flex flex-column gap-3 justify-content-center">
          <h2 class="h2">About Us</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea optio earum animi distinctio nobis illum molestias nam delectus! Facere velit molestias tempore voluptas adipisci, labore porro ipsum necessitatibus debitis maiores?</p>
          <a href="" class="about-us__about-us-link | animation-underline">Know more about us</a>
        </div>
        <img src="images/about-us.jpg" alt="" class="about__about-image | d-none d-block-md">
      </div>
    </section>

    <!-- Testimony Section -->
    <section class="testimony-section p-3">
       <div class="container">
        <div class="slider-wrapper">
          <div class="slider">
            <div class="slide">
              <div class="slide-image-wrapper">
                <img class="slide-1" src="images/carousel-1.jpg" alt="" id="slide-1">
              </div>
              <div class="slide-content-container">
                
              </div>
            </div>

            <div class="slide">
              <img class="slide-2" src="images/carousel-2.jpg" alt="" id="slide-2">
            </div>

            <div class="slide">
              <img class="slide-3" src="images/carousel-3.jpg" alt="" id="slide-3">
            </div>
           
            <!-- <img class="slide-1" src="images/carousel-1.jpg" alt="" id="slide-1">
            <img class="slide-2" src="images/carousel-2.jpg" alt="" id="slide-2">
            <img class="slide-3" src="images/carousel-3.jpg" alt="" id="slide-3"> -->
          </div>
          <div class="slider-nav">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>
          </div>
        </div>
       </div>
    </section>


     <!-- FAQ Section -->
     <section class="faq-section">

        <div class="container p-5">

          <h2 class="h2 text-center">Frequently Asked Question</h2>

          <div class="accordions mt-3">

            <div class="accordion">
              <div class="accordion__box-content active">
                <div class="accordion__label">List One</div>
                <div class="accordion__content">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam ipsam eligendi optio voluptatibus asperiores! Aut, similique. Nobis provident consequuntur tenetur expedita vero aliquam pariatur mollitia rerum et. Fugiat, distinctio asperiores.</p>
                </div>
              </div>
            </div>

            <div class="accordion">
              <div class="accordion__box-content">
                <div class="accordion__label">List Two</div>
                <div class="accordion__content">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam ipsam eligendi optio voluptatibus asperiores! Aut, similique. Nobis provident consequuntur tenetur expedita vero aliquam pariatur mollitia rerum et. Fugiat, distinctio asperiores.</p>
                </div>
              </div>
            </div>

            <div class="accordion">
              <div class="accordion__box-content">
                <div class="accordion__label">List Three</div>
                <div class="accordion__content">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam ipsam eligendi optio voluptatibus asperiores! Aut, similique. Nobis provident consequuntur tenetur expedita vero aliquam pariatur mollitia rerum et. Fugiat, distinctio asperiores.</p>
                </div>
              </div>
            </div>

            <div class="accordion">
              <div class="accordion__box-content">
                <div class="accordion__label">List Four</div>
                <div class="accordion__content">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam ipsam eligendi optio voluptatibus asperiores! Aut, similique. Nobis provident consequuntur tenetur expedita vero aliquam pariatur mollitia rerum et. Fugiat, distinctio asperiores.</p>
                </div>
              </div>
            </div>

          </div>

        </div>

     </section>

     <!-- App Section -->
     <section class="app-section p-5">
        <div class="container">
          <div class="travel-content-wrapper | d-flex flex-column gap-3">
            <h3 class="h3">Your all-in-one travel app.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, consequuntur dicta harum excepturi possimus doloribus officiis ipsam ea totam sint, aliquid, recusandae odio doloremque nobis enim! Fuga debitis sapiente ipsum!</p>
            <div class="btn-group">
              <button class="btn btn-secondary">Lorem</button>
              <button class="btn btn-secondary">Ipsum</button>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae perspiciatis soluta unde.</p>
            <form action="" method="post" class="newsletter">
              
              <div class="newsletter-group">
                <input type="text" placeholder="Email" name="name">
                <button class="btn btn-secondary">Subscribe</button>
              </div>

            </form>
          </div>
          <div class="button-app-wrapper">
            <button class="button__app">
              <img src="images/apple-store.png" alt="">
            </button>
            <button class="button__app">
              <img src="images/google-play.png" alt="">
            </button>
          </div>
        </div>
     </section>

    </main>

    <footer>
      <div class="container p-3 pt-5-md">
        <div class="footer-link-wrapper">
          <a href="#" class="footer-home-link text-center">Travel Agency</a>
          <ul role="list" class="footer-links">
            <div class="list-group">
              <li><a href="#" class="animation-underline ">Home</a></li>
              <li><a href="#" class="animation-underline ">Feature</a></li>
              <li><a href="#" class="animation-underline ">Services</a></li>
              <li><a href="#" class="animation-underline ">Travel</a></li>
            </div>

            <div class="list-group">
              <li><a href="#" class="animation-underline ">Places</a></li>
              <li><a href="#" class="animation-underline ">FAQ</a></li>
              <li><a href="#" class="animation-underline ">Terms & Conditions</a></li>
            </div>

            <div class="list-group">
              <li><a href="#" class="animation-underline ">About Us</a></li>
              <li><a href="#" class="animation-underline ">Testimony</a></li>
              <li><a href="#" class="animation-underline ">Newsletter</a></li>
            </div>

            <div class="list-group">
            <li><a href="#" class="animation-underline ">Location</a></li>
            <li><a href="#" class="animation-underline ">Packages</a></li>
            <li><a href="#" class="animation-underline ">Sign Up</a></li>
            </div>
          </ul>
        </div>

        <div class="copyright-wrapper mt-3">
          <p>&copy; Copyright. All rights reserved.</p>
       
            <ul role="list" class="social-media-icon-links">
              <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
            </ul>
         
        </div>

      </div>
    </footer>


</body>
</html>