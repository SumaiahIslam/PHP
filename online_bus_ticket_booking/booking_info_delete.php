

<?php
include("connection.php");
$id = $_GET['id'];

$result = "DELETE FROM `booking` WHERE id=$id";


if (mysqli_query($conn, $result)) {
 
 header('Location:booking_info.php');
} 

mysqli_close($conn);
?>
