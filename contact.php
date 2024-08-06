<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Isobayonate:Solar/Inverter Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ISOBAYONATE COMPANY LTD" name="keywords" />
    <meta content="ISOBAYONATE COMPANY LTD" name="description" />


    
    <!-- Favicon -->
    <link href="img/favicon1.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav
      class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5"
    >
      <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="display-6 text-white text-uppercase m-0">ISOBAYONATE</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
      <br>
      <!-- Google Translator -->      
       <div style="position: relative; right: 15px; top: 5px;">
		    <div id="google_translate_element" style="position: relative; opacity: 0;"></div>
        <button style="position: absolute; left: 0; top: 0; z-index: -1;">Translate</button>
        </div>
        
        <div class="navbar-nav ml-auto py-0">
          
        
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="about.php" class="nav-item nav-link">About</a>
        </div>
        <a
          href="index.html"
          class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block"
        >
          <h1 class="display-6 h4 text-white text-uppercase m-0">ISOBAYONATE COMPANY</h1>
          
        </a>
        <div class="navbar-nav mr-auto py-0">
          <a href="faq.php" class="nav-item nav-link">FAQs</a>
          <a href="contact.php" class="nav-item nav-link active">Contact</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

<!-- Contact Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="section-title position-relative text-center">
      <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px"> Contact</h6>
      <h1 class="font-secondary display-4">Get In Touch</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-form"
            
          <span id="msg"  style="color: #61b752; margin-top: 10px; display: block"></span>
          <form class="form-row" action="data.php" method="post" name="submit-to-google-sheet">
              <div class="col-sm-6 control-group">
                <input type="text" class="form-control bg-secondary border-0 py-4 px-3"  name="name" placeholder="Your Name" required="required"/>
                <p class="help-block text-danger"></p>
              </div>
              <div class="col-sm-6 control-group">
                <input type="email" class="form-control bg-secondary border-0 py-4 px-3"  name="email" placeholder="Your Email" required="required" />
                <p class="help-block text-danger"></p>
              </div>
              <div class="col-sm-6 control-group">
                <input type="phone" class="form-control bg-secondary border-0 py-4 px-3"  name="phone" placeholder="Your Phone Number" required="required"/>
                <p class="help-block text-danger"></p>
              </div>
              <div class="col-sm-6 control-group">
                <input type="text" class="form-control bg-secondary border-0 py-4 px-3"  name="subject" placeholder="What can we help you with?" required="required" />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <textarea
                class="form-control bg-secondary border-0 py-2 px-3"
                rows="6"
                name="message"
                placeholder="Message"
                required="required"
              ></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
              <button
                class="btn btn-primary font-weight-bold py-3 px-5"
                type="submit"
                name="submit"
                style="border-radius: 50px;"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->
<div
  class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5"
  style="margin-top: 90px"
