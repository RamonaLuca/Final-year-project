<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylelic.css">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>       

.schedule{
	padding:90px 0px;
  background-color: #e6d5db;
}

.schedule .content{
	-webkit-display: flex;
	display: flex;
 
}

.schedule .content .box{
	flex:0 0 100%;
	max-width: 100%;
	padding:30px;
  margin-left: auto;
  margin-right: auto;
}
.schedule  .text{
  float: right;
  width: 89%;
  text-align:center;
  line-height: 50px;
}
.schedule  .text a {
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
  background: #444444;
  width:33.33%;
  height:60px;
  border:2px solid#000;
}
#rightbox{
  float:right;
  background: #222222;
  width:33.33%;
  height:60px;
  border:1px solid#fff;
}
@media (max-width: 750px) {
  .schedule  .text a {
  font-size: 17px;
}
.schedule .content .timing .table td span{
    font-size: 12px;
   }
   .schedule .content .timing .table tr td{
	padding: 5px;
  font-size: 12px;
   }
}

.schedule .content .timing .table{
	width: 100%;
	border-collapse: collapse;
  text-align: center;
}

.schedule .content .timing .table td{
	border:1px solid#838383;
	padding: 8px;
	font-size: 19px;
	text-align: center;
	color:#222222;
}
.schedule .content .timing .table td span{
  text-transform: uppercase;
  font-weight: bold;
}

.schedule .content .timing .table tr:nth-child(even) td.hour{
	background-color: #222222;
}
.schedule .content .timing .table tr:nth-child(odd) td.hour{
	background-color: #444444;
}
.schedule .content .timing .table tr:nth-child(1) td.hour{
	background-color: #4e393d;
}
.schedule .content .timing .table tr td.hour{
	color:#ffffff;
	border-color:transparent;
}
.button {
  text-align: center;
}
.button button{
  outline: none;
  padding: 7px 7px;
  margin-top: 10px;
  font-size: 20px;
  letter-spacing: -0.5px;
  font-weight: 200;
  background: #4e393d;
  cursor: pointer;
  border: 1px solid#9c9c9c;
  transition: all 0.4s ease;
}
.button button a {
	color:#fff;
}
.button button:hover{
  border-color: #4e393d;
  background-color:#5d4449;
}
.button button:hover a{
	color:#fff;
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
                <a href="servicii_functional.php"">Functional</a>
                <a href="servicii_cross.php"">Cross-training</a>
            </div>
        </div> 
        </li>
          <li><a class="current" href="orar_clase.php">Orar</a></li>
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

    <section class="schedule" id="schedule">
  	 	  <div class="content">
  	 	  	   <div class="box timing wow">
                <div class="text">
                    <div id = "leftbox">  
                      <a href="orar_clase.php"><em>Clase</em></a>
                    </div>
                    <div id = "middlebox">  
                      <a href="#"><em>Cross-training</em></a>
                    </div>
                    <div id = "rightbox">  
                      <a href="orar_func.php"><em>Funcțional</em></a>
                    </div>
                </div>
                   <table class="table">
                   	 <tbody>
                      <tr>
                      <td class="hour"></td>
                   	 		<td><strong>Luni</strong></td>
                   	 		<td><strong>Marți</strong></td>
                   	 		<td><strong>Miercuri</strong></td>
                        <td><strong>Joi</strong></td>
                        <td><strong>Vineri</strong></td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="hour">7:00-8:00</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="hour">8:00-9:00</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="hour">9:00-10:00</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="hour">10:00-11:00</td> 
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                   	 		  <td></td>
                   	 		  <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td><span>Cross-Training</span><br/>Robert Giura</td>
                          <td></td>   
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="hour">15:00-16:00</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="hour">16:00-17:00</td>
                   	 		  <td></td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 	</tr>
                      <tr>
                   	 		<td class="hour">17:00-18:00</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 	</tr>
                      <tr>
                        <td class="hour">18:00-19:00</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                      </tr>
                      <tr>
                   	 		<td class="hour">19:00-20:00</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                          <td><span>Cross-Training</span><br/>Raluca Nica</td>
                      <tr>
                   	 		<td class="hour">20:00-20:30</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td><span>Cross-Training</span><br/>Raluca Nica</td>
                   	 		  <td></td>
                          <td></td>
                          <td></td>
                   	 	</tr>
                   	 </tbody>
                   </table>
  	 	  	   </div>
  	 </div>
     <div class="button">
            <?php
			if(isset($_SESSION["useruid"])) {
				echo "<button><a href='programare.php'>Fă o programare!</a></button>";
			}
      else {
        echo "<button><a href='programare_nelog.php'>Fă o programare!</a></button>";
      }
		  ?>
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
