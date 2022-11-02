<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon.png" />
        <title>LAEMER DEALZ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
    </head>
    <body style="background-color: black">
        <div>
           <?php
            require 'header.php';
           ?>
         <div id="banImage">  
 
               <div class="container">
                   <center>
                    <div id="bannerContent">
                       <h1>Find it, love it, buy it.</h1>
                       <p>Great brands. Great choices.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/young-woman-in-casual-fashion.jpg" alt="Levis">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Levis</p>
                                        <p>Live in Levi's.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/young-woman-in-sunglasses-with-rings.jpg" alt="Sunglasses">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Sunglasses</p>
                                    <p>Be Safe in Style.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/stylish-woman-smiling.jpg" alt="Wardrobe">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Wardrobe</p>
                                   <p>Our exquisite collection for your Wardrobe.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy LAEMER DEALZ. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Gaurav Verma</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>