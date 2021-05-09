<?php
include 'function.php';
check_session();

?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!----project css----->
        <link rel="stylesheet" type="text/css" href="css/style.css">


        <title>BUS SERVICE</title>
  </head>


  <body>

<!----------------------------------nav ber start------------------------------------------------>
<header class="uni-header">
              <div class="header">
                <div class="container">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link active" href="#">Add Admin</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                          </li>
                        
                          <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                          </li>
                           
                           
                        </ul>

                        

                       </div>
                  </nav>
                </div>      
              </div>
      </header>

<!----------------------------------nav ber end----------------------------------------------->

<section class="registration-form">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-4 registration">
        <div class="col-md-12 ref" >
          <p class="rf">Add New Admin</p>
        </div>
        
           <form action="add_admin.php" method="POST">
                <div class="col-md-12 form">
                   <input type="text" name="name" class="form-control" placeholder="Full name" required>
                </div> 
                <div class="col-md-12 form">
                   <input type="text" name="nid" class="form-control" placeholder="NID Or Birth scritificated serial" required>
                </div>  
                 <div class="col-md-12 form">
                    <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
                 </div>
                
                 <div class="col-md-12 form">
                        <p>Please select your gender:</p>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                 </div>

                 <div class="col-md-12 form">
                     <input class="form-control" name="password" placeholder="Create password" type="password" required>
                 </div>
                 
                 <div class="col-md-12 form">
                    <button type="submit" name="submit" class="btn btn-primary btn-block confirm-add">ADD</button>
                 </div>  
            </form>
        

      </div>
    </div>
  </div>
</section>



















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>
