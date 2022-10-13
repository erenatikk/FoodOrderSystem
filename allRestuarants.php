<?php include 'includes/indexHeader.php' ?>
<section class="breadcrumb-osahan pt-5 pb-5 bg-dark position-relative text-center">
         <h1 class="text-white">Offers Near You</h1>
         <h6 class="text-white-50">Best deals at your favourite restaurants</h6>
      </section>
      <section class="section pt-5 pb-5 products-listing">
         <div class="container">
            <div class="row d-none-m">
               <div class="col-md-12">
                  <?php 
                      $conn = mysqli_connect('localhost','root','','foodDB');
                      $query = "SELECT Count(*) as total FROM restuarants";
                      $getquery = mysqli_query($conn,$query);
                        $result = mysqli_fetch_assoc($getquery);
                      ?>
                     <h4 class="font-weight-bold mt-0 mb-3">OFFERS <small class="h6 mb-0 ml-2"><?php echo $result["total"];?> restaurants
                     </small>
                  </h4>
               </div>
            </div>
            <div class="row">
                 <?php
                     $conn = mysqli_connect('localhost','root','','foodDB');
                     $query = "SELECT * FROM restuarants";
                     $getquery = mysqli_query($conn,$query);
                     foreach($getquery as $key_value ){
                        $subQuery = "SELECT * FROM town where TownID=".$key_value["townID"]."";
                        $getSubQuery = mysqli_query($conn, $subQuery);
                        foreach ($getSubQuery as $subValue) {
                          $ilce = $subValue["TownName"];
                        }
                        printf('
                        
                        <div class="col-md-3 col-sm-12 mb-4 pb-2">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image">
                                    <div class="member-plan position-absolute"><span class="badge badge-dark">Restuarant</span></div>
                                    <a href="restuarantDetail.php?r_ID='.$key_value["ID"].'">
                                    <img src="'.$key_value["picture"].'" style="height:200px; width:400px;" class="img-fluid item-img">
                                    </a>
                                </div>
                                <div class="p-3 position-relative">
                                <div class="list-card-body">
                                <h6 class="mb-1"><a href="restuarantDetail.php?r_ID='.$key_value["ID"].'" class="text-black">'.$key_value["restaurantName"].'</a></h6>
                                <p class="text-gray mb-3">'.$ilce.'</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                              </div>
                                </div>
                                </div>
                            </div>
                            
                        ');

                     }
                  ?>

               
         </div>
         </div>
      </section>
      <section class="section pt-5 pb-5 text-center bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h5 class="m-0">Operate food store or restaurants? <a href="login.html">Work With Us</a></h5>
               </div>
            </div>
         </div>
      </section>
      <section class="footer pt-5 pb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-12 col-sm-12">
                  <h6 class="mb-3">Subscribe to our Newsletter</h6>
                  <form class="newsletter-form mb-1">
                     <div class="input-group">
                        <input type="text" placeholder="Please enter your email" class="form-control">
                        <div class="input-group-append">
                           <button type="button" class="btn btn-primary">
                           Subscribe
                           </button>
                        </div>
                     </div>
                  </form>
                  <p><a class="text-info" href="register.html">Register now</a> to get updates on <a href="offers.html">Offers and Coupons</a></p>
                  <div class="app">
                     <p class="mb-2">DOWNLOAD APP</p>
                     <a href="#">
                     <img class="img-fluid" src="img/google.png">
                     </a>
                     <a href="#">
                     <img class="img-fluid" src="img/apple.png">
                     </a>
                  </div>
               </div>
               <div class="col-md-1 col-sm-6 mobile-none">
               </div>
               <div class="col-md-2 col-4 col-sm-4">
                  <h6 class="mb-3">About OE</h6>
                  <ul>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Culture</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Careers</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </div>
               <div class="col-md-2 col-4 col-sm-4">
                  <h6 class="mb-3">For Foodies</h6>
                  <ul>
                     <li><a href="#">Community</a></li>
                     <li><a href="#">Developers</a></li>
                     <li><a href="#">Blogger Help</a></li>
                     <li><a href="#">Verified Users</a></li>
                     <li><a href="#">Code of Conduct</a></li>
                  </ul>
               </div>
               <div class="col-md-2 col-4 col-sm-4">
                  <h6 class="mb-3">For Restaurants</h6>
                  <ul>
                     <li><a href="#">Advertise</a></li>
                     <li><a href="#">Add a Restaurant</a></li>
                     <li><a href="#">Claim your Listing</a></li>
                     <li><a href="#">For Businesses</a></li>
                     <li><a href="#">Owner Guidelines</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="footer-bottom-search pt-5 pb-5 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <p class="text-black">POPULAR COUNTRIES</p>
                  <div class="search-links">
                     <a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a>  |  <a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a><a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a>  |  <a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a>
                  </div>
                  <p class="mt-4 text-black">POPULAR FOOD</p>
                  <div class="search-links">
                     <a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a> |  <a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a><a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a> |  <a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'includes/indexFooter.php' ?>