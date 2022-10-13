<?php 

$restuarant = $_POST['restuarantID'];
$foodID = $_POST['foodID'];
$amount = number_format($_POST["amount"], 8, '.');

$conn = mysqli_connect('localhost','root','','foodDB');
$sql = "INSERT INTO restuarantfoodset (restuarantID,foodID ,price) values (".$restuarant.",".$foodID.",".$amount.")";
if(mysqli_query($conn, $sql)){
    header("Location: Index.php");
    die();
}

?>