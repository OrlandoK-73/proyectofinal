<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Lumia Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.php">INICIO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">QUEJATE YA</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Realiza una queja</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Información de la Empresa</h3>
              <ul>
                <li><strong>Nombre</strong>: Gallo más Gallo</li>
                <li><strong>Categoria</strong>: Linea Blanca</li>
                <li><strong>Grupo</strong>: Distelsa</li>
                <li><strong>Tienda en Linea</strong>: <a href="https://www.elgallomasgallo.com.gt/">https://www.elgallomasgallo.com.gt</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>DESCRIPCION DE LA EMPRESA: </h2>
              <p>
                Tus productos favoritos ahora los puedes comprar en línea. El Gallo más Gallo en línea. 
                Encuentra los mejores detalles en el Gallo más Gallo. Ofertas y promociones. 
                Cupones. Los mejores precios. Servicio de crédito. Servicios: Flexi Pagos, Atención personalizada.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
       <!-- ======= Contact Section ======= -->
       <section id="contact" class="contact section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>REALIZA UNA QUEJA DEL COMERCIO</h2>
            <p>Realiza una queja o reclamo sobre el comercio anterior </br>
            Adjunta la Información solicitada para poder iniciar con la gestión</br>
          !TU INFORMACIÓN PERSONAL NO SERÁ REVELADA, SIEMPRE ANÓNIMO, SIEMPRE QUEJATE YA¡
            </p>
          </div>
         
          <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico de contacto" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="comericio" class="form-control" id="comercio" placeholder="Nombre del comercio" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="departamento" class="form-control" name="departamento" id="departamento" placeholder="Departamento" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="municipio" class="form-control" id="municipio" placeholder="Municipio" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección de la sucursal" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="No de factura, Orden de Compra" required>
                </div>
                
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Describe tu reclamo aquí" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Enviando...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu denuncia ha sido enviado, !Gracias!</div>
                </div>
                <div class="text-center"><button type="submit">Envianos tu denuncia</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Kevin Quiix</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>