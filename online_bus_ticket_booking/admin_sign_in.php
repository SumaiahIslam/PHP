<?php
include 'function.php';
check_session();

?>

<?php
 include('connection.php');

  if(isset($_POST['submit']))
  {

  $phone=$_POST['phone'];
  $password=$_POST['password'];



$sql = "SELECT * FROM add_admin WHERE phone='$phone' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header('Location:admin.php');
 
} else {
  echo "phone number or password in Invalid ";
}


mysqli_close($conn);
}

?>