
<?php
include 'function.php';
check_session();

?>
<?php
include("connection.php");

$id = $_GET['id'];

$result = "DELETE FROM `signup` WHERE id=$id";


if (mysqli_query($conn, $result)) {
 
 header('Location:user_list.php');
} 

mysqli_close($conn);
?>
