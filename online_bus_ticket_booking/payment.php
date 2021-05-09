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
                            <a class="nav-link active" href="payment.php">Payment</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" href="e_ticket.php">E-ticket</a>
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


    <!-- payment from -->


<section class="payment-form">
    <div class="container">
        
        <div class="row">
          <div class="col-md-4 offset-4 sign">

            <form class="si" action="payment_confirm.php" method="POST">
              <div class="row">
              <p>Booked Sucessfully. Please Make Payment Through BKash , Nagad or Rocket. Enter Tansection ID to confirm your Seats with 1 hour.  </p>
              
              </div>
              <div class="row">
                <div class="col-md-12 form">
                         <input name="payment_code" class="form-control" placeholder="Enter Tansaction Code" type="text" required>
                </div> 
              </div>

              <div class="row">
                <div class="col-md-12 form">
                  <button type="submit" name="submit" class="btn btn-primary btn-block confirm">Payment Confirm</button>
                </div>
              </div>
           </form>
       
        </div>
       </div>
      </div>

   </section>
      
    

</body>
</html>