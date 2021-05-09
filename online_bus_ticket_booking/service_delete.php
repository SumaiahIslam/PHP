

<?php
include("connection.php");
$id = $_GET['id'];

$result = "DELETE FROM `add_ticket_info` WHERE id=$id";


if (mysqli_query($conn, $result)) {
 
 header('Location:service_list.php');
} 

mysqli_close($conn);
?>
