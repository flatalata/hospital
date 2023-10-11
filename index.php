<!DOCTYPE html>
<html>
  <head>
    <title>Sistema Hospital | 2023</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link
      href="http://fonts.googleapis.com/css?family=Ropa+Sans"
      rel="stylesheet"
      type="text/css"
	/>
	<link rel="shortcut icon" href="tigre.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/responsiveslides.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function () {
        // Slideshow 1
        $("#slider1").responsiveSlides({
          maxwidth: 1600,
          speed: 600,
        });
      });
    </script>
  </head>
  <body>
    <!--start-wrap-->

    <!--start-header-->
    <div class="header" style="background: deepskyblue;">
      <div class="wrap">
        <!--start-logo-->
        <div class="logo">
          <a href="index.php" style="font-size: 30px;color: #fff;font-weight: 600;">SISTEMA HOSPITAL 2023</a>
        </div>
        <!--end-logo-->
        <!--start-top-nav-->
        <div class="top-nav">
          <ul>
            <li class=""><a href="index.php">Inicio</a></li>
            <li><a href="contact.php">Contacto</a></li>
          </ul>
        </div>
        <div class="clear"></div>
        <!--end-top-nav-->
      </div>
      <!--end-header-->
    </div>
    <div class="clear"></div>
    <!--start-image-slider---->
    <div class="image-slider">
      <!-- Slideshow 1 -->
      <ul class="rslides" id="slider1">
        <li><img src="images/slider-image1.jpg" alt="" /></li>
        <li><img src="images/slider-image2.jpg" alt="" /></li>
        <li><img src="images/slider-image1.jpg" alt="" /></li>
      </ul>
      <!-- Slideshow 2 -->
    </div>
    <!--End-image-slider---->
    <div class="clear"></div>
    <div class="content-grids">
      <div class="wrap">
        <div class="section group">
          <div class="listview_1_of_3 images_1_of_3">
            <div class="listimg listimg_1_of_2">
              <img src="images/grid-img3.png" />
            </div>
            <div class="text list_1_of_2">
              <h3>Usuarios</h3>
              <p>Registrese y Reserve una Cita</p>
              <div class="button">
                <span><a href="/hms/user-login.php">Ingresar</a></span>
              </div>
            </div>
          </div>

          <div class="listview_1_of_3 images_1_of_3">
            <div class="listimg listimg_1_of_2">
              <img src="images/grid-img1.png" />
            </div>
            <div class="text list_1_of_2">
              <h3>Login Doctor</h3>
              <div class="button">
                <span><a href="hms/doctor/">Ingresar</a></span>
              </div>
            </div>
          </div>

          <div class="listview_1_of_3 images_1_of_3">
            <div class="listimg listimg_1_of_2">
              <img src="images/grid-img2.png" />
            </div>
            <div class="text list_1_of_2">
              <h3>Login Administrador</h3>

              <div class="button">
                <span><a href="/hms/admin">Ingresar</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrap">
      <div class="content-box">
        <div class="section group">
          <div class="col_1_of_3 span_1_of_3 frist"></div>
          <div class="col_1_of_3 span_1_of_3 second"></div>
          <div class="col_1_of_3 span_1_of_3 frist"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="footer" style="background: silver;">
      <div class="wrap">
        <div class="footer-left">
          <ul>
            <p><li><a href="index.html">HOME</a></li>
            <li><a href="contact.php">CONTACTO</a></li>
            &copy; SISTEMA PRUEBA 2022</p>
          </ul>
        </div>

        <div class="clear"></div>
      </div>
    </div>
    <!--end-wrap-->
  </body>
</html>
