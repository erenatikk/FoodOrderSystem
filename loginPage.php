
<?php include 'includes/header.php'?>

         <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
               <h3 class="login-heading mb-4">Welcome back!</h3>
               <form method="post" action="loginPage.php">
                  <div class="form-label-group">
                     <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
                     <label for="inputEmail">Email address</label>
                  </div>
                  <div class="form-label-group">
                     <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                     <label for="inputPassword">Password</label>
                  </div>
                  
                  <input type="submit" name="login_user" value="Sign In" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2"/>
                  <div class="text-center pt-3">
                     Don’t have an account? <a class="font-weight-bold" href="register.php">Sign Up</a>
                  </div>
               </form>
               
            </div>
         </div>
<?php include 'includes/footer.php'?>
