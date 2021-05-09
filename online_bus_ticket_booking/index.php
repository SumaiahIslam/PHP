
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

        

        <header class="Nav-header">
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
                            <a class="nav-link active" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="booking.php">Booking</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="available_service.php">Availeable root</a>
                          </li>
                            <button type="button" class="btn btn-primary c-btn" data-toggle="modal" data-target="#staticBackdrop">Sign In</button>
                          <button type="button" class="btn btn-primary c-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sign Up</button>
                           
                           <button type="button" class="btn btn-primary c-btn" data-toggle="modal" data-target="#myModal">Admin</button>

                           <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                          </li>
                        </ul>

                        

                       </div>
                  </nav>
                </div>      
              </div>

               <div class="container">
                 <div class="row banner">
                  <div class="col-md-12">
                    <h1>Online Bus Ticket Booking Portal</h1>
                    <p>Eassy Bus Solution</p>
                   </div>
              </div>   
               </div>
      </header>

<!------------------------------------Pop Up Sign Up---------------------------------->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <section class="sign_up_form">
        <div class="container">
         <div class="row">
           <div class="col-md-4 offset-4 registration">
             <div class="col-md-12 ref" >
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>
                 <p class="rf">Sign Up Form</p>
             </div>




            <form action="signup.php" method="POST">
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
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other" required>
                        <label for="other">Other</label>
                 </div>

                 <div class="col-md-12 form">
                     <input class="form-control" name="password" placeholder="Create password" type="password" required>
                 </div>
                 
                 <div class="col-md-12 form">
                    <button type="submit" name="submit" class="btn btn-primary btn-block confirm"> Sign Up </button>
                 </div>  
            </form>
        


          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
</div>
<!------------------------------------Pop Up Sign In---------------------------------->



<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
   
     <section class="sign-form">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-4 sign">
            <div class="log">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
              </button>
                <p class="lnp">Sign In</p>
            </div>


      <div class="modal-content">
         <form class="si" action="signin.php" method="POST">
          <div class="row">
            <div class="col-md-12 form">
                     <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
            </div> 
          </div>

          <div class="row">
            <div class="col-md-12 form">
                     <input class="form-control" name="password" placeholder=" Password" type="password" required>
             </div>
          </div>
        
          <div class="row">
            <div class="col-md-12 form">
              <button type="submit" name="submit" class="btn btn-primary btn-block confirm"> Sign In  </button>
         </div>
          </div>

         <div class="row">
           <div class="fop">
              <a href="#"><p class="fp">Forget Password?</p></a>
         </div>
         </div>

           </form>
        </div>
        </div>
              
        </div>
      </div>
   </section>
 </div>


</div>

<!------------------------------------Admin Sign In pop up---------------------------------->



<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLevel" aria-hiddLevelen="true">
   <div class="modal-dialog">
   
     <section class="sign-form">
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-4 sign">
            <div class="log">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
              </button>
                <p class="lnp">Admin</p>
            </div>


      <div class="modal-content">

         <form class="si" action="admin_log.php" method="POST">
          <div class="row">
            <div class="col-md-12 form">
                     <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
            </div> 
          </div>

          <div class="row">
            <div class="col-md-12 form">
                     <input class="form-control" name="password" placeholder=" Password" type="password" required>
             </div>
          </div>
        
          <div class="row">
            <div class="col-md-12 form">
              <button type="submit" name="submit" class="btn btn-primary btn-block confirm"> Sign In</button>
         </div>
          </div>

         <div class="row">
           <div class="fop">
              <a href="#"><p class="fp">Forget Password?</p></a>
         </div>
         </div>

       </form>


        </div>
        </div>
              
        </div>
      </div>
   </section>
 </div>


</div>

<!------------------------------------Admin Sign In pop up end---------------------------------->

<!------------------------------------Ticket search start---------------------------------->


  <section class="ticket-search">
    <div class="container">
      <div class="row">
        <div class="ticket">
             <form action="search_ticket_info.php" method="POST">
        <div class="col-md-3">
           <label for="Journey-Date">Journey Start</label>
              <select class="form-control from" id="From" name="p_from" required>
                          <option selected hidden=""> From</option>
                          <option>Dhaka</option>
                          
              </select>
        </div>
        <div class="col-md-3">
            <label for="Journey-Date">Destination</label>
               <select class="form-control to" id="To" name="p_to" required>
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
                          <option>Kurigram</option>
              </select>
         </div>
          <div class="col-md-3">
                    <label for="Journey-Date" class="jd">Journey Date</label>
                    <input type="date" class="date" id="b=join" name="p_date" required>
         </div>
         <div class="col-md-3">
                   <label for="appt" class="jt">Journey Time</label>
                   <input type="time" class="time" id="appt" name="p_time" required>
         </div>
          
        </div>
       
         <div class="row">
           <div class="col-md-2">
                 <button class="btn btn-outline-success search-btn" type="submit" name="submit">Search</button>
              
         </div>
         </div>
         
       </form>
      </div>
    </div>
 </section>


<!------------------------------------Ticket search End---------------------------------->


  <!--------------------------Service----------------------------->

   <section class="service">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Why Us</h1>
            <div class="divider"></div>
          </div>
        <div class="row cover">
         <div class="col-md-4">
            <p class="num">200</p>
            <h2>Ticket available</h2>
            <h4> per day</h4>        
          </div>
          <div class="col-md-4">
            <p class="num">30</p>
            <h3>District Cover</h3>        
          </div>
          <div class="col-md-4">
            <p class="num">1000</p>
            <h3>Happy Customer</h3>        
          </div>
        </div>
      </div>
     </div>
  </section>

  <!--------------------------WE Promise----------------------------->

  <section class="promise">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>WE PROMISE</h1>
            <div class="divider"></div>
        </div>
      </div>
        <div class="row box">
          <div class="col-md-3 box-color-1">
                 <i class="fa fa-usd" aria-hidden="true"></i>
                  <h3>Guaranteed Refund</h3>
                  <p>Travel without tension. Your money is safe with us.</p>
        </div>
        <div class="col-md-3 box-color-2">
                  <i class="fa fa-address-card-o" aria-hidden="true"></i>
                  <h3>E-Ticket</h3>
                  <p>E-TICKET is enough. Go paperless, no fear of losing your tickets.</p>
        </div>
        <div class="col-md-3 box-color-3">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  <h3>Insure Security</h3>
                  <p>Travel Bangladesh Feel Free.</p>
        </div>
        </div>
        
      </div>
   
  </section>




<!--------------------------payment available----------------------------->

<section class="payment-available">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Payment Flexible</h1>
            <div class="divider"></div>
        </div>
      </div>
        <div class="row box">
          <div class="col-md-3 box-color-1">
               <img src="images/Bkash.jpeg"> 
        </div>
        <div class="col-md-3 box-color-2">
               <img src="images/roket.jpg">   
        </div>
        <div class="col-md-3 box-color-3">
                 <img src="images/nagad.jpg">
        </div>
        </div>
        
      </div>
   
  </section>


<!-------------------------payment available----------------------------->













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