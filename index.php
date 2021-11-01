<?php
require_once('config/connect.php');
require_once('functions/functions.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>MICHAEL'S PORTFOLIO SITE</title>
  <meta name="description" content="<?= 'Software developer portfolio site' ?>">
  <!-- <meta property='og:title' content="PORTFOLIO SITE"> -->
  <meta property='og:url' content="https://techac.net/tap">
  <meta property='og:image' itemprop="image" content="https://techac.net/tatb/assets/images/mike.jpg">
  <meta property='keywords' content="Orji Michael, Michael, Chukwuebuka, Tech Acoustic, TAP, Tech Portfolio, Tech, Science, Computers">
  <meta name="author" content="Orji Michael Chukwuebuka at Tech Acoustic">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/unicons.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">

  <!-- MAIN STYLE -->
  <link rel="stylesheet" href="css/tooplate-style.css">

  <!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
</head>

<body>

  <!-- MENU -->
  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#about"><i class='uil uil-user'></i> Michael</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
          </li>
          <li class="nav-item">
            <a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
          </li>
          <li class="nav-item">
            <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
          </li>
          <li class="nav-item">
            <a target="_blank" href="https://techac.net/tatb/" class="nav-link"><span data-hover="Blog">Blog</span></a>
          </li>
        </ul>

        <ul class="navbar-nav ml-lg-auto">
          <div class="ml-lg-4">
            <div class="color-mode d-lg-flex justify-content-center align-items-center">
              <i class="color-mode-icon"></i>
              Color mode
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ABOUT -->
  <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
          <div class="about-text">
            <small class="small-text">Welcome to <span class="mobile-block">My Portfolio Website!</span></small>
            <h1 class="animated animated-text">
              <span class="mr-2">Hey folks, I'm</span>
              <div class="animated-info">
                <span class="animated-item">Orji Michael</span>
                <span class="animated-item">a Programmer</span>
                <span class="animated-item">Full Stack</span>
              </div>
            </h1>

            <p>Building a successful product is a challenge. I'm an energetic individual and you can trust me with the task.</p>

            <div class="custom-btn-group mt-4">
              <a href="assets/Michaels_CV.pdf" class="btn mr-lg-2 custom-btn" download><i class='uil uil-file-alt'></i> Download Resume</a>
              <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 col-12">
          <div class="about-image svg">
            <img src="images/undraw/undraw_programming_-2-svr.svg" class="img-fluid" alt="svg image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section class="project py-5" id="project">
    <div class="container">

      <div class="row">
        <div class="col-lg-11 text-center mx-auto col-12">

          <div class="col-lg-8 mx-auto mb-5">
            <h2>Things I have developed</h2>
          </div>

          <div class="owl-carousel owl-theme">

            <!-- item start -->
            <div class="item">

              <div class="project-info">
                <a target="_blank" href="https://techac.net/tatb/">
                  <img src="images/project/techblog.png" class="img-fluid" alt="project image"></a>
              </div>
              <h3 class="mt-5 mb-5">Tech Blog</h3>
            </div>
            <!-- end of item -->

            <!-- item start -->
            <div class="item">

              <div class="project-info">
                <a target="_blank" href="https://techac.net/apps.php">
                  <img src="images/project/currency.png" class="img-fluid" alt="project image">
                </a>
              </div>
              <h3 class="mt-5 mb-5">Android Currency Converter</h3>
            </div>
            <!-- end of item -->

            <!-- item start -->
            <div class="item">

              <div class="project-info">
                <a target="_blank" href="https://techac.net/apps.php">
                  <img src="images/project/list.png" class="img-fluid" alt="project image">
                </a>
              </div>
              <h3 class=" mb-5">Android List App</h3>
            </div>
            <!-- end of item -->

            <!-- item start -->
            <div class="item">

              <div class="project-info">
                <a target="_blank" href="https://techac.net/">
                  <img src="images/project/landing.png" class="img-fluid" alt="project image">
                </a>
              </div>
              <h3 class="mt-5 mb-5">Landing Page</h3>
            </div>
            <!-- end of item -->

            <!-- item start -->
            <div class="item">

              <div class="project-info">
                <a target="_blank" href="https://techac.net/tatb/">
                  <img src="images/project/admincms.png" class="img-fluid" alt="project image">
                </a>
              </div>
              <h3 class="mt-5 mb-5">Admin Content Management System</h3>
            </div>
            <!-- end of item -->

            <!-- item start -->
            <!-- <div class="item">
              <div class="project-info">
                <img src="images/project/gpcalculator.png" class="img-fluid" alt="project image">
              </div>
              <h3 class="mt-5 mb-5">Desktop GPA Calculator</h3>
            </div> -->
            <!-- end of item -->

          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-12">
          <h2 class="mb-4">Experiences</h2>

          <div class="timeline">
            <!-- <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2019</span>
              </div>
              <div class="timeline-info">
                <h3><span>Project Manager</span><small>Best Studio</small></h3>
                <p>Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac
                  fermentum nunc, a faucibus nunc.</p>
              </div>
            </div> -->

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2021</span>
              </div>
              <div class="timeline-info">
                <h3><span>Computer Engineering Internship</span><small>iPlan Tech</small></h3>
                <p>Learnt multiple skills including identifying parts of a computer and replacing/fixing them if
                  necessary; installing and troubleshooting vast amounts of computer software, including operating
                  systems; top notch customer service and how to have great customer relationships; marketing skills,
                  secrets and strategies of the computer trade.
                </p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2020</span>
              </div>
              <div class="timeline-info">
                <h3><span>Creative Writing and Tutoring</h3>
                <p>Educated my followers on Computer Engineering topics, using a blog and my social media accounts and
                  also
                  Tutored many people in programming.</p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2018</span>
              </div>
              <div class="timeline-info">
                <h3><span>Fullstack Developer</h3>
                <p>Built numerous software, both frontend and backend. Including desktop apps, android apps, and
                  numerous websites.
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6 col-12">
          <h2 class="mb-4 mobile-mt-2">Educations and Skills</h2>

          <div class="timeline">
            <!-- 
            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2021</span>
              </div>
              <div class="timeline-info">
                <h3><span>Creative Writing</span><small>Blog</small></h3>
                <p>I've made multiple articles that feature mainly on my blog and social media accounts 
                </p>
              </div>
            </div> -->

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2020</span>
              </div>
              <div class="timeline-info">
                <h3><span>Web Development</span><small>Aptech, Enugu</small></h3>
                <p>Learnt multiple web development skills, including HTML, CSS, JavaScript, PHP & MySQL
                </p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2019</span>
              </div>
              <div class="timeline-info">
                <h3><span>Android App Development</span><small>Android Studio</small></h3>
                <p>Learnt how to build android apps with Android Studio through Multiple resources, most especially
                  Google Docs, then built two android apps with it.
                </p>
              </div>
            </div>


            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2019</span>
              </div>
              <div class="timeline-info">
                <h3><span>Java</span><small>Mosh Hamedani</small></h3>
                <p>Learnt the fundamentals of the java programming language under a famous youtube instructor named Mosh
                  Hamedani.
                </p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2019</span>
              </div>
              <div class="timeline-info">
                <h3><span>Wxwidgets</span><small>Cross Platform GUI programming with Wxwidgets by Julian Smart</small>
                </h3>
                <p>Studied wxwidgets with above referenced material and built a GPA calculator for windows desktop.</p>
              </div>
            </div>

            <div class="timeline-wrapper">
              <div class="timeline-yr">
                <span>2018</span>
              </div>
              <div class="timeline-info">
                <h3><span>C++</span><small>Bucky Roberts</small></h3>
                <p>Learnt the basics of C++ under a Youtube instructor named Bucky Roberts.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact py-5" id="contact">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mr-lg-5 col-12">
          <div class="google-map w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6083840310416!2d7.494222214193177!3d6.444302025868234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3dbea3b2385%3A0x97867626bbc4b628!2sNnamdi%20Azikiwe%20Stadium!5e0!3m2!1sen!2sng!4v1635665744939!5m2!1sen!2sng" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
            <div class="contact-info-item">
              <h3 class="mb-3 text-white">Say hello</h3>
              <p class="footer-text mb-0">
                <a href="tel:+234 81 488 638 71"><i class="fa fa-phone-alt"></i> +234 81 488 638 71</a>
              </p>
              <p><a href="mailto:orjimichael4886@gmail.com">Orjimichael4886@gmail.com</a></p>
            </div>

            <ul class="social-links">
              <li><a href="#" class="fab fa-github m-3" data-toggle="tooltip" data-placement="left" title="Github"></a>
              </li>
              <li><a href="https://twitter.com/Michelson_Java" class="fab fa-twitter m-3" data-toggle="tooltip" data-placement="left" title="Twitter"></a></li>
              <li><a href="https://www.linkedin.com/in/michael-orji-1274b1220/" class="fab fa-linkedin m-3" data-toggle="tooltip" data-placement="left" title="linkedin"></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="contact-form">
            <h2 class="mb-4">Interested to work together? Let's talk</h2>

            <form action="" method="get">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                </div>

                <div class="col-lg-6 col-12">
                  <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                </div>

                <div class="col-12">
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                </div>

                <div class="ml-lg-auto col-lg-5 col-12">
                  <input type="submit" class="form-control submit-btn" value="Send">
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-12">
          <p class="copyright-text text-center">Copyright &copy; <?php echo date('Y') ?> Tech Acoustic. All rights reserved</p>
          <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://techac.net/">Orji Michael Chukwuebuka</a></p>
        </div>

      </div>
    </div>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/Headroom.js"></script>
  <script src="js/jQuery.headroom.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>