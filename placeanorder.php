<?php include 'includes/indexHeader.php' ?>
<?php 

$restuarantID = $_GET['r_ID'];
$foodID = $_GET['f_ID'];
$totalPrice = $_GET['totalPrice'];
$town = $_GET['town'];
    $conn = mysqli_connect('localhost','root','','foodDB');
    $query = "SELECT * FROM restuarants where ID=".$restuarantID."";
    $getquery = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($getquery);
   $unvan = $result["restaurantName"];
   $foodName = $_GET['foodName'];

   $userID = $_SESSION['userID'];
?>

<section class="offer-dedicated-body mt-4 mb-4 pt-2 pb-2">
         <div class="container">
               <div class="col-md-12">
                  <div class="generator-bg rounded shadow-sm mb-4 p-4 osahan-cart-item">
                     <div class="d-flex mb-4 osahan-cart-item-profile">
                        <img class="img-fluid mr-3 rounded-pill" alt="osahan" src="img/2.jpg">
                        <div class="d-flex flex-column">
                           <h6 class="mb-1 text-white"><?php echo $unvan; ?>
                           </h6>
                           <p class="mb-0 text-white"><i class="icofont-location-pin"></i><?php echo $town ?></p>
                        </div>
                     </div>
                     <div class="bg-white rounded shadow-sm mb-2">
                        <div class="gold-members p-2 border-bottom">
                           <p class="text-gray mb-0 float-right ml-2"><?php echo $totalPrice ?> TL</p>
                         
                           <div class="media">
                              <div class="mr-2"><i class="icofont-ui-press text-danger food-item"></i></div>
                              <div class="media-body">
                                 <p class="mt-1 mb-0 text-black"><?php echo $foodName ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
        
                     <form method="post" action="sales.php">
                        <input name="food" value="<?php echo $foodID; ?>" hidden/>
                        <input name="restuarant" value="<?php echo $restuarantID; ?>" hidden/>
                        <input name="user" value="<?php echo $userID;  ?>" hidden/>
                        <input name="amount" value="<?php echo $totalPrice; ?>" hidden/>
                     <button type="submit" name="btnsales" class="btn btn-success btn-block btn-lg">PAY <?php echo $totalPrice ?> TL
                     <i class="icofont-long-arrow-right"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php include 'includes/indexFooter.php' ?>