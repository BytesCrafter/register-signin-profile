<?php
    if(isset($_SESSION["token"])) {
        //Redirect to profile.
        echo "<script> console.log('login'); </script>";
    } else {
        //Redirect to Signin.
        echo "<script> console.log('logout'); </script>";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>SIGN IN</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="signup-form" class="form-signin">
                    <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">REGISTER</h1>
                    </div>

                    <div class="form-label-group">
                        <label for="inputEmail">Email address</label>
                        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    </div>

                    <div class="form-label-group">
                        <label for="inputEmail">Password</label>
                        <input type="password" id="inputPassword1" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="form-label-group">
                        <label for="inputEmail">Confirm</label>
                        <input type="password" id="inputPassword2" class="form-control" placeholder="Password" required>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 24px;">Sign in</button>
                    <p class="mt-5 mb-3 text-muted text-center">Sign Up <a href="/index.php">HERE</a></p>
                </form>
            </div>
        </div>
    </div>
    

    <script>
        $(document).ready(function() {
            $('#signup-form').submit( function(e) {
                e.preventDefault();
                //Check if confirm password match else return error.
                if($("#inputPassword1").val() == $("#inputPassword2").val()) {
                    var postVar = { "uname": $("#inputEmail").val(), "pword": $("#inputPassword1").val() };
                    $.ajax({
                        type: "POST",
                        url: "https://emathrix.dev/includes/signup.php",
                        data: postVar,
                        dataType: 'json',
                        success: function(retData) {
                            console.log("Return: " + JSON.stringify(retData));
                        },
                        error: function(httpReq, status, error) {
                            console.log(httpReq + '::' + status + "::" + error);
                        }
                    });
                } else {
                    console.log("Password dont match!");
                }
                
            })
        });
        
    </script>
</body>

</html>