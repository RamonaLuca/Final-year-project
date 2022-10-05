<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<style>
*{
  margin: 0;
  padding: 0;
}
.galcontainer {
   display: grid;
   grid-template-columns: repeat(5,1fr);
   grid-gap: .2rem;
   padding-top: 87px;
}

.gallery-container{
    width: 100%;
    height: 100%;
}

.image{

    width: 100%;

    height: 100%;

    overflow: hidden;

}

.image img{

    width: 100%;

    height: 100%;

    object-fit: cover;

    object-position: 50% 50%;

    transition: .4s linear;

    cursor: pointer;

}

.image img:hover{

    transform: scale(1.4);

}

.text{

    opacity: 0;

    position: absolute;

    top: 50%;

    left: 50%;

    transform: translate(-50%,-50%);

    color: #fff;

    font-size: 30px;

    transition: .4s linear;

    pointer-events: none;
}

.gallery-item:hover .text{

    opacity: 1;

    animation: move-down .4s ease-in-out;

    

}

@keyframes move-down{

    0%{

      top: 15%;  

    }

    50%{

        top: 35%;

    }

    100%{

        top: 50%;

    }

}



.galcontainer div:nth-child(1){

    grid-column: span 2;


}

.galcontainer div:nth-child(2){

    grid-row: span 2;

}

.galcontainer div:nth-child(3){

    grid-column: span 2;
}

.galcontainer div:nth-child(6){

    grid-column: span 1;
}

.galcontainer div:nth-child(5){

    grid-column: span 2;
}

.galcontainer div:nth-child(4){

    grid-column: span 2;

}

.galcontainer div:nth-child(7){

    grid-column: span 2;

}

.galcontainer div:nth-child(8){
	grid-column: span 2;
}

.galcontainer div:nth-child(9){
	grid-row: span 2;
	grid-column: span 3;
}

.galcontainer div:nth-child(10){
	grid-row: span 2;
	grid-column: span 2;
}

@media(max-width: 400px){
    .galcontainer{
        grid-template-columns: repeat(2,1fr);
    }
}

</style>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="stylelic.css">
	 <link rel="stylesheet" href="lightbox.css" type="text/css">
     <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				echo "<li><a class='current' href='galerie.php'>Galerie LIVE</a></li>";
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
  


    <div class="galcontainer">
       <?php
        $conn = mysqli_connect('localhost','root','','licenta');
        $query  = "SELECT * FROM galerie";
        $run = mysqli_query($conn,$query);
        
        if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_array($run)){
                $imagine = $row['imagine'];
                $titlu = $row['titlu'];
                ?>

        <div class="gallery-container">
            <div class="image">
				<a href="imagini/<?php echo $imagine;?>" data-lightbox="image-1">
                <img src="imagini/<?php echo $imagine;?>" data-lightbox="image-1">
				</a>
            </div>

            <div class="text">
                <h5><?php echo $titlu?></h5>
            </div>
        </div>
              <?php
            }
        }
        ?>
    </div>
	
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
		<script src="lightbox.js"></script>
		<script src="lightbox-plus-jquery.js"></script>
		<script src="scriptlicenta.js"></script>
</body>
</html>