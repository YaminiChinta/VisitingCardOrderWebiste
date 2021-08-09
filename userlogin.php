<?php
    session_start();

    if(isset($_SESSION['visitingcardcreation'])){
        header("Location : user.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        @import "font-awesome.min.css";
        @import "font-awesome-ie7.min.css";
        body {
        padding-top: 20px;
        padding-bottom: 20px;
        background: url(https://images.template.net/wp-content/uploads/2015/07/Metro-Flat-Business-Visiting-Card-PSD-Template-Download.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        }
        @media (min-width: 768px) {
        .container {
            max-width: 730px;
        }
        }
        
    </style>
</head>
<body>
<div class="container">
    <h1 class="well">Customer Login</h1>
	<div class="col-lg-12 well">
	<div class="row">
		<form action="user.php" method="post">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12 form-group">
						<label>Email</label>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
										
                    <div class="col-sm-12 form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control input_pass" required>
                    </div>
                    
                    <div class="col-sm-8">
                        <button type="button" name="button" class="btn btn-md btn-success login_btn" id="login" value="Login">Login</button>
                    </div>
                    <div class="col-sm-4 float-right">
                        Don't have an account?<a href="signup.php" class="ml-2">Sign Up</a>
                    </div>
                </div>
		    </div>
		</form> 
	</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('#login').click(function(e){
            var valid = this.form.checkValidity();

            if(valid){
                var username = $('#username').val();
                var password = $('#password').val();
            }
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {username: username, password: password},
                success: function(data){
                    alert(data);
                    if($.trim(data) === "1"){
                        setTimeout('window.location.href="user.php" ',1000 );
                    }
                },
                error: function(data){
                    alert('error');
                }
            });
        });
    });
</script>
</body>
</html>