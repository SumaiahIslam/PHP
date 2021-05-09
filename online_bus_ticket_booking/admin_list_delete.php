
<?php
include 'function.php';
check_session();

?>
<?php
include("connection.php");

$id = $_GET['id'];

$result = "DELETE FROM `add_new_admin` WHERE id=$id";


if (mysqli_query($conn, $result)) {
 
 header('Location:admin_list.php');
} 

mysqli_close($conn);
?>
