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
  background: url("imagini/orar_clasee.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  font-family: 'Papyrus', serif;
  z-index:1;
}

.orar .text p{
  z-index:2;
  color: #000;
  text-align: center;
  line-height: 1150px;
  font-weight: 950;
  font-size: 50px;
  text-transform: uppercase;
  font-style: italic;
}
.functional{
  height: 150vh;
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
  padding: 0 15px;
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

@media (max-width: 532px){
  .functional {
    height: 270vh;
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
          <p>Clase</p>
        </div>
      </section>
      <section class="functional" id="functional">
        <div class="text">
          <p><span >Circuit Training</span>
          <br>
Este o combinație între fitness-ul de tip cardio și antrenamentul de rezistență.
Clasa Circuit Training, utilizează o varietate de exerciții și echipamente (coardă, gantere, mingi medicinale, aparate cu greutăți sau propria greutate a corpului) pentru a genera o mișcare cât mai complexă din punct de vedere motric, la o intensitate ridicată. Mișcările se țin lanț, după cum reiese și din nume, iar pauza este una activă. Schimbul dintre exerciții substituie timpul de revenire. Antrenamentul în Circuit este un tip de efort foarte eficient, care crește anduranța sportivului în timp și-i aduce un plus de forță.
<br><br/>
<span>Body Shape </span>
<br>
Clasa de Body Shape reprezintă un antrenament complet, ideal pentru menținerea unui stil de viața activ.
În timpul antrenamentului se insistă pe tonifierea și definirea abdomenului. Reprezintă un mod plăcut de ardere a grăsimilor și totodată practicat în mod constant, ajută la consolidarea musculaturii spatelui și corectarea posturii.
Mușchii fesieri, brațele și picioarele sunt sculptate prin antrenament. Întreg corpul lucrează la desăvârșirea formei perfecte pe care dorim să o vedem în oglindă.
<br><br/>
<span>Burning Cardio</span>
<br>
Este un antrenament ce se adresează tuturor persoanelor care doresc să-și îmbunătățească aspectul fizic printr-o tehnică de lucru bazată pe eforturi de scurtă durată și intensitate ridicată. 
<br><br/>
<span>ABS Workout</span>
<br>
ABS Workout este un antrenament potrivit persoanelor care doresc să pună accent pe modelarea părții superioare a corpului.
Prin exercițiile propuse se întărește musculatura spatelui ceea ce duce la corectarea posturii. Este perfect pentru cei care optează în favoarea unui antrenament mai intens.
Arderea caloriilor nu va fi deloc neglijată în aceasta oră.  
<br><br/>
<span>Mix Workout </span>
<br>
Vinerea aduce cu sine acel feeling de relaxare.
Mix Workout este perfect pentru cei care doresc să se mențină activi, dar fără a-și solicita organismul prea tare. Antrenamentul este ideal pentru remodelare corporală.
Conceput la o intensitate redusă, acesta încheie perfect o săptămână plină de activitate.
<br><br/>
<span>Pilates </span>
    <br>
Pilates aduce în față armonia dintre ritmul respirației și mișcările corpului.
Antrenamentele se referă la un sistem aerobic care pune accentul pe dezvoltarea principalilor muschi ai coloanei vertebrale pentru a obține și menține o direcție și o poziție cât mai corectă a corpului.
Datorită complexității, contribuie semnificativ la ameliorarea durerilor de spate (dureri lombare) și este foarte eficient pentru oricine dorește o îmbunătățire a echilibrului fizic și a mobilității articulare.
</p>
          <div class="funct-button">
            <a href="servicii_functional.php" class="button1" style="float: right;"><span>Înainte ></span></a>
	        </div>

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
