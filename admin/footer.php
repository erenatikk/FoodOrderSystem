<div class="modal fade" id="mdlRestuarantAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Restaurant Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="restuarantAdd.php">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Restuarant Name</label>
                  <input type="restuarantName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Town</label>
                  <select name="town" class="form-control">
                    <?php 
                         $conn = mysqli_connect('localhost','root','','foodDB');
                         $query = "SELECT * FROM town";
                         $getquery = mysqli_query($conn,$query);
            
                             foreach($getquery as $sub_value){
                                 printf("<option value=".$sub_value["TownID"].">".$sub_value["TownName"]."</option>");
                             }
                      
                    ?>
                  </select>   
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mdlFoodAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Food Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="foodsAdd.php">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Food Categorys</label>
                  <select name="category" class="form-control">
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
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Food Name</label>
                  <input type="text" name="foodName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mdlRestuarantFoodSet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Restuarant Food Set</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="restuarantFoodAdd.php">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Food</label>
                  <select name="foodID" class="form-control">
                    <?php 
                         $conn = mysqli_connect('localhost','root','','foodDB');
                         $query = "SELECT * FROM foods";
                         $getquery = mysqli_query($conn,$query);
            
                             foreach($getquery as $sub_value){
                                 printf("<option value=".$sub_value["ID"].">".$sub_value["foodName"]."</option>");
                             }
                      
                    ?>
                  </select>                   
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Restuarant</label>
                  <select name="restuarantID" class="form-control">
                    <?php 
                         $conn = mysqli_connect('localhost','root','','foodDB');
                         $query = "SELECT * FROM restuarants";
                         $getquery = mysqli_query($conn,$query);
            
                             foreach($getquery as $sub_value){
                                 printf("<option value=".$sub_value["ID"].">".$sub_value["restaurantName"]."</option>");
                             }
                      
                    ?>
                  </select>   
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Amount</label>
                  <input type="text" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


