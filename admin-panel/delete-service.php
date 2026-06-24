<?php
ob_start();
ob_flush(); 
include("../connection.php");

$ID = $_GET['id'];

$query = "DELETE FROM services WHERE service_id = '$ID'";
$delete = mysqli_query($conn,$query);

header("Location: show-services.php");
?>