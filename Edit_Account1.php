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
    <form action="" onsubmit="return validate(this)"S method="post">
	<img src="banks.jpg" alt="Avatar" style="width:90px;height:70px;border-radius: 50%;"class="avatar">
        <h2 class="text-center">Edit Account</h2>   
        <div class="form-group">
            <h6  class="form-control" > Account Id<h6>
        </div>
		<div class="input-group">
  <select class="form-select" id="type" name="Type" >
    <option selected>Account Type</option>
    <option value="Male">Saving</option>
    <option value="Female">Current</option>
	
	
	
  </select>
  <label class="input-group-text" for="inputGroupSelect02">Select</label>
</div><br>
		
		<div class="form-group">
            <h6  class="form-control" > Amount<h6>
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
	$Atype=$_POST['Type'];
	// Check if form was submitted

      header('location:ManagerHome.php');
exit();
}
//header('location:homeregister.php');
    
?>
