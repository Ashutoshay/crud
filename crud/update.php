<?php
include 'con.php';

// if(isset($_POST['submit'])){
$pname = $_POST['pname'];
$email = $_POST['email'];
$sname = $_POST['sname'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$phone = $_POST['phone'];
$yesno = $_POST['yesno'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$id =  $_GET['id'];

	// $insert = "SELECT * FROM `student`(`pname`,`email`,`sname`,`gender`,`bday`,`phone`,`yesno`,`address`,`city`,`zip`)VALUES (`$pname`,`$email`,`$sname`,`$gender`,`$bday`,`$phone`,`$yesno`,`$address`,`$city`,`$zip`)";
$sql = "update student set id=$id,pname='$pname',email='$email',sname='$sname',gender='$gender',bday='$bday',phone='$phone',yesno='$yesno',address='$address',city='$city',zip='$zip' where id='$id'";
	$query = mysqli_query($con,$sql);

	header("location:display.php");
// }
?>
