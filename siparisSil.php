<?php 
    $salesID = $_GET['salesID'];
    $conn = mysqli_connect('localhost','root','','foodDB');
    $sql = "DELETE FROM `foodsales` WHERE ID=".$salesID."";
    if(mysqli_query($conn, $sql)){
        header("Location: Index.php");
        die();
    }
?>