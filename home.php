<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylelic.css">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   </head>
<body>

 <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar">
                            <div class="time">
                                <i class="far fa-clock"></i>
                                <h4>8:00 - 12:00</h4>
                                <p>Luni - Vineri</p>
                            </div>
                            <div class="time">
                                <i class="fa fa-phone-alt"></i>
                                <h4>(+40) 770 779 888</h4>
                                <p>Relații clienți</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
  <!-- Move to top button -->
  <div class="scroll-button">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>
  <!-- Navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a class="currents" href="home.php">Body</br>Techs</a></div>
      <ul class="menu">
      <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='galerie.php'>Galerie LIVE</a></li>";
			}
            ?>
            <li>
       <div class="dropdown">
            <a href="">Servicii <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="servicii_clase.php">Clase</a>
                <a href="servicii_functional.php">Functional</a>
                <a href="servicii_cross.php">Cross-training</a>
            </div>
        </li>
          <li><a href="orar_clase.php">Orar</a></li>
          <li><a href="tarif_clase.php">Tarife</a></li>
		   <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='magazin.php'>Produse</a></li>";
			}
			else{
				echo "<li><a href='login.php'>Produse</a></li>";
			}
		  ?>
		  <li><a href="instructori.php">Despre noi</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='profil.php'>Bună, " . $_SESSION["useruid"] . "</a></li>";
				echo "<li><a href='includes/logout.inc.php'><i class='fas fa-sign-out-alt'></i></a></li>";
			}
			else{
				echo "<li><a href='login.php'><i class='fa fa-user'></i></a></li>";
			}
		  ?>
		  <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>
      </div>

<!-- Home Section -->
<section class="home" id="home">
         <div class="home-content">
            <div class="text-one"><em>Aerobic</div>
            <div class="text-two">Cross-training</div>
            <div class="text-three">Fitness</em></div>
            <?php
			if(isset($_SESSION["useruid"])) {
				echo "<div class='button'><button><a href='orar_clase.php'>Fă o programare chiar acum!</a></button></div>";
			}
            else{
				echo "<div class='button'><button><a href='login.php'>Începe chiar acum!</a></button></div>";
			}
		  ?>
	    </div>
	  <div class="home-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
	  </div>
   </div>
 
 <div id="video-frame">
    <span id="video-frame-hide" class="fa fa-times"></span>
    <div class="video-frame-container">
      <div class="video-frame-scaler">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/s8hWQwFwayo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
</section>

 <script>
    // document ready function
    $(function () {
      // store jquery references to elements in const variables
      const youtubeButton = $('.youtube-button');
      const videoFrame = $('#video-frame');
      const videoFrameHide = $('#video-frame-hide');
      const embedVideo = $('#embed-video');


      youtubeButton.on('click', () => {
        videoFrame.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      videoFrameHide.on('click', () => {
        videoFrame.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
        
        embedVideo.prop('src', embedVideo.prop('src'));
      });
    });
	
  </script>

  <!-- Testimonial Start -->
        <div class="testimonial ">
            <div class="container">
                <div class="section-header text-center">
                    <p><em>Testimonial</p>
                    <h2>Ce spun clienții noștri?</em></h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="imagini/1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Sala a avut un rol foarte important în dezvoltarea mea, și nu doar cea fizică. Toți de aici au devenit ca o familie pentru mine. Îi mulțumesc în special lui Cosmin, primul meu antrenor. Făra motivația lui nu aș fi ajuns așa departe. 
                            </p>
                            <h3>Mihai</h3>
                            <h4><em>Agent vânzări</em></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="imagini/2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                7 ani de Body Techs. Cum sa zic? Locul perfect pentru un corp sculptat, antrenori pe măsură, ore pline de voie bună.
                            </p>
                            <h3>Carolina</h3>
                            <h4><em>Profesor</em></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="imagini/3.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                M-am apucat de sală din cauza unor probleme de sănătate. M-a ajutat mult faptul că antrenorii pot da și sfaturi nutriționale. Toți sunt foarte documentați și bine pregătiți. Am mai încercat și alte săli, dar la niciuna n-a fost ca acest Studio. 
                            </p>
                            <h3>Robert</h3>
                            <h4><em>Designer grafic</em></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="imagini/4.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                               Program structurat, antrenori devotatați. De fiecare dată când intru pe ușa sălii sunt primită de oamenii plini de viață, mereu cu zâmbetele pe buze. Uau, acum că mă gândesc...aproape 1 AN de Body Techs. N-aș fi crezut vreodată. 
                            </p>
                            <h3>Sofia</h3>
                            <h4><em>Actriță</em></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

 <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Nu mai sta pe <span>gânduri</span>, începe chiar<span> astăzi</span>!</h2>
                        <p><em>Încearcă gratuit, de acasă, urmărind videoclipurile postate săptămânal sau vino să te antrenezi cu noi la sală!</em></p>
                        <div class="main-button">
                            
                            <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='galerie.php'>Galerie LIVE</a></li>";
			}
			else{
				echo "<li><a href='login.php'>Galerie LIVE</a></li>";
			}
		  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

<!-- Footer Section -->
  <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="#" class="footer-logo"><em>B<span>o</span>D<span>y</span> T<span>e</span>C<span>h</span>S</a>
                        <h3>Strada Cireșilor 13, Cluj-Napoca, România</em></h3>
                        <div class="footer-menu">
                            <p>(+40) 770 779 888</p>
                            <p>bodytechsstudio@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="copy">
                            <p>&copy; <a href="#"><em>Body Techs</em></a></p>
                        </div>
                        <div class="design">
                            <p>Designed By <a href="home.html"><em>LucaRamona</em></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

  <script src="scriptlicenta.js"></script>
</body>
</html>
