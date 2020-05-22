<?php
    $page = "home";
    include("./includes/sess.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Demoguy - SignIn</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="position: relative;">
                <div class="form-window">
                    <form id="signin-form" class="form-signin">
                        <div class="text-center mb-4">
                            <h1 class="mb-3 font-weight-normal">DEMOGUY</h1>
                            <h5 class="mb-3 font-weight-normal">SIGNIN FORM</h5>
                        </div>

                        <div class="form-label-group">
                            <label for="inputEmail">Email: </label>
                            <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <label for="inputEmail" style="margin-top: 12px;">Password: </label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 24px;">Sign in</button>
                        <p class="mt-5 mb-3 text-muted text-center">Not a Member? <a href="/register.php">REGISTER</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        $(document).ready(function() {
            $('#signin-form').submit( function(e) {
                e.preventDefault();
                var postVar = { "uname": $("#inputEmail").val(), "pword": $("#inputPassword").val() };
                $.ajax({
                    type: "POST",
                    url: "https://emathrix.dev/includes/signin.php",
                    data: postVar,
                    dataType: 'json',
                    success: function(retData) {
                        console.log("Return: " + JSON.stringify(retData));
                        window.location.replace("http://emathrix.dev/profile.php");
                    },
                    error: function(httpReq, status, error) {
                        console.log(httpReq + '::' + status + "::" + error);
                    }
                });
            })
        });
        
    </script>
</body>

</html>