
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
                     <input name="phone" class="form-control" placeholder="Phone number" type="text">
            </div> 
          </div>

          <div class="row">
            <div class="col-md-12 form">
                     <input class="form-control" name="password" placeholder=" Password" type="password">
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
                     <input name="phone" class="form-control" placeholder="Phone number" type="text">
            </div> 
          </div>

          <div class="row">
            <div class="col-md-12 form">
                     <input class="form-control" name="password" placeholder=" Password" type="password">
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