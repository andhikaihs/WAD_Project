<?php 
include ("connector.php");

$id_item = rand(1000,9999);
$name = $_POST['name'];
$type = $_POST['type'];
$merk = $_POST['merk'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$status = $_POST['status'];

$filename = $_FILES['img']['name'];
$image = $id_item.'_'.$filename;
move_uploaded_file($_FILES['img']['tmp_name'],'../asset/image/item/'.$image);

if (!mysqli_query($conn, "INSERT INTO item VALUES ('$id_item','$name','$type','$merk','$desc','$price','$image','$status')")){
    echo ("Error description: " . mysqli_error($conn));
}

header("location:../pages/ListGame.php");

?>