<?php 
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRODUCTS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <?php
            require('header.php');
            include('check-if-added.php');
        ?>
        
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome To Our Lifestyle Store!</h1>
                <p>We have the best products for you. No need to hunt around, we have all at one place.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/mini-palette.jpg" class="img-responsive">
                        <center>
                        <h4>Maybelline Mini Palette</h4>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                        <?php
                            } else {
                                if (check_if_added_to_cart(1)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/mascara.jpg" class="img-responsive">
                        <center>
                        <h4>Maybelline Mascara</h4>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                        <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/lipstick.jpg" class="img-responsive">
                        <center>
                            <h4>Maybelline Lipstick</h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>

                        </center>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/foundation.jpg" class="img-responsive">
                        <center>
                            <h4>Maybelline Matte Foundation</h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>

                        </center>
                    </div>
                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                           <img src="image/ipad.jpg" class="img-responsive">
                        <center>
                            <h4>Apple iPad Pro 2020</h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                         
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       
                           <img src="image/iphone-se.jpg" class="img-responsive"> 
                           <center>
                               <h4>Apple iPhone SE 2020</h4>
                               <?php if (!isset($_SESSION['email'])) { ?>
                               <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                           </center>
                       
                    </div>
                </div>
                <div class="col-md-3 col-sma-6">
                    <div class="thumbnail">
                           <img src="image/mac-mini2.jpg" class="img-responsive">
                           <center>
                               <h4>Apple Mac mini</h4>
                               <?php if (!isset($_SESSION['email'])) { ?>
                               <a href="login.php" type="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(7)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </center>
                    </div>
                </div>
                <div class="col-md-3 col-sma-6">
                    <div class="thumbnail">
                           <img src="image/airpods.png" class="img-responsive">
                           <center>
                               <h4>Apple Airpods</h4>
                               <?php if (!isset($_SESSION['email'])) { ?>
                               <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </center>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/dress.jpg" class="img-responsive">
                        <center>
                            <h4>Vero Moda Shirt</h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/jeans.jpg" class="img-responsive">
                        <center>
                            <h4>UCB Skinny Jeans </h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(10)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/dress2.jpg" class="img-responsive">
                        <center>
                            <h4>Vero Moda Trousers</h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(11)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt.jpg" class="img-responsive">
                        <center>
                            <h4>Peter England Shirt</h4>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a>
                            <?php
                            } else {
                                if (check_if_added_to_cart(12)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>
                    
                </div>
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
