
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
                            <a class="nav-link active" href="#">Service Add</a>
                          </li>
                          <li>
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

  <!------------------------------------banner start-------------------------------->
   <section class="booking-body">
    
  </section>

  <!------------------------------------banner End-------------------------------->


<!------------------------------------Booking Form-------------------------------->

    <section class="adding-form">
        <div class="container">
          <div class="row">
            <div class="col-md-4 offset-4 adding">
              <div class="col-md-12 add" >
                <p>Service Add</p>
              </div>
              
              <form action="add_bus_ticket_info.php" method="POST">

                 <div class="col-md-12 form">
                        <select class="form-control" id="From" name="p_from" required>
                          <option selected hidden=""> From</option>
                          <option>Dhaka</option>
                          
                        </select>
                 </div>

                 <div class="col-md-12 form">
                        <select class="form-control" id="To" name="p_to" required>
                          <option selected hidden=""> To</option>
                          <option>Comilla</option>
                          <option>Feni</option>
                          <option>Khagrachhari</option>
                          <option>Noakhali</option>
                          <option>Rangamati</option>
                          <option>Jamalpur</option>
                          <option>Sherpur</option>
                          <option>Kushtia</option>
                          <option>Meherpur</option>
                          <option>Sirajganj</option>
                          <option>Gaibandha</option>
                          <option>Panchagarh</option>
                          <option>Sunamganj</option>
                          

                        </select>
                   </div>  

                  <div class="col-md-12 form ">
                          <label for="Jonining-Date">p_date:</label>
                          <input type="date" id="b=join" name="p_date" required>
                        
                   </div>

                    <div class="col-md-12 form ">
                         <label for="appt">Time:</label>
                         <input type="time" id="appt" name="p_time" required>
                    </div> 

                    <div class="col-md-12 form">

                     <input type="text" id="ticket" name="ticket_price" class="form-control" placeholder=" Ticket_price" required>

                    </div> 
                  
                  <div class="col-md-12 form">
                     <input type="text" id="ticket" name="ticket" class="form-control" placeholder="Number Of Ticket" required >
                  </div> 
                  
                  <div class="row">
                    <div class="col-md-12 form">
                      <button type="submit" name="submit" class="btn btn-primary btn-block confirm-service" required >ADD</button>
                   </div> 
                  </div> 

              </form>
            </div>
          </div>
        </div>
</section>
<!------------------------------------Booking Form End- ------------------------------->

      <!------------------------------------Footer---------------------------------->
<<footer>
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
