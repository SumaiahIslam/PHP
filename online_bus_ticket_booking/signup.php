


<?php

  include('php_backend_header.php');
  include('connection.php');

  if(isset($_POST['submit']))
  {
  $name=$_POST['name'];
  $nid=$_POST['nid'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];



$sql = "INSERT INTO signup (name,nid,phone,gender,password)
VALUES ('$name','$nid','$phone','$gender','$password')";


if (mysqli_query($conn, $sql)) {


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
  echo "<img src=images/sucess.png>";
  echo "<br>Thank You!";
  echo "<br>Registered Successfully";
  echo "<a class='nav-link' href='index.php'>Sign In</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";

 

} 
else {

   echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);
}

include('php_backend_footer.php');


?>

