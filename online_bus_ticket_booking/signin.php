

<?php
 include('php_backend_header.php');
 include('connection.php');



  if(isset($_POST['submit']))
  {

  $phone=$_POST['phone'];
  $password=$_POST['password'];

 session_start(); 

$sql = "SELECT * FROM signup WHERE phone='$phone' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


        $_SESSION['phone'] = $phone;
        $_SESSION['password'] = $password;


  header('Location:booking.php');
 
} else {
   echo "<div class='col-md-6 offset-2'>";
   echo "<div class='p-border' 
                style=' box-shadow: 0 6px 11px 0 hsla(0,0%,75%,.5);
                background-color: #fff; 
                margin-left: 96px; 
                margin-top: 65px; 
                margin-bottom: 65px;
                padding: 18px; 
                font-size: 500px; 
                font-family: pt;
                text-align: center;
                padding-top: 37px;'>";

  echo "<div class='h1'>";
  echo "<img src=images/wrong.jpg>";
  echo "<div>  <style='width: 20%;'> </div>";
  echo "<br>Phone Number Or PassWord is Wrong";
  echo "<a class='nav-link' href='index.php'>Sign In</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}


mysqli_close($conn);
}
include('php_backend_footer.php');

?>




