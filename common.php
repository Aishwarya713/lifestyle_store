<?php
$servername = "localhost";
$username = "id14515592_root";
$password = "Aishwaryarai@2805";
$database = "id14515592_store";

$conn =  mysqli_connect($servername, $username, $password, $database) or die($mysqli_error($conn));
if(!isset($_SESSION['email'])){
    session_start();
}
?>
