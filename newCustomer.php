<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="logincss.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="loginstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>NewCustomer</title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
a:hover {
  background-color: #555;
  color: white;
}
.float-container {
   
}

.float-child {
    
    float: left;
	
    
   
} 
</style>
  </head>
  <body >
        <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="UserHome.php"><img src="banks.jpg" alt="Avatar" style="width:70px;height:50px;border-radius: 50%;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
		 
        
    </div>
  </div>
</nav>
	
<div class="float-container ">
 <div class="float-child">
<ul id="a">
  <li><a href="ManagerHome.php" id="a" style="color: #960f0f; background-color:#c9c538; text-decoration: none; " ><?php 
		 session_start();
		 echo $_SESSION['UserId'];
		 
		 ?></a></li>
   <li><a href="#" id="a" style="text-decoration: none; " >New Customer</a></li>
  <li><a href="Edit_Customer.php" id="a" style="text-decoration: none; " >Edit Customer</a></li>
  <li><a href="Delete_Customer.php" id="a" style="text-decoration: none; " >Delete Customer</a></li>
  <li><a href="newAccount.php" id="a" style="text-decoration: none; " >New Account</a></li>
  <li><a href="Edit_Account.php" id="a" style="text-decoration: none; " >Edit Account</a></li>
  <li><a href="Delete_Account.php" id="a" style="text-decoration: none; " >Delete Account</a></li>
  <li><a href="Deposit.php" id="a" style="text-decoration: none; " >Deposit</a></li>
  <li><a href="Withdraw.php" id="a" style="text-decoration: none; " >Withdraval</a></li>
  <li><a href="Fund_Transfer.php" id="a" style="text-decoration: none; " >Fund Transfer</a></li>
  <li><a href="Change_Password.php" id="a" style="text-decoration: none; " >Password Change</a></li>
  <li><a href="Balance_enquiry.php" id="a" style="text-decoration: none; " >Balance Enqiry</a></li>
  <li><a href="ministatement.php" id="a" style="text-decoration: none; " >Mini Statement</a></li>
  <li><a href="customizedstatement.php" id="a" style="text-decoration: none; " >Customized Statement</a></li>
  <li><a href="index.php" id="a" style="text-decoration: none; " >Logout</a></li>
  
</ul>
</div>
 <div class="float-child" >

 <center>
  <div class="blue" >
 <div class="login-form"style=" position: relative;
  left: 450px;">
    <form action=""   method="post">
	
        <h2 class="text-center">Add Customer</h2>   
        <div class="form-group">
            <input type="Text" class="form-control" name="name" id="name" placeholder="Customer Name" required="required">
        </div>
		<div class="input-group">
  <select class="form-select" id="inputGroupSelect02" name="gender" v>
    <option selected>Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
	<option value="Other">Other</option>
	
	
  </select>
  <label class="input-group-text" for="inputGroupSelect02">Select</label>
</div>
<div class="form-group">
            <input type="date" class="form-control" name="date" placeholder="date Of Birth" required="required">
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
</center>
  </div>
  
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php

    if(isset($_POST['btn'])){ // Check if form was submitted

       //$con = new mysqli("localhost", "root", "", "chatboot") or die("Failed to connect to MySQL: " . mysql_error());
$name=$_POST['name'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$number=$_POST['number'];
$mail=$_POST['mail'];


if(($number>999999999 && $number<=9999999999)==false)
{ ?>
	<script>
	 $("#number").attr("placeholder","Invalid Phone Number").css( {'border-color':'#de3116'});
	</script>
	<?php
}
if(($pin>99999 && $pin<=999999)==false)
{ ?>
	<script>
	 $("#pin").attr("placeholder","Invalid PIN Number").css( {'border-color':'#de3116'});
	</script>
	<?php
}
$con = new mysqli("localhost", "root", "", "Bank") or die("Failed to connect to MySQL: " . mysql_error());
$s="insert into Customer Values('$name','$gender','$date',$address','$state','$pin','$number','$mail');";
$result=mysqli_query($con,$s);
if($result){
	header('location:ManagerHome.php');
	   exit();	
}

}
//header('location:homeregister.php');
    
?>