>
  <div class="row pt-5">
    <div class="col-12 mb-4 px-4">
      <div
        class="row mb-5 p-4"
        style="background: rgba(256, 256, 256, 0.05)"
      >
        <div class="col-md-4">
          <div class="text-md-center">
            <h5
              class="text-primary text-uppercase mb-2"
              style="letter-spacing: 5px"
            >
              Our Office
            </h5>
            <p class="mb-4 m-md-0">
              <b style="font-family: arial;">Head Office:</b>&nbsp &nbsp Shop 100, New Garrage Shopping Complex, Oke-Ijebu, Akure, Ondo State,Nigeria.
              
              <br>
              <br>
              <b style="font-family: arial;">Branch Office(1):</b>&nbsp &nbsp 16 Akinwale, High School Street,  Akure, Ondo State, Nigeria.

              <br>
              <br>
              <b style="font-family: arial;">Branch Office(2):</b> &nbsp 22 Ibadan Road, Ile-Ife, Osun State,  Nigeria.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-md-center">
            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px">Email Us</h5>
            <p class="mb-4 m-md-0">isobayonate4real@gmail.com</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-md-center">
            <h5
              class="text-primary text-uppercase mb-2"
              style="letter-spacing: 5px"
            >
              Call Us
            </h5>
            <p class="m-0">+234-806-0837-336 <br>+234-703-4452-487 
              <br>+234-901-8184-491</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-md-12">
      <div class="row">
        <div class="col-md-6 mb-5">
          <p>
           We Are Also Available Here...
        </p>
        <div class="d-flex justify-content-start mt-4">
          <a
            class="btn btn-lg btn-outline-light btn-lg-square mr-2"
            href="https://t.me/+SXtJq8ThKBkzZWFk"
            ><i class="fab fa-telegram"></i
          ></a>
          <a
            class="btn btn-lg btn-outline-light btn-lg-square mr-2"
		href="https://www.facebook.com/adebayo.isaiah.311?mibextid=ZbWKwL"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a
            class="btn btn-lg btn-outline-light btn-lg-square mr-2"
            href="https://wa.link/ecq9tl"
            ><i class="fab fa-whatsapp"></i
          ></a>
          <a class="btn btn-lg btn-outline-light btn-lg-square" 
		  href="https://www.instagram.com/isobayonate4real?igsh=MTZxam96YzZsY2Jjeg=="
            ><i class="fab fa-instagram"></i
          ></a>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <h5
            class="text-primary text-uppercase mb-4"
            style="letter-spacing: 5px"
          >
            Our Products
          </h5>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white btn-scroll mb-2" href="#service"
              ><i class="fa fa-angle-right mr-2"></i>Solar Energy</a
            >
            <a class="text-white btn-scroll mb-2" href="#service"
              ><i class="fa fa-angle-right mr-2"></i>CCTV Installations</a
            >
            <a class="text-white btn-scroll mb-2" href="#service"
              ><i class="fa fa-angle-right mr-2"></i>Networking</a
            >
            <a class="text-white btn-scroll mb-2" href="#service"
              ><i class="fa fa-angle-right mr-2"></i>Solar Imports/Exports</a
            >
            <a class="text-white btn-scroll" href="#service"
              ><i class="fa fa-angle-right mr-2"></i>Engineering Procurement and Construction</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-12 mb-5">
      <h5
        class="text-primary text-uppercase mb-4"
        style="letter-spacing: 5px"
      >
        Other Produts
      </h5>
      <div class="d-flex flex-column justify-content-start">
        <a class="text-white btn-scroll mb-2" href="#service"
          ><i class="fa fa-angle-right mr-2"></i>Hybrid Inverter </a
        >
        <a class="text-white btn-scroll mb-2" href="#service"
          ><i class="fa fa-angle-right mr-2"></i>Charge Control</a
        >
        <a class="text-white btn-scroll mb-2" href="#service"
          ><i class="fa fa-angle-right mr-2"></i>Solar Fridge & Freezer </a
        >
        <a class="text-white btn-scroll mb-2" href="#service"
          ><i class="fa fa-angle-right mr-2"></i>Solar Panels</a
        >
        <a class="text-white btn-scroll" href="#service"
          ><i class="fa fa-angle-right mr-2"></i>Batteries</a
        >
      </div>
      
    </div>
  </div>
  </div>
  <div
  class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5"
  style="border-color: rgba(256, 256, 256, 0.05) !important"
  >
  All Rights Reserved.&copy 2024. 
  <a href="mailto: isobayonate4real@gmail.com"> Isobayonate Solar/Inverter Company</a> Designed by
  <a href="mailto:crescotech24@gmail.com">Cresco Tech</a>
  </p>
  </div>
  <!-- Footer End -->
  
  
  
      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModalLong"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLongTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
               What is Solar System?
              </h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid mb-4" src="img/carousel-1.jpg" alt="" />
              <p>
                Solar energy uses the sun’s light and heat to generate renewable or ‘green’ power. The most
                common form of solar energy is harnessed by solar panels, or photovoltaic cells. In photovoltaic
                power stations, they’re arranged almost edge-to-edge to capture sunlight in large fields. You’ll
                also see them on top of houses and other buildings at times, as well. The cells are created from
                semiconductor materials. When the sun’s rays hit the cells, it loosens electrons from their atoms.
                This allows the electrons to flow through the cell and generate electricity.
                On a much larger scale, solar collectors can generate power for thousands of people at once. Solarthermal
                power plants use a variety of techniques to produce power using the sun. The sun’s energy
                is used to boil water which, in turn, operates a steam turbine to generate in a similar fashion to
                that of coal or nuclear power plants.
              </p>
              
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
  
      <!-- Scroll to Bottom -->
      <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
  
      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"
        ><i class="fa fa-angle-double-up"></i
      ></a>
  
      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/isotope/isotope.pkgd.min.js"></script>
      <script src="lib/lightbox/js/lightbox.min.js"></script>
  
      <!-- Contact Javascript File -->
      <script src="mail/jqBootstrapValidation.min.js"></script>
      <script src="mail/contact.js"></script>
  
      <!-- Template Javascript -->
      <script src="js/main.js"></script>
      <!--Google translator-->
      <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></Script>
  
    </body>
  </html>
  
