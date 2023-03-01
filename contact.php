<?php

include "form.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>ExpressLingo Contacte</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="icon" type="image/x-icon" href="images/chart-line-up.png">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              ExpressLingo
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html#about" class="nav-link">Despre noi</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#project" class="nav-link">Cursuri</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active contact">Contacte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Înregistrează-te <strong>acum</strong> la cursul nostru de franceză</h1>

                      <p>Sau trimite-ne un email la adresa <a href="mailto:expresslingo@gmail.com">expresslingo@gmail.com</a></p>
                      <!--<p>începe-ți călătoria spre învățarea uneia dintre cele mai frumoase limbi din lume!</p> -->
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                      <form action="#" method="POST" action="form.php" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nume și prenume">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" id="message" placeholder="Mesaj"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Trimite</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

     <div class="google-map" data-aos="zoom-in">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2719.684701272734!2d28.82290081591332!3d47.02679367915055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97dcb7f4c30dd%3A0xeed8f64ae860bcec!2zU3RyYWRhIFNmYXR1bCDImsSDcmlpIDE4LCBDaGnImWluxIN1IDIwMTIsIE1vbGRvdmE!5e0!3m2!1sro!2s!4v1677512434389!5m2!1sro!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>


     <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Voulez-vous ...<br>
               parler <strong>français</strong>?</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Informații de contact</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +373 123456789
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                expresslingo@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Locația noastră</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Strada Sfatul Țării 18, Chișinău
            </p>
          </div>
        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>