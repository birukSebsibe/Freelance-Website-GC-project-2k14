@extends('layouts/main_layout')
@include('layouts.main_navbar')
@section('content')
@section('title', 'Mesob')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Find your best Partner</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Forget the old rules. You can have the best people.
          Right now. Right here.</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="{{url('freelancer/login')}}"
              class="mx-3 btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Find Work</span> </a>

            <a href="{{url('client/login')}}"
              class="btn-get-start scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Find Talent</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src={{"front_end/assets/img/blog-recent-5.png"}} class="img-fluid" alt="">
      </div>
    </div>
  </div>


</section><!-- End Hero -->
<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>Trusted by</p>
    </header>

    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-1.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-2.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-3.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-4.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-5.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-6.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-7.png"}} class="img-fluid" alt="">
        </div>
        <div class="swiper-slide"><img src={{"front_end/assets/img/clients/client-8.png"}} class="img-fluid" alt="">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</section><!-- End Clients Section -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">


      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>For Clients</h2>
        <p>Find talent your way</p>
      </header>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src={{"front_end/assets/img/0x0.jpg"}} class="img-fluid" alt="">
            <h3>Post a Job and hire a pro</h3>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src={{"front_end/assets/img/b.jpg"}} class="img-fluid" alt="">
            <h3>Browse and Buy Projects</h3>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <img src={{"front_end/assets/img/chose.jpg"}} class="img-fluid" alt="">
            <h3>Choose talent you like</h3>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="10232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="5021" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="113463" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Working Hours</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="10050" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Freelancers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Features</h2>
        <p>Why businesses turn to Mesob</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src={{"front_end/assets/img/i.jpg"}} class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Quality Work</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>No cost until you hire</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Safe and Secure </h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Trusted by leading brands</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Fast Service</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>A wide variety of choices</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

      <!-- ======= Values Section ======= -->
      <section id="values" class="values">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>For Talent</h2>
            <p>Find great work</p>
          </header>

          <div class="row">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src={{"front_end/assets/img/images (1).jpg"}} class="img-fluid" alt="">
                <h3>Find opportunities for every stage of your freelance career</h3>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <img src={{"front_end/assets/img/s.png"}} class="img-fluid" alt="">
                <h3>Control when, where, and how you work</h3>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
              <div class="box">
                <img src={{"front_end/assets/img/2.jpg"}} class="img-fluid" alt="">
                <h3>Explore different ways to earn</h3>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Values Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Services</h2>
            <p>Browse talent by category</p>
          </header>

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3>Design & Creative</h3>
                <p>Graphic Design</p>
                <p>Video Design</p>
                <p>Logo Design</p>
                <p>Image Editing....</p>

              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-box orange">
                <i class="ri-discuss-line icon"></i>
                <h3>Sales & Marketing</h3>
                <p>Social Media Marketing
                <p>
                <p>Digital Marketing</p>
                <p>Public Relations</p>
                <p>Content Strategy....</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-box green">
                <i class="ri-discuss-line icon"></i>
                <h3>Writing & Translation</h3>
                <p>Editing & Proofreading</p>
                <p>Content Writing</p>
                <p>Technical Writing</p>
                <p>Writing Tutorials....</p>

              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-box red">
                <i class="ri-discuss-line icon"></i>
                <h3>Admin & Customer Support</h3>
                <p>Data Entry</p>
                <p>Transcription</p>
                <p>Tech Support</p>
                <p>IT Support....</p>

              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-box purple">
                <i class="ri-discuss-line icon"></i>
                <h3>Finance & Accounting</h3>
                <p>Accounting</p>
                <p>Recruiting</p>
                <p>Bookkeeping</p>
                <p>Business Analysis....</p>

              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
              <div class="service-box pink">
                <i class="ri-discuss-line icon"></i>
                <h3>Engineering & Architecture</h3>
                <p>CAD</p>
                <p>Interior Design</p>
                <p>Mathematics</p>
                <p>Chemistry....</p>

              </div>
            </div>

          </div>

        </div>

      </section><!-- End Services Section -->


      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Testimonials</h2>
            <p>What they are saying about us</p>
          </header>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Mesob enables us to differentiate ourselves from our competitors and produce content at higher
                    caliber.
                  </p>
                  <div class="profile mt-auto">
                    <img src={{"front_end/assets/img/testimonials/testimonials-1.jpg"}} class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Nasdaq Ceo &amp; Founder</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    One of the advantages of utilizing freelancers is finding talent with different skills quickly as
                    our needs change.
                  </p>
                  <div class="profile mt-auto">
                    <img src={{"front_end/assets/img/testimonials/testimonials-2.jpg"}} class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Microsoft Designer</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    I don't think business would have grown as fast or as well if not for the freelancers' expertise and
                    ability to adapt.
                  </p>
                  <div class="profile mt-auto">
                    <img src={{"front_end/assets/img/testimonials/testimonials-3.jpg"}} class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->





            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- End Testimonials Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Team</h2>
            <p>Our hard working team</p>
          </header>

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src={{"front_end/assets/img/team/team-1.jpg"}} class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                    exercitationem iure minima enim corporis et voluptate.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src={{"front_end/assets/img/team/team-2.jpg"}} class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Sara Jhonson</h4>
                  <span>Chief social executive</span>
                  <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                    exercitationem iure minima enim corporis et voluptate.</p>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <div class="member-img">
                  <img src={{"front_end/assets/img/team/team-3.jpg"}} class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut
                    architecto porro aspernatur molestiae modi.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
              <div class="member">
                <div class="member-img">
                  <img src={{"front_end/assets/img/team/team-4.jpg"}} class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid
                    doloremque ut possimus ipsum officia.</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Team Section -->




      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </header>

          <div class="row gy-4">

            <div class="col-lg-6">

              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@example.com<br>contact@example.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                  </div>

                </div>
              </form>

            </div>

          </div>

        </div>

      </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection