


<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
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
<body>  <?php 
   include 'con.php';
  $id = $_GET['id'];
?>
	<div class="c1">
<form action="update.php?id=<?php echo $_GET['id']; ?>" method="POST">  
  <div class="container">  
  <center>  <h1> Update Registeration Form</h1> </center>  
  <?php 
  // include 'con.php';
  // $id = $_GET['id'];
  $sql = "SELECT * FROM student WHERE id = {$id}";
  $result = mysqli_query($con,$sql) or die("Query Unsuccessfull");

  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
  ?>
  <hr>  
  <label> Parents Name :</label>   
<input type="text" name="pname" value="<?php echo $row['pname']; ?> " placeholder= "Parents name" size="15" required />  <br><br> 
<label> Email Address: </label>   
<input type="email" name="email" value="<?php echo $row['email']; ?> " placeholder="Email Address" size="15" required />   <br><br> 
<label> Student Name: </label>    
<input type="text" name="sname" value="<?php echo $row['sname']; ?> " placeholder="Students name" size="15"required />   <br><br> 
 
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="<?php echo $row['gender']; ?> " name="gender" checked > Male   
<input type="radio" value="<?php echo $row['gender']; ?> " name="gender"> Female   
<input type="radio" value="<?php echo $row['gender']; ?> " name="gender"> Other  <br><br> 
  
</div>  
<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" value="<?php echo $row['phone']; ?> " placeholder="phone no." size="10"/ required>  <br><br> 
<label>Student Birthday:</label> 
<input type="date" name="bday" value="<?php echo $row['bday']; ?> "><br><br>


  <label>   
Do you want to recive all data :  
</label><br>  
<input type="radio"  name="yesno" value="<?php echo $row['yesno']; ?> " checked > Yes   
<input type="radio" value="<?php echo $row['yesno']; ?> " name="yesno"> No   <br><br> 
<label>Current Address</label> 
<textarea  placeholder="Current Address" value="<?php echo $row['address']; ?> " name="address" required>  
</textarea>  <br><br> 
   <label> City: </label>    
<input type="text" name="city" value="<?php echo $row['city']; ?> " placeholder="city" required />   <br><br> 
<label> Zip Code: </label>    
<input type="text" name="zip" value="<?php echo $row['zip']; ?> " placeholder="Zip" size="15"required />   <br><br>
    <button type="submit"  value="Update" name="submit" class="registerbtn">Register</button>    
</form> 
<?php } 
}
?>
</div> 
</body>  
</html>  