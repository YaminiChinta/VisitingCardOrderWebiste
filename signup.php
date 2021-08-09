<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        @import "font-awesome.min.css";
        @import "font-awesome-ie7.min.css";
        body {
        padding-top: 20px;
        padding-bottom: 20px;
        background: #D3CCE3;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        @media (min-width: 768px) {
        .container {
            max-width: 730px;
        }
        }
    </style>
</head>
<body>
    <div>
        <?php 
        
        ?>
    </div>
    
    <div class="container">
    <h1 class="well">Sign Up</h1>
        <div class="col-lg-6 well"></div>
            <div class="row">
                <form >
            
                    <div class="col-sm-6"></div>
                    <div class="row">
                        <hr class="mb-3">

                        <div class="col-sm-6">
                            <label for="firstname"><b>FirstName:</b></label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="lastname"><b>LastName:</b></label>
                            <input class="form-control" id="lastname" type="text" name="lastname" required>
                        </div>
                        <div class="col-sm-12">
                            <label for="email"><b>Email:</b></label>
                            <input class="form-control"  id="email" type="email" name="email" required>
                        </div>
                        <div class="col-sm-12">
                            <label for="phonenumber"><b>Phone Number:</b></label>
                            <input class="form-control" id="phonenumber" type="number" name="phonenumber" required>
                        </div>
                        <div class="col-sm-12">
                            <label for="password"><b>Password:</b></label>
                            <input class="form-control" id="password" type="password" name="password" required><br>
                        </div>
                        <a class="col-sm-4">
                            <input class="btn btn-success" id="register" type="submit" name="create" value="Sign Up" onclick="submit()"></a>
                    </div>
                </form>
                </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        function submit(){
        window.location.href = "userlogin.php";
    }
    </script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(e){

                var valid = this.form.checkValidity();
                
                if(valid){
                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var phonenumber = $('#phonenumber').val();
                    var password = $('#password').val();

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {firstname: firstname, lastname: lastname, email: email, phonenumber :phonenumber, password: password},
                        success: function(data){
                            Swal.fire({
                            'title':'Successfull',
                            'text': data,
                            'type': 'success'  
                            })

                        },
                        error: function(data){
                            Swal.fire({
                            'title':'Errors',
                            'text': 'There war error while saving data',
                            'type': 'error'  
                            })

                        }
                    });
                }
                else{
                    alert('false');
                }

                 
            });
            
        });
    </script>
</body>
</html>