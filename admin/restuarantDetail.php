<?php include 'header.php' ?>
<?php $restuarantID = $_GET['restuarantID']; ?>
    <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <div class="col-md-12">
            <table id="datatablesSimple" class="table table-sm">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                         $conn = mysqli_connect('localhost','root','','foodDB');

                         $foodSetQuery = "SELECT foods.ID as foodID,foods.foodName,foods.picture,restuarantFoodSet.restuarantID,restuarantFoodSet.foodID,restuarantFoodSet.price from foods INNER JOIN restuarantFoodSet on foods.ID=restuarantFoodSet.foodID WHERE restuarantFoodSet.restuarantID=".$restuarantID."";
                         $foodGetQuery = mysqli_query($conn, $foodSetQuery);
                        foreach ($foodGetQuery as $result){
                            printf('<tr>
                                <td>'.$result["foodName"].'</td>
                                <td>'.$result["price"].'</td>
                                </tr>');
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include 'footer.php' ?>