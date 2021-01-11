<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .d1{
        background-color: #1a1a1a;
        margin-top: 5rem;
        text-align: center;
        color: white;
        /*text-decoration: underline;*/
        width: 40%;
        padding: 10px;
        border-radius: 10px;
      }
    </style>

    <title>Regsitration Form</title>
  </head>
  <body>
      <div class=" d1 pt-5">
        <h3>Student Registration Form</h3>
        <form>
          <div class="row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control" id="pname" placeholder="Enter Parent's Name">
  </div>
  <div class="form-group col-md-6">
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
  </div>
</div>
<div class="row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control" id="pname" placeholder="Enter Student Name">
  </div>
  <div class="form-group col-md-6">
    <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="Male"><label class="form-check-label" for="exampleRadios1">
    Male
  </label>
  <input class="form-check-input ml-3" type="radio" name="gender" value="Female"><label class="form-check-label ml-5" for="exampleRadios1">
    Female
  </label>
  
</div>
  </div>
</div>
 <div class="row">
  <div class="form-group col-md-6">
    <input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" placeholder="phone no." size="18"/ required> 
  </div>
  <div class="form-group col-md-6">
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
  </div>
</div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>