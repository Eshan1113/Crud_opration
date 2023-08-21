<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<body style="background: url(img/5.jpg); background-size: cover; background-position: center;">
<div class="container my-5">
<h2 style ="color:white;">User Dashbord</h2>
<a href="index.php" class="btn btn-danger">
<i class="bi bi-house-door-fill"></i>Logout</a>

    <br>
    <table class="table">
    <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile Number</th>
                <th>NIC</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once('db_conn.php');
            $db_conn = connection();
            
            $query = "SELECT * FROM user_tb";
            $result = mysqli_query($db_conn, $query);
            
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr  class='table-primary'>
                        <td>{$row['id']}</td>
                        <td>{$row['User_name']}</td>
                        <td>{$row['User_email']}</td>
                        <td>{$row['User_mobile']}</td>
                        <td>{$row['User_NIC']}</td>
                    </tr>";
                
            }
            ?>
            
        </tbody>
    </table>
</div>




</body>

</html>