<?php 
if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'database.inc.php';
    require_once 'function.inc.php';

    if (emptyInputsLogin($username, $pwd) !== false) {
        exit();
    }
    loginUser($conn, $username, $pwd);

}
else {
    header('Location:../home/login.php');
} 