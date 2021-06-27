<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
                <h3 style="color: rgb(100 172 212);margin-top: 10px;">Reset Password</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center">
                <form method="POST" id="resetForm">
                    <div class="form-group">
                        <small>
                            Username or E-mail Address
                        </small>
                        <input type="text" id="uname" class="form-control">
                    </div>

                    <input type="submit" id="button" class="btn btn-info" style="margin-bottom:5px;" value="Reset">
                </form>
            </div>
            <div class="col-12 justify-content-center">
                <small>
                    <a href="login.php" style="text-decoration: none;">Log in!</a>
                </small>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#resetForm').on('submit', function(e) {
                e.preventDefault();
                var uname = $("#uname").val();
                $("#uname").attr('disabled', '');
                $("#button").attr('disabled', '');
                var datastream = "uname=" + uname;

                $.ajax({
                    type: "POST",
                    url: "check_reset.php",
                    data: datastream,
                    cache: false,
                    success: function(data) {
                        if (data == "success") {
                            $("#message").html('<div class="alert alert-success" role="alert">Check your inbox to reset!</div>');
                        } else if (data == "failure") {
                            $("#uname").removeAttr('disabled');
                            $("#button").removeAttr('disabled');
                            $("#message").html('<div class="alert alert-danger" role="alert">No such user exists!!!</div>');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>