<?php include 'header.php' ?>
    <div class="container" style="margin-top: 1rem;">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary">Food Set Of <br> Restuarant</button>
                <button type="button" class="btn btn-primary">Food Set Of <br> Restuarant</button>
            </div>
        </div>
        <div class="row" style="margin-top: 1rem;">
            <div class="col-md-12">
                <table id="datatablesSimple" class="table table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Restuarant Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                         $conn = mysqli_connect('localhost','root','','foodDB');
                         $query = "SELECT * FROM restuarants";
                         $getquery = mysqli_query($conn,$query);
            
                             foreach($getquery as $sub_value){
                                 printf('<tr>
                                    <td>'.$sub_value["ID"].'</td>
                                    <td>'.$sub_value["restaurantName"].'</td>
                                    <td><a href="#" class="btn btn-danger">Delete</a> <a href="restuarantDetail.php?restuarantID='.$sub_value["ID"].'" class="btn btn-warning">Detail</a></td>
                                 </tr>');
                             }
                      
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>