<?php 
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'database.inc.php';
    require_once 'function.inc.php';

    $emptyInputs = emptyInputsSignup($name, $email, $username, $pwd, $pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMatch($pwd, $pwdRepeat);
    $uidExists = uidExists($conn, $username, $email); 

    if ($emptyInputs !== false) {
        header("Location:../home/login.php?error=emptyinputs");
        exit();
    }

    if ($invalidUid !== false) {
        header("Location:../home/login.php?error=invalidUid");
        exit();
    }

    if ($invalidEmail !== false) {
        header("Location:../home/login.php?error=invalidEmail");
        exit();
    }

    if ($pwdMatch !== false) {
        header("Location:../home/login.php?error=passworddontmatch");
        exit();
    }

    if ($uidExists !== false) {
        header("Location:../home/login.php?error=uidExists");
        exit();
    }
    
    

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header('Location:../home/login.php');
}