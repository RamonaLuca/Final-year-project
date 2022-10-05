<?php
	include 'configmag.php';
    session_start();
    $userid = $_SESSION['userid'];
    
    if(isset($_POST['add_to_cart'])){

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];
     
        $select_cart = mysqli_query($conn, "SELECT * FROM `cos` WHERE nume = '$product_name' AND client_id = '$userid'") or die('query failed');
     
        if(mysqli_num_rows($select_cart) > 0){
           $message[] = 'Produsul este deja în coș!';
        }else{
           mysqli_query($conn, "INSERT INTO `cos`(client_id, nume, pret, imagine, cantitate) VALUES('$userid', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
           $message[] = 'Produsul a fost adăugat în coș!';
        }
     
     };
     
     if(isset($_POST['update_cart'])){
        $update_quantity = $_POST['cart_quantity'];
        $update_id = $_POST['cart_id'];
        mysqli_query($conn, "UPDATE `cos` SET cantitate = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
        $message[] = 'Cantitatea a fost actualizată!';
     }
     
     if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM `cos` WHERE id = '$remove_id'") or die('query failed');
        header('location:magazin.php');
     }
       
     if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM `cos` WHERE client_id = '$userid'") or die('query failed');
        header('location:magazin.php');
     }
     
     if(isset($_GET['send_all'])){
      mysqli_query($conn, "DELETE FROM `cos` WHERE client_id = '$userid'") or die('query failed');
      header('location:home.php');
   }
     
     ?>
<!DOCTYPE html>
<html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px --black;
   --border:2px solid var(--black);
}

*{
  
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

body{
   background-color: var(--light-bg);
}
*::-webkit-scrollbar{
   width: 10px;
   height: 7px;
}


.mesaj{
   top:0; left:0; right:0;
   padding:8px 10px;
   margin-top: 95px;
   background-color: #2a292e;
   text-align: center;
   font-style: italic;
   box-shadow: var(--box-shadow);
   color: #fff;
   font-size: 25px;
   cursor: pointer;
}

.btn,
.delete-btn,
.option-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   font-size: 18px;
   color:var(--white);
   border-radius: 5px;
   background-color: #2a292e;
}

.option-btn:hover{
   background-color: var(--black);
}


.option-btn{
   background-color: #535252;
}


.container{
   padding:0 20px;
   margin:0 auto;
   max-width: 1200px;
   padding-bottom: 70px;
}

.container .heading{
   text-align: center;
   margin-bottom: 20px;
   margin-top: 20px;
   font-size: 40px;
   text-transform: uppercase;
   color:var(--black);
}

.container .products .box-container{
   display: flex;
   flex-wrap: wrap;
   gap:15px;
   margin-top: 100px;
   justify-content: center;
}

.container .products .box-container .box{
   text-align: center;
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   border:var(--border);
   position: relative;
   padding:20px;
   background-color: var(--white);
   width: 350px;
}

.container .products .box-container .box img{
   height: 240px;
}

.container .products .box-container .box .name{
   font-size: 20px;
   color:var(--black);
   padding:5px 0;
}

.container .products .box-container .box .price{
   position: absolute;
   top:10px; left:10px;
   padding:2px 7px;
   border-radius: 5px;
   background-color:#535252;
   color:var(--white);
   font-size: 20px;
}

.container .products .box-container .box input[type="number"]{
   margin:10px 0;
   width: 100%;
   border:var(--border);
   border-radius: 5px;
   font-size: 20px;
   color:var(--black);
   padding:12px 14px
}

.container .shopping-cart{
   padding:20px 0;
}

.container .shopping-cart table{
   width: 100%;
   text-align: center;
   border:var(--border);
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   background-color: var(--white);
}

.container .shopping-cart table thead{
   background-color: var(--black);
   font-family: 'Monaco', monospace;
}

.container .shopping-cart table thead th{
   padding:10px;
   color:var(--white);
   font-size: 20px;
}

.container .shopping-cart table .table-bottom{
   background-color: var(--light-bg);
}

.container .shopping-cart table tr td{
   padding:10px;
   font-size: 20px;
   color:var(--black);
}

.container .shopping-cart table tr td:nth-child(1){
   padding:0;
}

.container .shopping-cart table tr td input[type="number"]{
   width: 80px;
   border:var(--border);
   padding:12px 14px;
   font-size: 20px;
   color:var(--black);
}

.container .shopping-cart .cart-btn{
   margin-top: 10px;
   text-align: center;
}

.container .shopping-cart .disabled{
   pointer-events: none;
   background-color: var(--red);
   opacity: .5;
   user-select: none;
}


@media (max-width:1200px){
   .container .shopping-cart{
      overflow-x: scroll;
   }

   .container .shopping-cart table{
      width: 1200px;
   }
}

@media (max-width:450px){
   .container .heading{
      font-size: 30px;
   }
   .container .products .box-container .box img{
      height: 200px;
   }
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
				echo "<li><a class='current' href='magazin.php'>Produse</a></li>";
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

<!-- Magazin + cos -->
  <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="mesaj" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container">

<div class="products">


   <div class="box-container">

   <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `produse`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
      <form method="post" class="box" action="">
         <img src="images/<?php echo $fetch_product['imagine']; ?>" alt="">
         <div class="name"><?php echo $fetch_product['nume']; ?></div>
         <div class="price"><?php echo $fetch_product['pret']; ?> RON</div>
         <input type="number" min="1" name="product_quantity" value="1">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['imagine']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['nume']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['pret']; ?>">
         <input type="submit" value="Adaugă în coș" name="add_to_cart" class="btn">
      </form>
   <?php
      };
   };
   ?>

   </div>

</div>

<div class="shopping-cart">

   <h1 class="heading">Coș</h1>

   <table>
      <thead>
         <th>Imagine</th>
         <th>Nume</th>
         <th>Preț</th>
         <th>Cantiatate</th>
         <th>Preț total</th>
         <th></th>
      </thead>
      <tbody>
      <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cos` WHERE client_id = '$userid'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr>
            <td><img src="images/<?php echo $fetch_cart['imagine']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['nume']; ?></td>
            <td><?php echo $fetch_cart['pret']; ?> RON</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['cantitate']; ?>">
                  <input type="submit" name="update_cart" value="Actualizează cantitatea" class="option-btn">
               </form>
            </td>
            <td><?php echo $sub_total = ($fetch_cart['pret'] * $fetch_cart['cantitate']); ?> RON</td>
            <td><a href="magazin.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('Sigur doriți ștergerea produsului?');">Șterge</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px;" colspan="6">Niciun produs adăugat în coș</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="4">Total comandă:</td>
         <td><?php echo $grand_total; ?> RON</td>
         <td><a href="magazin.php?delete_all" onclick="return confirm('Ștergeți toate produsele din coș?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Șterge toate produsele</a></td>
      </tr>
   </tbody>
   </table>

   <div class="cart-btn">  
      <a href="magazin.php?send_all" onclick="return confirm('Trimiteți comanda?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Trimite comanda</a>
   </div>

</div>

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