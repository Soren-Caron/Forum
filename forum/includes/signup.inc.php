<?php
include_once 'dbh.inc.php';
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
    header("Location: ../signup.php?signup=empty");
    exit();
}
else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?signup=email");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            header("Location: ../signup.php?signup=usertaken");
            exit();
        }
        else{
            $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(first,last,email,uid,pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
            mysqli_query($conn, $sql);
            header("Location: ../signup.php?signup=success");
            exit();
        }
    }
}
