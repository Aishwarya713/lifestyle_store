<?php 
    require("common.php");
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<html>
    <head>
        <title>CART</title>
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
                <div class="col-xs-6 col-xs-offset-3">
                    <table class="table table-bordered table-hover" style="margin-top: 85px;">
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price as Price, items.id, items.name as Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                        <thead>
                            <tr>
                                <th>Item number</th>
                                <th>Item name</th>
                                <th>Item Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                        </tbody>
                          <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
            
        </table>
        
                </div>
            </div>
        </div>
        
        <?php 
        require('footer.php');
        ?>
    </body>
</html>
