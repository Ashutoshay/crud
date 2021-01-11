<?php 
session_start();
echo $_SESSION['user'];
  if(!isset($_SESSION['user'])){
    header("location: login.php");
  }
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <title>Student Data</title>
  </head>
  <body>
   <div class="container">
   		<table class="table table-striped" border="1" id="tab">
   			<?php 

   			?>
        <thead>
   			<tr class="bg-dark text-white text-center"> 
   				<th>Id</th>
   				<th>Parents Name</th>
   				<th>Email</th>
   				<th>Student Name</th>
   				<th>Gender</th>
   				<th>DOB</th>
   				<th>Phone No.</th>
   				<th>Yes Or No</th>
   				<th>Address</th>
   				<th>City</th>
   				<th>Zip</th>
   				<th>Delete</th>
   				<th>Update</th>
   			</tr></thead>
        <tbody>
   	<?php
			include 'con.php';
			$sql = "SELECT * FROM student"; 
  
			$query = mysqli_query($con,$sql);
			while ($res = mysqli_fetch_array($query)) {
	?>
   		<tr class="text-center">
   				<td><?php echo $res['id']; ?></td>
   				<td><?php echo $res['pname']; ?></td>
   				<td><?php echo $res['email']; ?></td>
   				<td><?php echo $res['sname']; ?></td>
   				<td><?php echo $res['gender']; ?></td>
   				<td><?php echo $res['bday']; ?></td>
   				<td><?php echo $res['phone']; ?></td>
   				<td><?php echo $res['yesno']; ?></td>
   				<td><?php echo $res['address']; ?></td>
   				<td><?php echo $res['city']; ?></td>
   				<td><?php echo $res['zip']; ?></td>
   				<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
   					<td><button class="btn-danger btn"><a href="edit.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
   			</tr>
   			<?php

			}
    
?>
   	  </tbody>	</table>
   		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
      
   </div>
   <button><a href="../mail/logout.php">Logout</a></button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

  <script>
  $(document).ready( function () {
    $('#tab').DataTable();
} );
  </script>
  </body>
</html>