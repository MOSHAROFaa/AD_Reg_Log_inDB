<?php
session_start();
if (isset($_SESSION['userlogin'])) {
  header("location:index.php");
}
?>

<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
body  {
  background-image: url("img/bg.jpg");
}
</style>
</head>
<body>


<center>
<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1 style="color: white;">Registration</h1>
					<p style="color: white;"> Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b style="color: white;">First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>
					<br> <br>
					<label for="lastname"><b style="color: white;">Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>
					<br> <br>
					<label for="email"><b style="color: white;">Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>
					<br> <br>
					<label for="phonenumber"><b style="color: white;">Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
					<br> <br>
					<label for="password"><b style="color: white;">Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<br> <br> <br>
<button> <a href="login.php" style="text-decoration: none;color:black">Go Login </a> </button>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Done',
								'text': data,
								'type': 'success'
								})
								setTimeout(' window.location.href = "login.php"',1000);
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>