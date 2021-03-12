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

    <title>Banking_Sytem</title>
  </head>
  <body style="background: #3598dc;">
    <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="banks.jpg" alt="Avatar" style="width:70px;height:50px;border-radius: 50%;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
		<?php
         date_default_timezone_set("Asia/Kolkata");
		if(date('H') < 12){
		 echo '<li class="nav-item"><a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Good Morning</a> </li>';}
		elseif(date("H") > 12 && date("H") < 18){

    echo '<li class="nav-item"><a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Good Afternoon</a> </li>';
 
   }else{
 
  echo '<li class="nav-item"><a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Good Evening</a> </li>';
 
   }?>
        </li>
        
    </div>
  </div>
</nav>
<br><br>
<div cvlass="head">
<div class="login-form">
    <form action=""  method="post">
	<img src="banks.jpg" alt="Avatar" style="width:90px;height:70px;border-radius: 50%;" class="avatar">
        <h2 class="text-center">Login</h2>   
        <div class="form-group">
            <input type="Text" class="form-control" name="Id" id="Id" placeholder="UserId" required="required">
        </div>
		
		<div class="form-group">
            <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required="required">
        </div>   
 	
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="btn">Sign in</button>
        </div>
        <p><a href="forgottenpassword.php">Lost your Password?</a></p>
    </form>
    
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
session_start();
    if(isset($_POST['btn'])){ 

       
$id=$_SESSION['UserId']=$_POST['Id'];

$pass=$_SESSION['password']=$_POST['password'];
if($id!='M' || $id!='C')
{ ?>
	<script>
	 $("#Id").attr("placeholder","Invalid User Id").css( {'border-color':'#de3116'});
	</script>
	<?php
}
if(strlen($pass)<6)
{?>
	<script>
	 $("#pass").attr("placeholder","It should be min 6 character").css( {'border-color':'#de3116'});
	</script>
	<?php
}

if(($id[0]=='M' && strlen($id)==5 && strlen($pass)>=6) || ($id[0]=='C' && strlen($id)==5 && strlen($pass)>=6) ){
	$con = new mysqli("localhost", "root", "", "Bank") or die("Failed to connect to MySQL: " . mysql_error());
	$s="select * from login where UserId='$id' and Password='$pass';";
	 $result=mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
   if($num==1){
	   if($id[0]=='M'){
header('location:ManagerHome.php');
	   exit();	
	   }
	   else{
		  header('location:UserHome.php');
	   exit();	 
		   
	   }
	   
	   }
else{
	?>
	<script>
	 $("#Id").attr("placeholder","UserId Does Not Exit").css( {'border-color':'#de3116'});
	</script>
	<?php
}

}

	
}
//header('location:homeregister.php');
    
?>
