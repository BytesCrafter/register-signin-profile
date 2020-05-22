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
                <form id="signin-form" class="form-signin">
                    <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">SIGN IN</h1>
                    </div>

                    <div class="form-label-group">
                        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
                </form>
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