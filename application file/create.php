<?php

include_once('db_conn.php');
$db_conn = connection();

$username = "";
$useremail = "";
$userphone = "";
$usernic = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userphone = $_POST["userphone"];
    $usernic = $_POST["usernic"];

    do{
        if(empty($username)|| empty($useremail) || empty($userphone) || empty($usernic)){
            $errorMessage = "All the fields are required";
            break;
        }

        $insertSql = "INSERT INTO user_tb (User_name, User_email, User_mobile, User_NIC, User_status) 
        VALUES ('$username', '$useremail', '$userphone', '$usernic', 1)";
        
        $sqlresult = $db_conn->query($insertSql);
        
        if(!$sqlresult){
            $errorMessage = "Invalid query: ".$db_conn->error;
            break;
        }

        $username = "";
        $useremail = "";
        $userphone = "";
        $usernic = "";

        $successMessage = "User added correctly";

         header("Location:admin.php");

    }while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        label{
            color:white;
            font-weight:bolder;
        }
        h2{
            color:white;
            text-align:center;
        }
    </style>
</head>
<body style="background: url(img/6.jpg); background-size: cover; background-position: center;">
    <div class="container my-5">
        <h2>New User</h2><a href="admin.php" class="btn btn-warning">
  <i class="bi bi-house-door-fill"></i> Home</a>
  <a href="index.php" class="btn btn-danger">
  <i class="bi bi-house-door-fill"></i>Logout</a>
       
        <?php
        if(!empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>
        
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                <input type="text" name="username" id="name" class="form-control" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">E-mail</label>
                <div class="col-sm-6">
                <input type="email" name="useremail" id="email" class="form-control" value="<?php echo $useremail; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Mobile Number</label>
                <div class="col-sm-6">
                <input type="text" name="userphone" id="phone" class="form-control" value="<?php echo $userphone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">NIC</label>
                <div class="col-sm-6">
                <input type="text" name="usernic" id="text" class="form-control" value="<?php echo $usernic; ?>">
                </div>
            </div>

            <?php
            if(!empty($successMessage)){
                echo"
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            ?>


            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" value="">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-warning" href="admin.php" role="button">Cancel</a>
                </div>
            </div>
            

            

        </form>

    </div>
</body>
</html>