<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
.signup{
    border-radius: 5px;
    text-align: center;
	padding-top: 120px;
	padding-bottom: 130px;
    background: #fff;
 }

.signup h2{
  font-style: italic;
  padding: 10px 0;
  color: #4e393d;
  letter-spacing: -3px;
  font-size: 33px;
   }
.signup p {
   letter-spacing:-2px;
   font-style:italic;
   font-size: 33px;
   color: #4e393d;
   font-weight: normal;
}
 button[type = submit] {
            background-color: #4e393d;
            border: none;
            font-style:italic;
            color: white;
            padding: 10px 10px;
            margin: 30px 30px;
            cursor: pointer;
 }
input[type = text] {
    padding: 5px 30px;
}
input[type = password] {
    padding: 5px 30px;
}
</style>
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
                <a href="servicii_functional.php"">Functional</a>
                <a href="servicii_cross.php"">Cross-training</a>
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
		  <li><a class="current" href="signup.php">Înregistrare</a></li>
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
  <div class="signup">
<section class="signup-form">
	<h2>Înregistrare<h2>
	<form action="includes/signup.inc.php" method="post">
		<input type="text" name="name" placeholder=" Nume și prenume">
		<br>
		<input type="text" name="email" placeholder=" Email">
		<br>
		<input type="text" name="uid" placeholder=" Nume utilizator">
		<br>
		<input type="password" name="pwd" placeholder=" Parolă">
		<br>
		<input type="password" name="pwdrepeat" placeholder=" Rescriere parolă">
		<br>
		<button type="submit" name="submit">Înregistrează-te</button> 
	</form>
	<?php
	if (isset($_GET["error"])){
		if ($_GET["error"] == "conținutgol"){
			echo "<p>Completează toate câmpurile!</p>";
		}
		else if ($_GET["error"] == "usernameinvalid") {
			echo "<p>Alege alt username!</p>";
		}
		else if ($_GET["error"] == "emailinvalid") {
			echo "<p>Alege un email valid!</p>";
		}
		else if ($_GET["error"] == "parolanucoincide") {
			echo "<p>Parola nu coincide!</p>";
		}
		else if ($_GET["error"] == "stmteșuat") {
			echo "<p>Ups, ceva nu a mers bine, încearcă din nou!</p>";
		}
		else if ($_GET["error"] == "usernamedejafolosit") {
			echo "<p>Acest username este deja folosit!</p>";
		}
		else if ($_GET["error"] == "succes") {
			echo "<p>Înregistrare realizată cu succes!</p>";
            echo "<button ahref= 'login.php' type='submit' name='submit'>Login aici</button>";
		}
	}
?>
</section>
</div>

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
                            <p>&copy; <a href="home.php"><em>Body Techs</em></a></p>
                        </div>
                        <div class="design">
                            <p>Designed By <a href="home.php"><em>LucaRamona</em></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

  <script src="scriptlicenta.js"></script>
</body>
</html>
