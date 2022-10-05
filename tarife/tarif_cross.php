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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style> 
.content {
  font-family: Apple Chancery, cursive;
}
  .txt{
  position: relative;
  left: 5.5%;
  width: 89%;
  text-align: center;
  line-height: 50px;
  padding-top:100px;
  align:center;
}
.txt a {
  font-weight: 950;
  font-size: 28px;
  text-transform: uppercase;
  letter-spacing: -1px;
  color: #fff;
}
#leftbox {
  float:left; 
  background: #222222;
  width:33.33%;
  height:60px;
  border:1px solid#fff;
}
#middlebox{
  float:left; 
  background:  #444444;
  width:33.33%;
  height:60px;
  border:2px solid#000;
}
#rightbox{
  float:left;
  background: #222222;
  width:33.33%;
  height:60px;
  border:1px solid#fff;
}

.price-package{
	padding: 80px;
	background-color: #ffffff;

}
.price-package .content{
	-webkit-display: flex;
	display: flex;
}
.price-package .content .box{
	flex:0 0 33.33%;
	max-width: 33.33%;
	padding: 30px;
}
.price-package .content .box .inner{
	background-color: #F5F5DC;
}
.price-package .content .box .inner .price-tag{
	padding: 10px;
	font-size: 20px;
	background-color: #BC8F8F;
	color:#ffffff;
	text-align: center;
	font-weight: 700;
}
.price-package .content .box .inner .price-tag span {
  color: #582C3C;
  font-size: 35px;
}
.price-package .content .box .inner .text{
	padding:30px 100px;
	text-align: center;
}
.price-package .content .box .inner .text h3{
	font-size: 24px;
	color:#222222;
  text-transform: uppercase;
	margin:0;
	padding:0px 0px 20px;
	font-weight: 700;
}
	
.price-package .content .box .inner .text .btnn{
    padding: 8px 30px;
    background-color: #A27F90;
    color: #ffffff;
    text-decoration: none;
    display: inline-block;
    border: 1px solid transparent;
    cursor: pointer;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
    margin-top: 10px;
}
.price-package .content .box .inner .text .btnn:hover{
	border-color:#222222;
	color:#222222;
	background-color: transparent;
}
.price-package .content .box .inner .img img{
	width: 100%;
}
@media (max-width:1055px) {
  .txt a {
  font-size: 19px;
}
.price-package .content{
	flex-wrap: wrap;
}
.price-package .content .box {
    flex: 0 0 100%;
    max-width: 100%;
    padding: 4px;
}
.price-package .content .box .inner .text .btnn{
    padding: 5px 20px;
    font-size:15px;
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
            <a href="">Servicii <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="servicii_clase.php">Clase</a>
                <a href="servicii_functional.php">Functional</a>
                <a href="servicii_cross.php">Cross-training</a>
            </div>
        </div> 
        </li>
          <li><a  href="orar_clase.php">Orar</a></li>
          <li><a class="current" href="tarif_clase.php">Tarife</a></li>
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
               
                
                <div class="txt">
                    <div id = "leftbox">  
                      <a href="tarif_clase.php"><em>Clase</em></a>
                    </div>
                    <div id = "middlebox">  
                      <a href="tarif_cross.php"><em>Cross-training</em></a>
                    </div>
                    <div id = "rightbox">  
                      <a href="tarif_func.php"><em>Funcțional</em></a>
                    </div>
                </div>
                <section class="price-package" id="price">
  	 <div class="container">
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
  	 	  	  	  	   	  <span>80RON</span>
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="imagini/tarif4.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>1 ședință</h3>
  	 	  	  	  	   	  <a href="login.php" class="btnn">Înregistrează-te</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
                      <span>370RON</span>
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="imagini/tarif5.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>8 ședințe</h3>
                          <a href="login.php" class="btnn">Înregistrează-te</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
                      <span>610RON</span>
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="imagini/tarif6.jpeg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>16 ședințe</h3>
  	 	  	  	  	   	  <a href="login.php" class="btnn">Înregistrează-te</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
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
