<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <style>
        .danger,
        .danger * {
            color: #dc3545 !important;
            border-color: #dc3545;
        }

        .danger::placeholder {
            color: #dc3545;
            opacity: 1;
            /* Firefox */
        }

        .success,
        .success * {
            color: #28a745 !important;
            border-color: #28a745;
        }

        .success::placeholder {
            color: #28a745;
            opacity: 1;
            /* Firefox */
        }

        .block1 {
            border-right: 1px solid rgba(170, 170, 170);
        }

        img {
            height: 100%;
            width: 100%;
        }
    </style>

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
                <h3 style="color: rgb(100 172 212);margin-top: 10px;">Reset</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center">
                <form method="POST" id="resetForm">
                    <div class="form-group" id="passwordField">
                        Password
                        <input type="password" id="password" class="form-control form-control-sm" onkeyup="checkPassword()" placeholder="P@55w0rd">
                        <small class="form-text text-muted">Must be 8-50 characters long.</small>
                    </div>
                    <div id="repasswordField">
                        Re-Password
                        <input type="password" id="repassword" class="form-control form-control-sm" onkeyup="checkrePassword()" placeholder="P@55w0rd">
                        <small class="form-text text-muted">Must be same as password.</small>
                    </div>
                    <input type="submit" class="btn btn-info" style="margin-bottom:5px;" value="Reset">
                </form>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        var passwordFlag = 0;
        var passFlag = 0;

        function checkPassword() {
            var password = $("#password").val();
            if (password.length > 7 && password.length < 51) {
                $("#passwordField").addClass("success");
                $("#passwordField").removeClass("danger");
                passFlag = 1;

            } else {
                $("#passwordField").addClass("danger");
                $("#passwordField").removeClass("success");
                passFlag = 0;
            }
        }


        function checkrePassword() {
            var password = $("#password").val();
            var repassword = $("#repassword").val();
            if (password == repassword && passFlag) {
                $("#repasswordField").addClass("success");
                $("#repasswordField").removeClass("danger");
                passwordFlag = 1;
            } else {
                $("#repasswordField").addClass("danger");
                $("#repasswordField").removeClass("success");
                passwordFlag = 0;
            }
        }

        $(document).ready(function() {
            $('#resetForm').on('submit', function(e) {
                e.preventDefault();
                if (passwordFlag) {
                    var password = $("#password").val();
                    var datastream = "token=<?php echo$_GET['token'];?>" + "&password=" + password;
                    alert(datastream);
                    $.ajax({
                        type: "POST",
                        url: "backend/change_password.php",
                        cache: false,
                        data: datastream,
                        success: function(data) {
                            alert(data);
                            $("#message").html(' <div class="alert alert-success" role="alert">Password Changed Successfully!</div>');
                            window.location.replace("login.php");

                        }
                    });
                } else {

                    $("#message").html(' <div class="alert alert-danger" role="alert">Correctly Fill Details!</div>');
                }
            });
        });
    </script>
</body>

</html>