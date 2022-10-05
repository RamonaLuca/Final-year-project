<?php
	session_start();
    error_reporting(0);

    include 'includes/dbh.inc.php';
    if(isset($_POST['trimite_mesaj'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $messages = $_POST['message'];
        
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['message'])) {
            $message[] = 'Te rugăm să completezi toate câmpurile!';
            }
            else {
                mysqli_query($conn, "INSERT INTO contact(nume, email, telefon, mesaj) VALUES ('".$name."','".$email."','".$mobile."','".$messages."')");
                $message[] = 'Îți mulțumim pentru gândurile tale! Te așteptăm cu drag la Body Techs!';
            }
        }
        

?>
<!DOCTYPE html>
<html>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #1b1c1e;
}

h1 {
    font-family: 'Playfair Display', serif;
    text-align: center;
    font-size: 59px;
    color: white;
    font-weight: 600;
    padding-bottom: 20px;
	padding-top: 60px;
}

.containerc p {
    color: #d2d2d2;
    text-align: center;
}

p,
input,
textarea,
label {
    font-size: 20px;
}

.containerc {
    max-width: 1320px;
    margin: 0 auto;
    padding: 5%;

}

form {
    max-width: 500px;
    margin: 0 auto;
    text-align: left;
    padding: 20px 0;
}

input,
textarea,
label {
    display: block;
    margin: 0 auto;
    width: 100%;
    color: #828282;
}

input,
textarea {
    background-color: transparent;
    border: 0;
    border-bottom: 2px solid #828282;
}

input[type=submit] {
    background-color: #545557;
    padding: 15px 0;
    color: white;
    font-size: 18px;
    border-bottom: none;
    margin-top: 30px;
    cursor: pointer;
    transition: all .3s ease;
}

input[type=submit]:hover {
    background: #FFF;
    color: #1b1c1e;
}

input,
textarea {
    color: white;
    font-size: 18px;
    padding: 10px;
}

input:focus,
textarea:focus {
    outline: 1px solid #828282;
}


</style>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	 <link rel="stylesheet" href="stylelic.css">
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
		  <li><a class="current" href="contact.php">Contact</a></li>
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
<!-- Navgaition menu -->  
	  
	 <!-- Move to top button -->
  <div class="scroll-button">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>
  <!-- Move to top button -->

	<div class="containerc">
        <h1>Așteptăm mesajul tău!</h1>
        <?php
 if(isset($message)){
    foreach($message as $message){
       echo '<div class="message">'.$message.'</div>';
    }
 }
?>
        <p>Scrie-ne, iar noi te vom contacta cât de curând posibil.</p>
        <form method="POST">
			<label for="name">Nume:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="tel">Telefon:</label>
            <input type="tel" name="mobile" id=mobile">
            <label for="message">Scrie un mesaj</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Trimite" name="trimite_mesaj">

        </form>
    </div>
<!-- Footer Section -->
  <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="home.html" class="footer-logo"><em>B<span>o</span>D<span>y</span> T<span>e</span>C<span>h</span>S</a>
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
                            <p>&copy; <a href="home.html"><em>Body Techs</em></a></p>
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