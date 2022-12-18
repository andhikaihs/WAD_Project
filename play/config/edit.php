<?php 
include ("connector.php");

$id_item = $_POST['id_item'];
$name = $_POST['name'];
$type = $_POST['type'];
$merk = $_POST['merk'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$status = $_POST['status'];

$type1 = 'type';
$desc1 = 'desc';
$status1 = 'status';
$image1 = 'image';
$merk1 = 'merk';

$filename = $_FILES['img']['name'];
$image = $id_item.'_'.$filename;
move_uploaded_file($_FILES['img']['tmp_name'],'../asset/image/item/'.$image);

$query = "UPDATE item SET name_item='$name', $type1='$type', WHERE id_item='$id_item'";
mysqli_query($conn, "UPDATE item SET name_item='$name', $type1='$type', merk='$merk', $desc1='$desc', price='$price' WHERE id_item='$id_item'");

header("location:../pages/Detail.php?id=$id_item");

?>