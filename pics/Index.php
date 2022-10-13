
<?php include 'includes/indexHeader.php'?>
<section class="pt-5 pb-5 homepage-search-block position-relative">
         <div class="banner-overlay"></div>
         <div class="container">
            <div class="row d-flex align-items-center">
               <div class="col-md-12">
                  <div class="homepage-search-title">
                     <h1 class="mb-2 font-weight-normal"><span class="font-weight-bold">Meal'n Deal</span></h1>
                     <h5 class="mb-5 text-secondary font-weight-normal">Lists of top restaurants, cafes, pubs, and bars in in your region, based on trends</h5>
                  </div>
                  <div class="homepage-search-form">
                     <form class="form-noborder">
                        <div class="form-row">
                           <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                              <div class="location-dropdown">
                                 <i class="icofont-location-arrow"></i>
                                 <select class="custom-select form-control-lg">
                                 <?php
                                    $conn = mysqli_connect('localhost','root','','foodDB');
                                    $query = "SELECT * FROM foodcategory";
                                    $getquery = mysqli_query($conn,$query);
                       
                                        foreach($getquery as $sub_value){
                                            printf("<option value=".$sub_value["ID"].">".$sub_value["categoryName"]."</option>");
                                        }
                                 
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                              <a href="listing.html" class="btn btn-primary btn-block btn-lg btn-gradient">Search</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <section class="section pt-5 pb-5 products-section">
         <div class="container">
            <div class="section-header text-center">
               <h2>Popular Restaurants</h2>
               <span class="line"></span>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-carousel-four owl-theme">
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
                        <div class="item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="favourite-heart text-danger position-absolute"></div>
                              <div class="member-plan position-absolute"><span class="badge badge-dark">Restaurant</span></div>
                              <a href="restuarantDetail.php?r_ID='.$key_value["ID"].'">
                              <img src="'.$key_value["picture"].'" class="img-fluid item-img" style="height: 266px;">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="restuarantDetail.php?r_ID='.$key_value["ID"].'" class="text-black">'.$key_value["restaurantName"].'</a></h6>
                                 <p class="text-gray mb-3">'.$ilce.'</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        ');

                     }
                  ?>

                  </div>
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
               <div class="col-md-2 col-6 col-sm-4">
                  <h6 class="mb-3">About OE</h6>
                  <ul>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Culture</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Careers</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </div>
               <div class="col-md-2 col-6 col-sm-4">
                  <h6 class="mb-3">For Foodies</h6>
                  <ul>
                     <li><a href="#">Community</a></li>
                     <li><a href="#">Developers</a></li>
                     <li><a href="#">Blogger Help</a></li>
                     <li><a href="#">Verified Users</a></li>
                     <li><a href="#">Code of Conduct</a></li>
                  </ul>
               </div>
               <div class="col-md-2 m-none col-4 col-sm-4">
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
<?php include 'includes/indexFooter.php'?>