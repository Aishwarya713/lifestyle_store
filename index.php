<?php 
    require("common.php");
    if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<html>
    <head>
        <title>LIFESTYLE STORE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        <?php
            require('header.php');
        ?>
        
        <div id="banner-img">
            <div class="container">
                <center>
                    <div id="banner-content">
                        <h2>WE SELL LIFESTYLE.</h2>
                        <p>Flat 40% off on premium brands</p><br>
                        <a href="products.php" class="btn btn-danger btn-lg active">SHOP NOW</a>
                    </div>
                </center>
            </div>
        </div>
        
        <footer>
    <div class="container">
        <center>
            <p>Copyright &copy; Lifestyle Store. All Rights Reserved | Contact Us: +91 9000000000</p>
        </center>
    </div>
</footer>       
        
    </body>
</html>
