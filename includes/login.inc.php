<?php
session_start();

if(isset($_POST['submit'])){
    include "dbh.inc.php";
    $uid = ($_POST['uid']);
    $pwd = ($_POST['pwd']);

    if (empty($uid) || empty($pwd)){
        header("Location: ../index.php?login=empty");
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE uid='$uid' OR email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: ../index.php?login=error");
            exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($pwd, $row['pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];

                    $_SESSION['username'] = $uid;

                    header("Location: ../logged.php?login=success");
                }

            }

        }
    }
}



