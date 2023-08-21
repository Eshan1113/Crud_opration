<?php
include_once('db_conn.php');
$db_conn = connection();

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $deleteSql = "DELETE FROM user_tb WHERE id=$id";
    $db_conn->query($deleteSql);
}

header("location:admin.php");
exit;
?>