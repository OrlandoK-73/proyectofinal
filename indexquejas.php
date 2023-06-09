<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QUEJATE YA </title>
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
        <h1><a href="index.php">QUEJATE YA </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <a href="index.php" class="btn-get-started scrollto">CESAR SESION</a>
          <li><a class="nav-link scrollto" href="#about">COMPARTE UNA EXPERIENCIA</a></li>
          <li><a href="ingresarquejas.php">AGREGAR UNA QUEJA</a></li>
          <li><a href="consultar.php">CONSULTAR UNA UNA QUEJA</a></li>
          <li><a class="nav-link scrollto" href="#contact">SOPORTE TECNICO</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>BIENVENIDO <span> QUEJATE YA</span></h1>
      <h2>Tu opinión nos importa, siente libre de expresarte</h2>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/portfolio/img11.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>COMPARTE UNA EXPERIENCIA</h3>
            <p>
              Opina sobre cualquier comercio del pais, o situacion que hayas vivido.
            </p>
            <form action="registro_compartir.php" method="POST">
            <div class="col-md-6 form-group">
            <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre Completo" required></br>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="correo" id="email" placeholder="Correo electronico de contacto" required></br>
            </div>
            <div class="form-group mt-3">
            <textarea class="form-control" name="expe" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
            </div>
            </br>
            <input type="submit" value="Compartir">
            </form> 
          
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>TESTIMONIOS</h2>
          <p>Feedback de nuestros clientes al denunciar por nuestra pagina</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-phone-flip"></i>
              <h4><a href="#">Romero Cucul</a></h4>
              <p>Compré un telefono movil en Max Plaza Magdalena Cobán. Estaba defectuoso y denuncie por medio de la pagina
                y en 15 días ya tenia el reclamo resuelto </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-ticket-perforated"></i>
              <h4><a href="#">Adriana Caal</a></h4>
              <p>
              Compré las entradas para un concierto y resultaron falsas. Denuncié al comercio por medio de la página
              y me devolvieron el dinero.  
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-badge-4k"></i>
              <h4><a href="#">Arturo Guzman</a></h4>
              <p>
                Adquirí tarjetas gráficas GEFORCE RTX 3050 en intelaf y no funcionaban. No querian cubrir la garantia asi que 
                decidí denunciarlos y ahora tengo las tarjetas funcionales. 
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-emoji-smile-fill"></i>
              <h4><a href="#">Amanda Gutiérrez</a></h4>
              <p>
                Recomiendo ampliamente el sitio, solucionan de manera rápida y segura.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>SOPORTE TECNICO</h2>
          <p>!SI TIENES UN PROBLEMA!</br>
           Contactenos y te resolvemos tus problemas
          </p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>UBICANOS:</h4>
                  <p>Local 101 Plaza San Martin<br>Cobán, Alta Verapaz</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>quejateya@gmail.com<br>multiquejas@outlook.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Telefonos:</h4>
                  <p>+502 7952 - 0000 <br>+502 7951 - XXXX</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
          <form action="registro_soporte.php" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre Completo" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico de contacto" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="gestion" id="subject" placeholder="No de Gestion" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="soporte" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
              </div>    
              </br>        
              <input type="submit" value="SOLICITAR SOPORTE">
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    
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