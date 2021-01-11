<?php
include 'con.php';
$id = $_GET['id'];
$q = "delete from student where id=$id";
mysqli_query($con,$q);
header('location:display.php');
?>