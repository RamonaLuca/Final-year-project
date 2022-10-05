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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>       
.orar{
  height: 100vh;
  width: 100%;
  background: url("imagini/orar_functional.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  font-family: 'Papyrus', serif;
  z-index:1;
}

.orar .text p{
  z-index:2;
  color: #fff;
  text-align: center;
  line-height: 1150px;
  font-weight: 950;
  font-size: 50px;
  text-transform: uppercase;
  font-style: italic;
}
.functional{
  height: 100vh;
  width: 100%;
  background-color:#E8E8E8;
  font-family: Apple Chancery, cursive;
  margin:auto;
  display: flex;
align-items: center;
}

.functional .text p{
  color: #000;
  text-align: center;
  font-weight: 100;
  font-size: 20px;
  font-style: italic;
}
.functional .text p span{
  font-weight: 950;
}
.button1 {
  transition-duration: 0.4s;
  margin-top: 50px;
  padding: 15px 16px;
  color: #535252;
  text-decoration: underline;
  font-style: italic;
  font-size: 18px;

}

.button1 span:hover {
  color:  #2a292e;
  text-decoration: overline;
}

@media (max-width: 500px){
  .functional {
    height: 130vh;
  }
}
</style>  
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
      <div class="logo"><a href="home.php">Body</br>Techs</a></div>
      <ul class="menu">
      <?php
			if(isset($_SESSION["useruid"])) {
				echo "<li><a href='galerie.php'>Galerie LIVE</a></li>";
			}
            ?>
      <li>
       <div class="dropdown">
            <a href="" class = "current">Servicii <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="servicii_clase.php">Clase</a>
                <a href="servicii_functional.php">Functional</a>
                <a href="servicii_cross.php">Cross-training</a>
            </div>
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

      <section class="orar" id="orar">
        <div class="text">
          <p>Functional</p>
        </div>
      </section>
      <section class="functional" id="functional">
        <div class="text">
          <p>Antrenamentul Funcţional foloseşte exerciţiile cardio statice sau cu deplasare, exerciţii cu propria greutate şi cu diverse accesorii.
          <br><br/>
          Aceste antrenamente sunt potrivite pentru orice persoană a cărei scop este să-și dezvolte condiția fizică, capacitatea de a face față sarcinilor cotidiene, să-și îmbunătățească aspectul fizic și să-și mențină starea de sănătate.
          <br><br/>
          Antrenamentele funcționale alături de noi, <span>Body Techs Studio</span>, sunt speciale pentru că punem foarte mult accentul pe nevoile tale. Ne interesează în principal obiectivul pentru care vrei să faci sport și ulterior îți oferim toate uneltele necesare pentru a-l atinge.
          <br><br/>
          Cu ajutorul și susținerea permanentă a unui antrenor, vei avea parte de antrenamente personalizate, dinamice și diferite de la o ședință la alta.</p>
          <div class="funct-button">
            <a href="servicii_cross.php" class="button1" style="float: right;"><span>Înainte ></span></a>
	        </div>
          <div class="funct-button">
            <a href="servicii_clase.php" class="button1" style="float: left;"><span>< Înapoi</span></a>
	        </div>
        </div>
      </section>



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
