<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to SW HUB</title>

  <style>
body  {
  background-image: url("img/one.png");
}
</style>

</head>

<center>
<h1 style="background-color:brown; text-align:center">Welcome to software HUB</h1>
<hr>
<div>
  <br>
  <li> <a  href="resume.html" style="text-decoration: none;color:black">CEO Resume</a> </li>
  <li><a href="services.html" style="text-decoration: none;color:black">Daily Service</a> </li>
<li>  <a href="contact.html" style="text-decoration: none;color:black">Contact</a></li>
  
</div>

<br> <br> <br>
<hr>
<button type="button" name="button" id="logout" class="btn logout_btn" ><a href="index.php?logout=true" style="text-decoration: none;color:black">Logout </a></button> 


