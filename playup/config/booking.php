<?php
include '../config/connector.php';
session_start();

if(isset($_POST['submit'])){
    $id_book=rand(100000,999999);
    $id_user=$_SESSION['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $service=$_POST['service'];
    $date=$_POST['date'];
    $duration=$_POST['duration'];
    $status = "me";
    

    mysqli_query($conn, "INSERT INTO book (id_book, id_user, name_book, phone_book, address_book, service_book, date_book, duration_book) VALUES ('$id_book', '$id_user', '$name', '$phone', '$address', '$service', '$date', '$duration')");
    
    header("location:../pages/order.php");
}

if($_GET!=null){
    $id = $_GET['i'];
    $status = $_GET['s'];
    
    if($status == "Delete"){
        mysqli_query($conn, "DELETE FROM book WHERE id_book='$id'");
    }else{
        mysqli_query($conn, "UPDATE book SET status_book='$status' WHERE id_book='$id'");
    }
    
    header("Location:../pages/order.php");
}

?>