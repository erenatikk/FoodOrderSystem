<?php include 'includes/indexHeader.php' ?>
<?php 
   $restuarantID = $_GET['r_ID'];
   $conn = mysqli_connect('localhost','root','','foodDB');
   $query = "SELECT * FROM restuarants where ID=".$restuarantID."";
   $getquery = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($getquery);
   $unvan = $result["restaurantName"];
   $picture = $result["picture"];
   $r_TownID = $result["townID"];
   $r_ID = $result["ID"];

   $townQuery = "SELECT * FROM town where TownID=".$r_TownID."";
   $townGetQuery = mysqli_query($conn,$townQuery);
   $townResult = mysqli_fetch_assoc($townGetQuery);
   $town = $townResult["TownName"];

   $foodSetQuery = "SELECT foods.ID,foods.foodName,foods.picture,restuarantFoodSet.restuarantID,restuarantFoodSet.foodID,restuarantFoodSet.price from foods INNER JOIN restuarantFoodSet on foods.ID=restuarantFoodSet.foodID WHERE restuarantFoodSet.restuarantID=".$restuarantID."";
   $foodGetQuery = mysqli_query($conn, $foodSetQuery);
?>
<style>
   .foodImg{
      width: 100% !important;
      height: 265px !important;
   }
</style>
<section class="restaurant-detailed-banner">
         <div class="text-center">
            <img class="img-fluid cover" >
         </div>
         <div class="restaurant-detailed-header">
            <div class="container">
               <div class="row d-flex align-items-end">
                  <div class="col-md-8">
                     <div class="restaurant-detailed-header-left">
                        <img class="img-fluid mr-3 float-left" alt="osahan" src="<?php echo $picture ?>">
                        <h2 class="text-white"><?php echo $unvan ?></h2>
                        <p class="text-white mb-1"><i class="icofont-location-pin"></i> <?php echo $town ?> <span class="badge badge-success">OPEN</span>
                        </p>
                        
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="restaurant-detailed-header-right text-right">
                        <button class="btn btn-success" type="button"><i class="icofont-clock-time"></i> 25–35 min
                        </button>
                        <h6 class="text-white mb-0 restaurant-detailed-ratings"><span class="generator-bg rounded text-white"><i class="icofont-star"></i> 3.1</span> 23 Ratings  <i class="ml-3 icofont-speech-comments"></i> 91 reviews</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div> 
      </section>
      <section class="offer-dedicated-nav bg-white border-top-0 shadow-sm">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <span class="restaurant-detailed-action-btn float-right">
                  <button class="btn btn-light btn-sm border-light-btn" type="button"><i class="icofont-heart text-danger"></i> Mark as Favourite</button>
                  <button class="btn btn-light btn-sm border-light-btn" type="button"><i class="icofont-cauli-flower text-success"></i>  Pure Veg</button>
                  <button class="btn btn-outline-danger btn-sm" type="button"><i class="icofont-sale-discount"></i>  OFFERS</button>
                  </span>
                  <ul class="nav" id="pills-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-order-online-tab" data-toggle="pill" href="#pills-order-online" role="tab" aria-controls="pills-order-online" aria-selected="true">Order Online</a>
                     </li>
                    
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="offer-dedicated-body pt-2 pb-2 mt-4 mb-4">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-dedicated-body-left">
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-order-online" role="tabpanel" aria-labelledby="pills-order-online-tab">

                     
                           <div class="row">
                              <h5 class="mb-4 mt-3 col-md-12">All Foods</h5>
                              <?php 
                                    foreach ($foodGetQuery as $f_Set) {
                                       printf('<div class="col-md-4 col-sm-6 mb-4">
                                       <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                          <div class="list-card-image">
                                             <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                             <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                             <a href="#">
                                             <img src="'.$f_Set["picture"].'" class="img-fluid item-img foodImg">
                                             </a>
                                          </div>
                                          <div class="p-3 position-relative">
                                             <div class="list-card-body">
                                                <h6 class="mb-1"><a href="#" class="text-black">'.$f_Set["foodName"].'</a></h6>
                                                <p class="text-gray time mb-0"><a class="btn btn-link btn-sm pl-0 text-black pr-0" href="#">'.$f_Set["price"].'</a> <span class="badge badge-success">NEW</span> <span class="float-right"> 
                                                   <a class="btn btn-outline-secondary btn-sm" href="placeanorder.php?r_ID='.$restuarantID.'&f_ID='.$f_Set["ID"].'&totalPrice='.$f_Set["price"].'&town='.$town.'&foodName='.$f_Set["foodName"].'">place an order</a>
                                                   </span>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>');                                    
                                 }
                             
                              ?>
                             
                           </div>

                        </div>
                     
                     </div>
                  </div>
               </div>

         </div>
      </section>
   

<?php include 'includes/indexFooter.php' ?>