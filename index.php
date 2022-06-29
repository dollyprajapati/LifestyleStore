<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
        <title>LifeStyleStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell style.</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
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
                                <img src="img/footwere.jpg" alt="footwere">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Blockheels</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/w1.jpg" alt="W1">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Watches</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/er1.jpg" alt="Er1">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Earring</p>
                                   <p>Our exquisite collection of Earring.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/product1.jpg" alt="product1">
                           </a>
                           <center>
                           <div class="caption">
                                        <p id="autoResize">Jacket</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/product3.jpg" alt="product3">
                           </a>
                           <center>
                           <div class="caption">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="caption">
                                    <p id="autoResize">Black Dress</p>
                                    <p>Original from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/product5.jpg" alt="product5">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Crop Top</p>
                                   <p>collection of Crop Top.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                       
                                <img src="img/shipping.png" alt="shipping">
                           </a>
                           <center>
                                <div class="caption">
                                        <p>We have extended free shipping on all orders.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           
                               <img src="img/original.png" alt="original">
                           </a>
                           <center>
                                <div class="caption">
                                    <p> 100% Original Products </p>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           
                               <img src="img/cod.png" alt="cod">
                           </a>
                           <center>
                               <div class="caption">
                                   <p>Cash on delivery will make you easy for Payment.</p>
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
               <p>Email:LifeStyleStore@gmail.com | Contact Us: +91 1234567890</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>