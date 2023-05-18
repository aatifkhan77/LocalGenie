<?php
session_start();
include "./assets/partials/conn.php";
$sessionUsername = "";
$boolLoggedin = false;
if (isset($_SESSION) and isset($_SESSION["user"])) {
    $sessionUsername = $_SESSION["user"];
    $boolLoggedin = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Local Genie</title>
  
  <?php
    include "./assets/partials/links.php";
    ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "./assets/partials/navbar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <br><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local Genie</span></h2>
          <h6><span>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kya Hukum Mere Aakaa...</p>
            </span></h6>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="./userLogin.php" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-telephone"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Book an Appointment</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><!--<i class="bi bi-check2-circle"></i>--><i class="bi bi-journal-check"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Your Genie Confirmed</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-house-gear-fill"></i>
              </div>
              <h4 class="title"><a href="" class="stretched-link">Home Visit</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-check2-circle"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Job Done</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>We Are Local Genies, And We Can Provide Local Service Right At Your Doorstep in a relaxed state. We make it
            possible for customers to contact local service providers with just one click.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Local Genies At Your Doorstep On Just One Click</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Welcome to Local Genie, your one-stop solution for all your local service needs. Our website is designed
              to provide you with a seamless experience of finding the best service providers in your area at the click
              of a button </p>
            <p>The search for the Genii is over thanks to our
              website, which aims to include everyone who is necessary to ease our daily lives.
              The search for the Genii is over thanks to our
              website, which aims to include everyone who is necessary to ease our daily lives.
              We take pleasure in our dedication to offering you high-quality services, and our team puts out great
              effort to make sure that each and every service provider featured on our website is reliable, qualified,
              and experienced. Our website is user-friendly and simple to use, making it simpler for you to quickly and
              effectively identify the proper service provider.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Some of our most distinguishing qualities and traits.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Our goal is to make discovering dependable service providers
                  easy for you so you can pay attention to what really important. We appreciate that you choose Local
                  Genie, and we look forward to working with you.
                </li>
                <li><i class="bi bi-check-circle-fill"></i> We take pleasure in our dedication to offering you
                  high-quality services, and our team puts out great effort to make sure that each and every service
                  provider featured on our website is reliable, qualified, and experienced.
                </li>
                <li><i class="bi bi-check-circle-fill"></i> Finding dependable and effective service providers when you
                  need them most is important, as our staff at Local Genie is well aware of. No matter what kind of
                  service provider you require—a plumber, an electrician, a handyman, etc.—we have you covered.</li>
              </ul>
              <p>
              Below film demonstrating the operations and work environment at local genie.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="1032" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Happy Clients</strong> Used by a Vast Amount of Customers</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="1521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Genii</strong> A large number of genii are available.</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="853" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Hours Of Support</strong> 24x7 Customer Support</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Local genie allows you to take any service from local service providers who are genies for the customers,
          and these genei provide excellent service at your doorstep.
        </p>
        <a class="cta-btn" href="#">Book Genie</a>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>These are the current services provided by our excellent and talented genies at your doorstep at local
            genie.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Carpenter</li>
              <li data-filter=".filter-product">Electrician</li>
              <li data-filter=".filter-branding">Grocery</li>
              <li data-filter=".filter-books">Home</li>
              <li data-filter=".filter-books">Laundary</li>
              <li data-filter=".filter-books">Locksmith</li>
              <li data-filter=".filter-books">Mechanic</li>
              <li data-filter=".filter-books">Milkman</li>
              <li data-filter=".filter-books">Plumber</li>
            </ul><!-- End Our Services Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets\img2\carpenter2.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\carpenter2.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Carpenter</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets\img2\electrician1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\electrician1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Electrician</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets\img2\grocery1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\grocery1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Grocery</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets\img2\homedecor1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\homedecor1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Home Decor</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets\img2\laundary.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\laundary.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Laundary Services</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets\img2\locksmith1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\locksmith1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Locksmith</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End PortOur Servicesfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets\img2\mechanic1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\mechanic1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Mechanic</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets\img2\milkman1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\milkman1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Milkman</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets\img2\plumber1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img2\plumber1.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.php" title="More Details">Plumber</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Our Services Item -->

          </div><!-- End Our Services Container -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Here are Some Valuable Feedbacks From our Customers whom we have Served.</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jhonny Grey</h3>
                      <h4>Mumbai</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Akriti Prasad</h3>
                      <h4>Delhi</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Priyanka Sharma</h3>
                      <h4>Dheradun</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Bhaumik Solanki</h3>
                      <h4>Chandigarh</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Faisal Khan</h3>
                      <h4>Aligarh</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Top Ranked Genii</h2>
          <p>Here are some of our best genies, according to aakas, in terms of performance and rating.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <!-- <i class="bi bi-activity"></i> -->
                <i class="bi bi-person-circle"></i>
              </div>
              <h3>Genie 1</h3>
              <p><b>Occupation:</b> Carpenter</p>
              <p><b>Experience:</b> 10 Years</p>
              <p><b>Ratings:</b> 4.2</p>
              <a href="./profile.php" class="readmore stretched-link">Know more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="bi bi-broadcast"></i> -->
                <i class="bi bi-person-circle"></i>
              </div>
              <h3>Genie 2</h3>
              <p><b>Occupation:</b> Electrician</p>
              <p><b>Experience:</b> 8 Years</p>
              <p><b>Ratings:</b> 4.0</p>
              <a href="./profile.php" class="readmore stretched-link">Know more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="bi bi-easel"></i> -->
                <i class="bi bi-person-circle"></i>
              </div>
              <h3>Genie 3</h3>
              <p><b>Occupation:</b> Maid</p>
              <p><b>Experience:</b> 12 Years</p>
              <p><b>Ratings:</b> 4.5</p>
              <a href="./profile.php" class="readmore stretched-link">Know more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="bi bi-bounding-box-circles"></i> -->
                <i class="bi bi-person-circle"></i>
              </div>
              <h3>Genie 4</h3>
              <p><b>Occupation:</b> Mechanic</p>
              <p><b>Experience:</b> 5 Years</p>
              <p><b>Ratings:</b> 3.8</p>
              <a href="./profile.php" class="readmore stretched-link">Know more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="bi bi-calendar4-week"></i> -->
                <i class="bi bi-person-circle"></i>
              </div>
              <h3>Genie 5</h3>
              <p><b>Occupation:</b> Milkman</p>
              <p><b>Experience:</b> 15 Years</p>
              <p><b>Ratings:</b> 4.3</p>
              <a href="./profile.php" class="readmore stretched-link">Know more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="bi bi-chat-square-text"></i> -->
                <i class="bi bi-person-circle"></i>
              </div>
              <h3>Genie 6</h3>
              <p><b>Occupation:</b> Plumber</p>
              <p><b>Experience:</b> 10 Years</p>
              <p><b>Ratings:</b> 4.0</p>
              <a href="./profile.php" class="readmore stretched-link">Know more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>These are the key team members, and they are all incredibly talented and diligent.</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Mohd. Aatif Khan</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Mohd. Arman</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>Mohd. Faheem Ahmad</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Mohammad Ayan Khan</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis
            omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div> End Pricing Item -->
<!-- 
          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div> End Pricing Item 

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div> End Pricing Item 

        </div>

      </div>
    </section>End Pricing Section  -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
              These are some of our customers' frequently asked questions.
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                    gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                    eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                    Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                    Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
            accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div>
        -->          <!-- End post list item -->

          <!-- <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div>
        -->         <!-- End post list item -->

          <!-- <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div>
        -->
        <!-- End post list item -->

        <!-- </div>End recent posts list -->

      <!-- </div>
    </section>End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Feel Free to Reach Us out Anytime!!!</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p><a class="btn btn-accent" href="https://www.google.com/maps/place/Faculty+Of+Science/@27.9162126,78.0744983,346m/data=!3m1!1e3!4m19!1m12!4m11!1m3!2m2!1d78.0800451!2d27.9175138!1m6!1m2!1s0x3974a4e3a3e65407:0x7371ea89ad715304!2sDepartment+of+Computer+Engineering,+W38H%2B7WH+AMU+Campus,+Aligarh,+Uttar+Pradesh+202002!2m2!1d78.0798863!2d27.9157003!3m5!1s0x3974a4fd0031bfef:0xcfc5df68a8cb57b7!8m2!3d27.9164126!4d78.0739013!16s%2Fg%2F11cm3ps_p3" style="color: white; text-decoration:none;" target="_blank">Aligarh Muslim University , Uttar Pradesh 202001</a></p>

                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p><a href="mailto:contact@localgenie.com" style="color: white; text-decoration:none;">contact@localgenie.com</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p><a href="tel:+91 99999 00000" style="color: white; text-decoration:none;">+91 99999 00000</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 10AM - 7PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form id ="contactForm" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./assets/partials/footer.php"; ?>

  
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <?php include "./assets/partials/js.php"; ?>


</body>

<script src="./assets/js/contactus.js"></script>

</html>