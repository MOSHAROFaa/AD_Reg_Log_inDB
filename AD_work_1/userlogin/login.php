<?php
session_start();
if (isset($_SESSION['userlogin'])) {
  header("Location:index.php");
}
?>
 

<!DOCTYPE html>

<head>
  <title>Software Hub</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <style>
  body  {
  background-image: url("img/bg.jpg");
}
</style>

</head>
<body>
</head>

<body>
  <div class="d-flex justify-content-center h-100">
    <div class="user_card">
      <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
          <img src="img/logo2.png" class="brand_logo" alt="Programming kw logo">
        </div>
      </div>
      <div class="one">
        <i>Software Hub</i>
      </div>
      <div class="d-flex justify-content-center form_container">
         <form>
          <div class="input-group mb-3">
            <div class="input-group-append">
              <span class="input-group-text"> <i class="fas fa-user"> </i> </span>
            </div>
            <input type="text" name="username" id="username" class="form-control input_user" required>
          </div>

          <div class="input-group mb-3">

            <div class="input-group-append">
              <span class="input-group-text"> <i class="fas fa-key"> </i></span>
            </div>

            <input type="password" name="password" id="password" class="form-control input_pass" required>
          </div>

          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
              <label style="color: whitesmoke;">*Logging in you agree to our terms and conditions</label>
            </div>
          </div>

      </div>
      <div class="d-flex justify-content-center mt-3 login_container ">
        <button type="button" name="button" id="login" class="btn login_btn">Login</button>
      </div>
      </form>
      <div class="mt-4">
        <div class="d-flex justify-content-center links" style="color:darkorange;">
        <i> Don't have an account? 
          <a href="registration.php" class="ml-2" style="color:darkorange; "> <b>Sign up</i> </b> </a>
        </div>
        <div class="d-flex justify-content-center">
          
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


  <script>
	
		
    $('#login').click(function(e){
      
      var valid = this.form.checkValidity();

      if (valid) {
        var username = $('#username').val();
        var password = $('#password').val();
      }
      e.preventDefault();

      $.ajax({
        type:'POST',
        url: 'jslogin.php',
        data: {username: username, password: password},
        success: function(data){
          alert(data);
         if($.trim(data)==="Successfully Loggedin"){
           setTimeout(' window.location.href = "index.php"',1000);
         }
        },
        error: function(data){
          alert ('Error occured.');
        }
      });

    });

</script>
</body>

</html>