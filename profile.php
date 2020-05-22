<?php
    $page = "profile";
    include("./includes/sess.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Bytes Crafter">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Demoguy - SignUp</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-window">
                    <form id="signin-form" class="form-signin">
                        <div class="text-center mb-4">
                            <h1 class="h3 mb-3 font-weight-normal">Hello World!</h1>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 24px;">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#signin-form').submit( function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "https://emathrix.dev/includes/logout.php",
                    data: {},
                    dataType: 'json',
                    success: function(retData) {
                        window.location.replace("http://emathrix.dev");
                        console.log("Return: " + JSON.stringify(retData));
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