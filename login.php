<?php 
    require("common.php");
       if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Login</title>
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
            require 'header.php';
        ?>
    
    <div class="container">  
        <div class="row">
            <div class="col-xs-5 col-lg-offset-4">
                <div class="panel panel-primary panel-margin">
                    <div class="panel-heading">
                        LOGIN
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make purchase</p>
                        <form action="login_submit.php" method="POST">
                            <div class="form-group">
                                <label>
                                    <input type="email" class="form-control" name="email" required="true" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="password" class="form-control" name="password" required="true" placeholder="Password" >
                                </label>
                            </div>
                        
                            <button type="submit" name="submit" class="btn btn-primary">LOGIN</button><br>
                            </form><br>
                    </div>
                    <div class="panel-footer">
                        Don't have an account?
                        <a href="signup.php">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        
        <?php
            require 'footer.php';
        ?>
        
    </body>
</html>
