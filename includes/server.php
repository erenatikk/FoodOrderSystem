<?php
    session_start();
$namesurname = "";
$email    = "";
$errors = array();



$db = mysqli_connect('localhost', 'root', '', 'foodDB');

if (isset($_POST['btnsales'])) {

    $food = $_POST["food"];
    $restuarant = $_POST["restuarant"];
    $user = $$_SESSION['userID'];
    $amount = $_POST["amount"];



    $query = "INSERT INTO foodSales (foodID,restuarantID,userID,amount) VALUES ('".$food."','".$restuarant."','".$user."','".$amount."')";
    mysqli_query($db, $query);
    header('location: Index.php');
    die();
}
if (isset($_POST['btnsales'])) {

    $food = mysqli_real_escape_string($db, $_POST["food"]);
    $restuarant = mysqli_real_escape_string($db, $_POST["restuarant"]);
    $user = mysqli_real_escape_string($db, $_POST["user"]);
    $amount = mysqli_real_escape_string($db, $_POST["amount"]);


    $query = "INSERT INTO foodSales (foodID,restuarantID,userID,amount) VALUES (".$food.",".$restuarant.",".$user.",".$amount.")";
    mysqli_query($db, $query);
    header('location: Index.php');
    die();
}
// REGISTER USER
if (isset($_POST['reg_user'])) {

    $food = mysqli_real_escape_string($db, $_POST['namesurname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
    $password = md5($password);

    $query = "INSERT INTO users (namesurname, phone, email, password) VALUES('$namesurname', '$phoneNumber', '$email', '$password')";
    mysqli_query($db, $query);
    header('location: loginPage.php');
    die();
}
    //LOGIN   
    if (isset($_POST["login_user"])) {
        
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = md5($password);

        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (empty($email)) {
            array_push($errors, "email is required");
        }

        if (count($errors) == 0) {
            $query = "SELECT ID FROM users WHERE password='$password' AND email ='$email'";
            $results = mysqli_query($db, $query);
            $rowFatch = mysqli_fetch_assoc($results);
            $_SESSION['userID'] = $rowFatch["ID"];
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['namesurname'] = $namesurname;
                $_SESSION['email'] = $email;
              
                $_SESSION['success'] = "You are now logged in";
                header('location: Index.php');
                die();
                
                
            }else {
                array_push($errors, "Wrong password/email combination");
            }
        }
    }
    
   
?>

