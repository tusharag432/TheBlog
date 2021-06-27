<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    unset($_SESSION['name']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="color: rgb(0 129 202);">The Blog</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-12" id="message">

            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <h3 style="color: rgb(100 172 212);margin-top: 10px;">Login</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center">
                <form method="POST" id="loginForm">
                    <div class="form-group">
                        <small>
                            Username or E-mail Address
                        </small>
                        <input type="text" id="uname" class="form-control">
                    </div>
                    <div class="form-group">
                        <small>
                            Password
                        </small>
                        <input type="password" id="password" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-info" style="margin-bottom:5px;" value="Login">
                </form>
            </div>
            <div class="col-12 justify-content-center">
                <small>
                    <a href="reset.php" style="text-decoration: none;">Forgot Password? Reset!</a><br>
                    <a href="register.php" style="text-decoration: none;">New Here? Sign Up!</a>
                </small>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                var uname = $("#uname").val();
                var password = $("#password").val();
                var datastream = "uname=" + uname + "&password=" + password;
                $.ajax({
                    type: "POST",
                    url: "backend/check_login.php",
                    data: datastream,
                    cache: false,
                    success: function(data) {
                        if (data == "success") {
                            $("#message").html('<div class="alert alert-success" role="alert">Log in Successful!</div>');
                            <?php if (!empty($_GET['redirect'])) { ?>
                                window.location.replace("<?php echo $_GET['redirect'] ?>.php?login=success");
                            <?php } else { ?>
                                window.location.replace("blog.php?login=success");
                            <?php } ?>
                        } else if (data == "failure") {
                            $("#message").html('<div class="alert alert-danger" role="alert">Incorrect Credentials!!!</div>');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>