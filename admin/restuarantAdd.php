<?php 

$restuarantName = $_POST['restuarantName'];
$town = $_POST['town'];

$conn = mysqli_connect('localhost','root','','foodDB');
$sql = "INSERT INTO restuarants (townID,restaurantName,picture) values (".$town.",'.$restuarantName.','noImage.png')";
if(mysqli_query($conn, $sql)){
    header("Location: Index.php");
    die();
}


?>