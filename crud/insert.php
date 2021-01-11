<?php
include 'con.php';
if(isset($_POST['submit'])){
	echo "Hello";
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

	// $insert = "SELECT * FROM `student`(`pname`,`email`,`sname`,`gender`,`bday`,`phone`,`yesno`,`address`,`city`,`zip`)VALUES (`$pname`,`$email`,`$sname`,`$gender`,`$bday`,`$phone`,`$yesno`,`$address`,`$city`,`$zip`)";
$sql = "INSERT INTO student (pname,email,sname,gender,bday,phone,yesno,address,city,zip)VALUES('".$pname."','".$email."','".$sname."','".$gender."','".$bday."','".$phone."','".$yesno."','".$address."','".$city."','".$zip."')";
	$query = mysqli_query($con,$sql);
	header("location:display.php");
}
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Registration Demo</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		body{
			text-align: center;
			margin: 100px;
			background-color: #1a1a1a;
		}
		.c1{
			font-size: 15px;
			font-weight: 700;
			height: auto;
			width: 600px;
			background-color: yellowgreen;
			padding: 10px;
			border-radius: 10px;
			box-shadow: 0px 15px 20px 10px black;

		}
		input{
			border-radius: 5px;
			border:none;
			/*height: 40px;*/
			border-bottom:2px solid black;
			padding-top: 15px;
		}
	</style>
</head>
<body>
	<div class="c1 container">
	<form action="index.php" method="post">
		<div class="form-group row">
    <label for="input" class="col-sm-4 col-form-label">Parents Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="input" placeholder="Enter Parents name">
    </div>
  </div>

		<div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="input" class="col-sm-4 col-form-label">Students  Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="input" placeholder="Enter Student name">
    </div>
  </div>
  <div class="form-group row">
    <label for="input" class="col-sm-4 col-form-label">Students  Gender</label>
    <div class="col-sm-8">
      <input type="radio" class="form-control" id="input" value="Male">
      <input type="radio" class="form-control" id="input" value="Male">
    </div>
  </div>
	</form>
</div>
</body>
</html> -->
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
/*body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  */
body{
			text-align: center;
			margin: 100px;
			background-color: #1a1a1a;
		}
		.c1{
			font-size: 15px;
			font-weight: 700;
			height: auto;
			width: 600px;
			background-color: yellowgreen;
			padding: 10px;
			border-radius: 10px;
			box-shadow: 0px 15px 20px 10px black;

		}
		input{
			border-radius: 5px;
			border:none;
			/*height: 40px;*/
			border-bottom:2px solid black;
			padding-top: 15px;
		}
</style>  
</head>  
<body>  
	<div class="c1">
<form method="POST" id="formm">  
  <div class="container">  
  <center>  <h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> Parents Name :</label>   
<input type="text" name="pname" placeholder= "Parents name" size="15" required />  <br><br> 
<label> Email Address: </label>   
<input type="email" name="email" placeholder="Email Address" size="15" required />   <br><br> 
<label> Student Name: </label>    
<input type="text" name="sname" placeholder="Students name" size="15"required />   <br><br> 
 
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  <br><br> 
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" placeholder="phone no." size="10"/ required>  <br><br> 
<label>Student Birthday:</label> 
<input type="date" name="bday"><br><br>


  <label>   
Do you want to recive all data :  
</label><br>  
<input type="radio" value="Yes" name="yesno" checked > Yes   
<input type="radio" value="No" name="yesno"> No   <br><br> 
<label>Current Address</label> 
<textarea  placeholder="Current Address" value="address" name="address" required>  
</textarea>  <br><br> 
   <label> City: </label>    
<input type="text" name="city" placeholder="city" required />   <br><br> 
<label> Zip Code: </label>    
<input type="text" name="zip" placeholder="Zip" size="15"required />   <br><br>
    <button type="submit" name="submit" id="bt" class="registerbtn">Register</button>    
</form> 
</div> 


</body>  
</html>  