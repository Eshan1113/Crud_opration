<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <link rel="stylesheet" href="css\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body style="background: url(img/7.jpg); background-size: cover; ">
<div class="container my-5">
    <h2 style ="color:white;">Admin Dashbord</h2>
    <a class="btn btn-primary" href="create.php" role="button">Add User</a>
    <a href="index.php" class="btn btn-danger">
  <i class="bi bi-house-door-fill"></i>Logout
</a>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile Number</th>
                <th>NIC</th>
                <th>Edit & Delete</th>
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
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                
            }
            ?>
            
        </tbody>
    </table>
</div>



</body>
</html>