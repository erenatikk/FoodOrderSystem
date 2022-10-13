<?php 

$db = mysqli_connect('localhost', 'root', '', 'foodDB');
if (isset($_POST['btnsales'])) {

    $food = $_POST["food"];
    $restuarant = $_POST["restuarant"];
    $user = $_POST["user"];
    $amount = number_format($_POST["amount"], 8, '.');

    $query = "INSERT INTO foodSales (foodID,restuarantID,userID,amount) VALUES (".$food.",".$restuarant.",".$user.",".$amount.")";
    mysqli_query($db, $query);
    header('location: Index.php');
    die();
}

?>