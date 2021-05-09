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
                            <a class="nav-link" href="booking.php">Booking</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" href="available_service.php">Availeable root</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link active" href="e_ticket.php">E-ticket</a>
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




<section class="header-E-ticket">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h1>Your Journey E-Ticket</h1>
        <p>Starting place: Gabtoli Bus Terminal</p>
      </div>
    </div>
  </div>
</section>



<section class="E-ticket">
  <div class="container">
    
    <div class="row">
      <div class="col-md-10 offset-1">
        <table>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Journey From</th>
          <th>Destination</th>
          <th>Journey date</th>
          <th>Journey Time</th>
          <th>Ticket</th>
          <td></td>
        </tr>
        <tr>
          <td>Sumaiah</td>
          <td>01517006325</td>
          <td>Dhaka</td>
          <td>Feni</td>
          <td>28-08-2020</td>
          <td>09:30 P.M</td>
          <td>2</td>
          <td><button type="submit" name="print" class="btn btn-primary btn-block">Print</button></td>
        </tr>
  
     </table>

      </div>
    </div>
  </div>
</section>
<!--------------------------Footer----------------------------->

 

 <footer>
   <div class="container">
     <div class="row header">
       <div class="col-md-4">
        <h3>Company Info</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
       </div>
       <div class="col-md-4">
        <h3>Service</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
       </div>
       <div class="col-md-4">
        <h3>Contact</h3>
        <p>+880 1000000000</p>
       </div>
     </div>
     <div class="row reserved">
       <div class="col-md-12">
         <p>© 2020 online Ticket. All rights reserved.</p>
       </div>
     </div>
  </div>
 </footer>
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>


    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  



  </body>
  </html>