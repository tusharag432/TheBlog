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
            <div class="col-6 block1">
                <div class="row" id="message">

                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 style="color: rgb(0 129 202);">The Blog</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h3 style="color: rgb(100 172 212);margin-top: 10px;">Register</h3>
                    </div>
                </div>

                <div class="row ">
                    <img src="img\user.png" alt="user">
                </div>
                <div class="row">
                    <div class="col-12">

                        <a href="login.php" style="text-decoration: none;">Already Registered? Login!</a>

                    </div>
                </div>
            </div>
            <div class="col-6 block2">
                <form method="POST" id="inputForm">
                    <div class="form-group" id="nameField">
                        Name
                        <input type="text" id="name" class="form-control form-control-sm" onkeyup="checkName()" placeholder="Name">
                        <small class="form-text text-muted">Must be 3-20 characters long.</small>
                    </div>
                    <div class="form-group" id="usernameField">
                        Username
                        <input type="text" id="uname" class="form-control form-control-sm" onkeyup="checkUsername()" placeholder="Unique Username">
                        <small class="form-text text-muted">Must be 3-50 characters long and unique.</small>
                    </div>
                    <div class="form-group" id="emailField">
                        E-mail
                        <input type="text" id="email" class="form-control form-control-sm" onkeyup="checkEmail()" placeholder="email@host.com">
                        <small class="form-text text-muted">Must be valid and unregistered.</small>
                    </div>
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
                    <input type="submit" class="btn btn-info" style="margin-bottom:5px;" value="Register">
                </form>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        var nameFlag = 0;
        var usernameFlag = 0;
        var emailFlag = 0;
        var passwordFlag = 0;
        var passFlag = 0;

        function checkName() {
            var name = $("#name").val();
            if (name.length > 2 && name.length < 21) {
                $("#nameField").addClass("success");
                $("#nameField").removeClass("danger");
                nameFlag = 1;
            } else {
                $("#nameField").addClass("danger");
                $("#nameField").removeClass("success");
                nameFlag = 0;
            }
        }


        function checkUsername() {
            var username = $("#uname").val();
            if (username.length > 2 && username.length < 51) {
                // var datastream = "field=" + "username" + "&value=" + username;
                // $.ajax({
                //     type: "POST",
                //     url: "backend/check_field.php",
                //     data: datastream,
                //     cache: false,
                //     success: function(flag) {
                //         if (flag == 1) {
                //             $("#usernameField").addClass("success");
                //             $("#usernameField").removeClass("danger");
                //             usernameFlag = 1;
                //         } else {
                //             $("#usernameField").addClass("danger");
                //             $("#usernameField").removeClass("success");
                //             usernameFlag = 0;
                //         }
                //     }
                // });

                $("#usernameField").addClass("success");
                $("#usernameField").removeClass("danger");
                usernameFlag = 1;

            } else {
                $("#usernameField").addClass("danger");
                $("#usernameField").removeClass("success");
                usernameFlag = 0;
            }
        }

        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function checkEmail() {
            var email = $("#email").val();
            if (validateEmail(email)) {
                // var datastream = "field=" + "email" + "&value=" + email;
                // $.ajax({
                //     type: "POST",
                //     url: "backend/check_field.php",
                //     data: datastream,
                //     cache: false,
                //     success: function(flag) {

                //         if (flag == true) {
                //             $("#emailField").addClass("success");
                //             $("#emailField").removeClass("danger");
                //             emailFlag = 1;
                //         } else {
                //             $("#emailField").addClass("danger");
                //             $("#emailField").removeClass("success");
                //             emailFlag = 0;
                //         }
                //     }
                // });

                $("#emailField").addClass("success");
                $("#emailField").removeClass("danger");
                emailFlag = 1;

            } else {
                $("#emailField").addClass("danger");
                $("#emailField").removeClass("success");
                emailFlag = 0;
            }
        }

        function checkPassword() {
            var password = $("#password").val();
            if (password.length > 7 && password.length < 51) {
                $("#passwordField").addClass("success");
                $("#passwordField").removeClass("danger");
                passFlag=1;

            } else {
                $("#passwordField").addClass("danger");
                $("#passwordField").removeClass("success");
                passFlag=0;
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
            $('#inputForm').on('submit', function(e) {
                    e.preventDefault();
                    if (nameFlag && usernameFlag && emailFlag && passwordFlag) {
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var uname = $("#uname").val();
                        var password = $("#password").val();

                        var datastream = "name=" + name + "&email=" + email + "&uname=" + uname + "&password=" + password;
                        $.ajax({
                            type: "POST",
                            url: "backend/add_user.php",
                            cache: false,
                            data: datastream,
                            success: function(data) {
                                // alert(data);
                                // console.log(data);
                                if($.trim(data) === "notunique"){
                                    // $("#inputform").reset();
                                    document.getElementById("inputForm").reset();
                                    alert("User is not unique");
                                    $("#nameField").removeClass("success");
                                    $("#usernameField").removeClass("success");
                                    $("#emailField").removeClass("success");
                                    $("#passwordField").removeClass("success");
                                    $("#repasswordField").removeClass("success");

                                }
                                else if ($.trim(data) === "success") {
                                    $("#message").html(' <div class="alert alert-success" role="alert">Registered Successfully!</div>');
                                    window.location.replace("login.php");
                                } 
                            }
                        });
                    } else {
                        $("#message").html(' <div class="alert alert-danger" role="alert">Completely Fill Details!</div>');
                    }
                });
        });
    </script>
</body>

</html>