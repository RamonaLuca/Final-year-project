<?php
  include 'includes/dbh.inc.php';
  session_start();
  error_reporting(0);
  $userid = $_SESSION['userid'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_username = mysqli_real_escape_string($conn, $_POST['update_username']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_phone = mysqli_real_escape_string($conn, $_POST['update_phone']);
   $update_address = mysqli_real_escape_string($conn, $_POST['update_address']);
   $update_class = mysqli_real_escape_string($conn, $_POST['class']);
   $update_instructor = mysqli_real_escape_string($conn, $_POST['instructor']);
   $update_hour = mysqli_real_escape_string($conn, $_POST['hour']);

   if (empty($_POST['update_name']) || empty($_POST['update_username']) || empty($_POST['update_email']) || empty($_POST['update_phone']) || empty($_POST['update_address']) || empty($_POST['class']) || empty($_POST['instructor']) || empty($_POST['hour'])) {
    $message[] = 'Toate câmpurile formularului trebuie completate!';
    }
    else {
        mysqli_query($conn, "INSERT INTO programare (nume, username, email, telefon, adresa, clasa, instructor, ora) VALUES ('".$update_name."','".$update_username."','".$update_email."','".$update_phone."', '".$update_address."', '".$update_class."', '".$update_instructor."', '".$update_hour."')");
        $message[] = 'Progamarea ta a fost realizată! Te așteptăm cu drag la Body Techs!';
    }
}

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
    </div>
  </nav>
      </div>

      <div class = "update-profile">
      <?php
      $select = mysqli_query($conn, "SELECT * FROM clienti WHERE id = '$userid'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['imagine'] == ''){
            echo '<img src="imagini/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['imagine'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Nume:</span>
            <input type="text" name="update_name" value="<?php echo $fetch['nume']; ?>" class="box">
            <span>Username:</span>
            <input type="text" name="update_username" value="<?php echo $fetch['username']; ?>" class="box">
            <span>Email:</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>Ședința/clasa la care doriți participarea</span>
            <input type="text" name="class"  class="box">
         </div>
         <div class="inputBox">
         <span>Telefon:</span>
            <input type="tel" name="update_phone" value="<?php echo $fetch['telefon']; ?>" class="box">
            <span>Adresa:</span>
            <input type="text" name="update_address" value="<?php echo $fetch['adresa']; ?>" class="box">
            <span>Instructor</span>
            <input type="text" name="instructor"  class="box">
            <span>Oră</span>
            <input type="text" name="hour"  class="box">
         </div>
      </div>
      <input type="submit" value="Realizează programarea" name="update_profile" class="btn">
      <a href="orar_clase.php" class="delete-btn">Înapoi</a>
   </form>
    
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
