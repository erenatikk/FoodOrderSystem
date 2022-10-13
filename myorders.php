<?php include 'includes/indexHeader.php' ?>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <h3>Siparişlerim</h3>
      </div>
      <div class="col-md-12">
         <table class="table table-sm">
            <thead>
               <tr>
                  <th>Food Name</th>
                  <th>Amount</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $userID = $_SESSION['userID'];
                  $conn = mysqli_connect('localhost','root','','foodDB');
                  $sql = "select foods.ID,foods.foodName,foodsales.ID As salesID,foodsales.userID,foodsales.amount from foodsales INNER JOIN foods on foodsales.foodID=foods.ID WHERE foodsales.userID=".$userID.";";
                  $getquery = mysqli_query($conn,$sql);
                   foreach ($getquery as $sonuc) {
                     printf('
                        <tr>
                        <td>'.$sonuc["foodName"].'</td>
                        <td>'.$sonuc["amount"].'</td>
                        <td><a href="siparisSil.php?salesID='.$sonuc["salesID"].'" class="btn btn-danger btn-sm btn-block">Sil</a></td>
                        </tr>
                     ');
                  }
               ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<?php include 'includes/indexFooter.php' ?>