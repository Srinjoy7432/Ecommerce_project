<?php 

include 'purchase.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])){
    $fullname = $_POST['fullname'];
    $query = "SELECT * FROM order_manager WHERE fullname='$fullname'";

echo $query;
}

?>