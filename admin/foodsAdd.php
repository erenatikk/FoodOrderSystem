<?php 

$foodName = $_POST['foodName'];
$category = $_POST['category'];

$conn = mysqli_connect('localhost','root','','foodDB');
$sql = "INSERT INTO foods (cateogryID ,foodName,picture) values (".$category.",'.$foodName.','noImage.png')";
if(mysqli_query($conn, $sql)){
    header("Location: Index.php");
    die();
}


?>