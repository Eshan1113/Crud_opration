<?php

include_once('userFunction.php');

if(isset($_POST['btnlogin'])){
    $result = Authentication($_POST['useremail'],$_POST['userpassword']);
    echo($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bsc3501</title>
    <link rel="stylesheet" href="css\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body style="background: url(img/2.jpg);  background-size: cover; background-position: center;">
    <div class="container" style="margin-top: 2rem;">
    <div class="row">
        <div class="col-md-6 mt-6">
            <div class="card" style="background-color:rgba(0,0,0,.55);">
                <div class="card-header">
                <style>
        h3 {
            color: white;
        }
    </style>
                    <Center><h3>Login Page</h3></Center>
                </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group mt-2">
                                <label for="">Enter e-mail</label>
                                <input type="text" name="useremail" id="email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Enter password</label>
                                
                                <input type="password" name="userpassword" id="password" class="form-control">
                                <br>
                           
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" value="Login" name="btnlogin" class="btn btn-outline-info">
                                <input type="reset" value="Reset" name="btnlogin" class="btn btn-outline-warning">
                            </div>
                            <br><br><br><br><br>
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="background-color:rgba(0,0,0,.55);">
                <div class="card-header">
                <center><h3>Registration Page</h3></center>
                </div>
                    <div class="card-body">
                        <form action="registration.php" method="post">
                       
                            <div class="form-group mt-2">
                                <label for="">Enter username</label>
                                <input type="text" name="username" id="name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Enter your e-mail</label>
                                <input type="email" name="useremail" id="email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Enter password</label>
                                <input type="password" name="userpassword" id="password" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Enter mobile number</label>
                                <input type="text" name="userphone" id="phone" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Enter your NIC</label>
                                <input type="text" name="usernic" id="text" class="form-control">
                            </div> 
                            <div class="form-group mt-2">
                                <input type="submit" name="btnSave" id="btnSave" value="Register" class="btn btn-outline-success">
                                <input type="reset" value="Clear" class="btn btn-outline-danger">
                            </div> 
                                       
                        </form>
                    </div>

            </div>

        </div>
    </div>
    </div>
   
   <footer class="footer  d-flex flex-column-reverse align-items-center" id="contact">
        <div class="credit">
         <h3>Created by<span>Eshan Dananjaya</span> |all rights reserved !</h3> 
        </div>
        <div class="social">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"style="color: #3b5998;"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"style="color: #55ACEE;"></i></a>
        <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"style="color: #25d366;"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"style="color: #ed302f;"></i></a>
      
        </div>
</footer>
</body>
</html>