<?php

include_once('db_conn.php');



function userRegistration($username, $useremail, $userpassword, $userphone, $usernic){
    $db_conn = connection();

    $insertSql = "INSERT INTO user_tb (User_name, User_email, User_mobile, User_NIC, User_status) 
    VALUES ('$username', '$useremail', '$userphone', '$usernic', 1)";

    $sqlresult = mysqli_query($db_conn, $insertSql);

    if (!$sqlresult) {
        echo "Database error: " . mysqli_error($db_conn);
    }

    if ($sqlresult) {
        $newPassword = md5($userpassword);

        $insertlogin = "INSERT INTO login_tb (Login_email, Login_pswrd, Login_role, Login_status) 
        VALUES ('$useremail', '$newPassword', 'user', 1)";

        $loginresult = mysqli_query($db_conn, $insertlogin);

        if (!$loginresult) {
            echo "Database error: " . mysqli_error($db_conn);
        } else {
            return "Your Registration Successful!";
        }
    } else {
        return "Please Try Again!";
    }
}



function Authentication($useremail, $userpassword) {
    $db_conn = connection();
    $sqlfetchuser = "SELECT * FROM login_tb WHERE Login_email = '$useremail';";
    $sqlresult = mysqli_query($db_conn, $sqlfetchuser);

    if (!$sqlresult) {
            echo "Database error: " . mysqli_error($db_conn);
        }

        $newpass = md5($userpassword);

        $norow = mysqli_num_rows($sqlresult);



        if($norow > 0){
            $rec = mysqli_fetch_assoc($sqlresult);

        if($rec['Login_pswrd']== $newpass){
            if($rec['Login_status'] == 1){
                if($rec['Login_role'] == 'admin'){
                    header('location:admin.php');
                }else{
                    header('location:user.php');
                }
            }else{
                return("Your account has been diactivated!");
            }
        }else{
            return("Password is incorrect!");
        } 
    }else{
        return("No records are found!");
    }

}
?>