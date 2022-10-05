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
  background: url("imagini/orar_cross.jpg");
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
  height: 110vh;
  width: 100%;
  padding: 0 0;
  background-color:#E8E8E8;
  font-family: Apple Chancery, cursive;
  margin:auto;
  display: flex;
  align-items: justify;
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
@media (max-width: 532px){
  .functional {
    height: 200vh;
  }
    .orar .text p{
      font-size: 40px;
    }
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
          <p>Cross-training</p>
        </div>
      </section>
      <section class="functional" id="functional">
        <div class="text">
          <p>Cross-Training este un concept relativ nou, creat și dezvoltat în SUA și reprezintă o formă complexă de antrenament, dar și o competiție sportivă. Acest antrenament este o combinație de mai multe tipuri de exerciții din diferite ramuri sportive (atletism, gimnastică, ciclism, natație și haltere). Când te hotărăști să încerci acest serviciu la <span>Body Techs Studio</span>, vei începe inevitabil un proces de dezvoltare continuă al abilităților tale fizice din toate aceste ramuri, proces care nu te va lăsa să te plictisești nicio secundă.
          <br><br/>
 Acestor combinații de exerciții din antrenamentele le sunt atribuite o intensitate și un volum specific astfel încât vei fi stimulat să îți depășești limitele. Iar pentru a nu pierde motivația și tabloul să fie complet, în urma rezultatelor obținute, care trebuie obligatoriu să fie măsurabile și observabile, sunt întocmite clasamente.
 <br><br/>
 Deși este solicitant și foarte eficient în îmbunătățirea rezistenței musculare și a condiției fizice, vom aborda antrenamentele asigurându-ne că alegem intensitatea potrivită pentru tine scalând exercițiile atât de la ușor la greu, cât și de la simplu la complex.
 <br><br/>
 Acest sport vizează toate cele 10 domenii ale condiției fizice: flexibilitate, echilibru, coordonare, precizie, forță, putere, viteză, agilitate, rezistență, vitalitate și este atât de complex încât ne-a convins să ne specializăm pentru a putea oferi acest serviciu la Studio-ul Fitness Body Techs.
 <br><br/>
 Cum arată un antrenament de Cross Training alături de noi, în <span>Studio-ul Body Techs</span>?
 <br><br/>
 Îți vom prezenta pe scurt una din multiplele structuri pe care le folosim: Warm Up, Mobility, Technique, Specific Strength, Power, Workout of the Day, Body Armour, Stretching.
 <br><br/>
  
  Dacă ești o persoană căreia îi place varietatea, imprevizibilul, ai un scop pe care vrei să-l atingi și ești pregătita/ă să-ți depășeșți limitele, atunci cu siguranță trebuie să încerci Cross Training la <span>Body Techs</span>.
  
 </p>
          <div class="funct-button">
            <a href="servicii_functional.php" class="button1" style="float: left;"><span>< Înapoi</span></a>
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