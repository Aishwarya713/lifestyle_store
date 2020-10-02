<?php 
    require('common.php');
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<html>
    <head>
        <title>SETTINGS</title>
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
        
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-4">
                    <h2 style="margin-top: 85px;">Change Password</h2>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old-password" required = "true">
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="password" required = "true">
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm New Password" name="password1" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        
                    </form>
                </div> 
            </div>
        </div>
        
         <?php
            require('footer.php');
        ?>
    </body>
</html>
