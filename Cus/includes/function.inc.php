<?php 
$result;
function emptyInputsSignup($name, $email, $username, $pwd, $pwdRepeat){
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
  
}

function invalidUid($username){
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
   
    
}


function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
 
}

function pwdMatch($pwd, $pwdRepeat){
    if ($pwd !== $pwdRepeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;

}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../home/login.php?error=stmpfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }else{
            return false;
        }
        mysqli_stmt_close($stmt);
            
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../home/login.php?error=stmpfailed");
            exit();
        }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../home/login.php?error=none");
    exit();
    
}

//Login function//

function emptyInputsLogin($username, $pwd){
    if(empty($username) || empty($pwd) ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
  
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists == false){
        header("Location:../home/login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd == false){
            header("Location:../home/login.php?error=wronglogin11");
            exit();
    }elseif($checkPwd == true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersname"];
        header("Location:../home/index.php");
        exit();
    }
}