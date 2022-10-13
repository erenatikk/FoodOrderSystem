<?php include 'includes/header.php'?>
   <div class="row">
      <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
         <h3 class="login-heading mb-4">New Account!</h3>
         <form method="post" action="register.php">
         <div class="form-label-group">
               <input name="namesurname" type="text" id="inputfullName" class="form-control" placeholder="Email address">
               <label for="inputfullName">Full Name</label>
            </div>
            <div class="form-label-group">
               <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address">
               <label for="inputEmail">Email address</label>
            </div>
            <div class="form-label-group">
               <input name="phoneNumber" type="number" id="inputPhone" class="form-control" placeholder="Email address">
               <label for="inputPhone">Phone Number</label>
            </div>
            <div class="form-label-group">
               <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password">
               <label for="inputPassword">Password</label>
            </div>
            <input name="reg_user" type="submit" value="Sign Up" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2" />
            <div class="text-center pt-3">
               Already have an Account? <a class="font-weight-bold" href="loginPage.php">Sign In</a>
            </div>
         </form>
      </div>
   </div>
<?php include 'includes/header.php'?>
