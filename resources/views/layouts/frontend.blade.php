<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>EduKis</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/lindy-uikit.css"/>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

      <!-- ========================= header-6 start ========================= -->
    @include('layouts.front.header')

      <!-- ========================= header-6 end ========================= -->

      <!-- ========================= hero-5 start ========================= -->
     @include('layouts.front.hero5')
      <!-- ========================= hero-5 end ========================= -->

    </section>
    <!-- ========================= hero-section-wrapper-6 end ========================= -->

    <!-- ========================= feature style-5 start ========================= -->
    @include('layouts.front.fitur')
    <!-- ========================= feature style-5 end ========================= -->

    <!-- ========================= about style-4 start ========================= -->
   @include('layouts.front.about')
    <!-- ========================= about style-4 end ========================= -->
     
    <!-- ========================= contact-style-3 start ========================= -->
    <section id="contact" class="contact-section contact-style-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
            <div class="section-title text-center mb-50">
              <h3 class="mb-15">Get in touch</h3>
              <p>Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="contact-form-wrapper">
              <form action="" method="">
                <div class="row">
                  <div class="col-md-6">
                    <div class="single-input">
                      <input type="text" id="name" name="name" class="form-input" placeholder="Name">
                      <i class="lni lni-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-input">
                      <input type="email" id="email" name="email" class="form-input" placeholder="Email">
                      <i class="lni lni-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-input">
                      <input type="text" id="number" name="number" class="form-input" placeholder="Number">
                      <i class="lni lni-phone"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-input">
                      <input type="text" id="subject" name="subject" class="form-input" placeholder="Subject">
                      <i class="lni lni-text-format"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="single-input">
                      <textarea name="message" id="message" class="form-input" placeholder="Message" rows="6"></textarea>
                      <i class="lni lni-comments-alt"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-button">
                      <button type="submit" class="button"> <i class="lni lni-telegram-original"></i> Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>

          <div class="col-lg-4">
            <div class="left-wrapper">
              <div class="row">
                <div class="col-lg-12 col-md-6">
                  <div class="single-item">
                    <div class="icon">
                      <i class="lni lni-phone"></i>
                    </div>
                    <div class="text">
                      <p>0045939863784</p>
                      <p>+004389478327</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="single-item">
                    <div class="icon">
                      <i class="lni lni-envelope"></i>
                    </div>
                    <div class="text">
                      <p>yourmail@gmail.com</p>
                      <p>admin@yourwebsite.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="single-item">
                    <div class="icon">
                      <i class="lni lni-map-marker"></i>
                    </div>
                    <div class="text">
                      <p>John's House, 13/5 Road, Sidny United State Of America</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ========================= contact-style-3 end ========================= -->

    <!-- ========================= clients-logo start ========================= -->
    <!-- ========================= clients-logo end ========================= -->

    <!-- ========================= footer style-4 start ========================= -->
   @include('layouts.front.footer')
    <!-- ========================= footer style-4 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->
		

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap-5.0.0-beta1.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
