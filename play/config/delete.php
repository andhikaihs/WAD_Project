<?php 
include("connector.php");

$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM item WHERE id_item=$id");

header("location:../pages/ListGame.php");
?>