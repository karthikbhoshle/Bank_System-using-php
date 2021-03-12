<!DOCTYPE html>
<?php
echo '<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Account</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="logincss.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

</style>
</head>
<body>
<br><br>
<div cvlass="head">
<div class="login-form">
    <form action=""   method="post">
	
        <h2 class="text-center">Edit Customer</h2>   
        <div class="form-group">
             <h6  class="form-control" > Account Id<h6>
        </div>
		<div class="input-group">
  <h6  class="form-control" > Gender<h6>
</div>
<div class="form-group">
             <h6  class="form-control" > Dateof Birth<h6>
        </div> 
<div class="form-group">
            <input type="Text" class="form-control" name="address" id="address" placeholder="Address" required="required">
        </div>		
		<div class="form-group">
            <input type="Text" class="form-control" name="city" id="city" placeholder="City" required="required">
        </div>	
		<div class="form-group">
            <input type="Text" class="form-control" name="state" id="state" placeholder="State" required="required">
        </div>	
		<div class="form-group">
            <input type="number" class="form-control" name="pin" id="pin" placeholder="PIN" required="required">
        </div>	
		<div class="form-group">
            <input type="number" class="form-control" name="number" id="number" placeholder="Phone number" required="required">
        </div>	
		
		<div class="form-group">
            <input type="Email" class="form-control" name="mail" placeholder="Email" required="required">
        </div>   
 	
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="btn">Submit</button>
        </div>
        
    </form>
    
</div>
</div>
</body>
</html>';
?>
<?php
session_start();
    if(isset($_POST['btn'])){ 
	$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$number=$_POST['number'];
$mail=$_POST['mail'];
	// Check if form was submitted

      header('location:ManagerHome.php');
exit();
}
//header('location:homeregister.php');
    
?>
