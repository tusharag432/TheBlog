<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['role'] != 'viewer') {
    require_once('backend/connection.php');
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css\admin_panel.css">
    </head>

    <body>

        <header>
            <h1>
                Admin Panel
            </h1>
            <div>
                <h3>
                    Welcome <?php echo $_SESSION['name']; ?> </h3>
                <a href="backend/logout.php">
                    <h4>Logout<h4>
                </a>
            </div>

        </header>

        <section id='sections' style="background:#efefe9;">
            <div class="container-fluid">
                <div class="row">
                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <div class="liner"></div>
                                <li class="active">
                                    <a href="#home" data-toggle="tab" title="Welcome">
                                        <span class="round-tabs one">
                                            <i class="glyphicon glyphicon-home"></i>
                                        </span>
                                    </a>
                                </li>

                                <li><a href="#create_edit_posts" data-toggle="tab" title="Create/Edit Posts" id="toClick2">
                                        <span class="round-tabs two">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </span>
                                    </a>
                                </li>
                                <li><a href="#all_posts" data-toggle="tab" title="Posts" id="toClick1">
                                        <span class="round-tabs three">
                                            <i class="glyphicon glyphicon-file"></i>
                                        </span> </a>
                                </li>

                                <?php if ($_SESSION['role'] == 'admin') { ?>

                                    <li><a href="#users" data-toggle="tab" title="Users">
                                            <span class="round-tabs four">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                        </a></li>
                                <?php } ?>

                                <li><a href="#comments" data-toggle="tab" title="Comments">
                                        <span class="round-tabs five">
                                            <i class="glyphicon glyphicon-comment"></i>
                                        </span> </a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">

                                <h3 class="head text-center">Welcome to The Blog<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
                                <p class="narrow text-center">
                                    We provide the service of adding, viewing, editing, or deleting blogs.
                                </p>

                                <p class="text-center">
                                    <a href="blog.php" class="btn btn-success btn-outline-rounded green"> Welcome to The Blog <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="create_edit_posts">
                                <h3 class="head text-center" id="new_post">Create a New Post</h3>
                                <h3 class='head text-center' id="edit_post">Edit the Post</h3>

                                <div id="createPost">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <form method="POST" enctype="multipart/form-data" id="upform">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="title">Title:</label>
                                                                <input type="text" id="addTitle" name="title" class="form-control" placeholder="Enter The Title" required>
                                                                <input type="hidden" id="updateId" name="updateId">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="description">Description:</label>
                                                                <input type="text" id="addDescription" name="description" class="form-control" placeholder="Enter The Description" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="content">Content</label>

                                                                <textarea id="addContent" name="content" class="form-control" placeholder="Enter The content" rows="5" column="50" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="image">Image: </label>
                                                                <input type="file" id="addImage" name="image" class="form-control-file" placeholder="Select Image:" accept="image/*" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <img id="uploadPreview" src="#" style="width: 100px; height: 100px;" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="author">Author:</label>
                                                                <input type="text" id="addAuthor" name="author" class="form-control" placeholder="Enter The Author" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="category">Example select</label>
                                                                <select class="form-control" id="addCategory" name="category" required>
                                                                    <option disabled selected>Select Category</option>
                                                                    <option value="Automobile">Automobile</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="Politics">Politics</option>
                                                                    <option value="Science and Technology">Science and Technology</option>
                                                                    <option value="Sports">Sports</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3 buttons">
                                                            <div class="form-group">
                                                                <label style="visibility: hidden;">Submit Here</label>
                                                                <input type="submit" class="btn btn-primary" id="submitButton">
                                                            </div>
                                                            <div class="form-group">
                                                                <label style="visibility: hidden;">Clear Here</label>
                                                                <button class="btn btn-info" id="clearButton" onclick="clearData()">Clear</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="all_posts">
                                <h3 class="head text-center">All Amazing Posts by Amazing writers</h3>
                                <div id="postsTable">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="table-responsive ">
                                                <div class="tableFixHead">
                                                    <table class="table table-hover ">
                                                        <thead>
                                                            <th scope="row">#</th>
                                                            <th scope="row">Date
                                                                <input type="text" class="form-control" id="date" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Title
                                                                <input type="text" class="form-control" id="title" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Description
                                                                <input type="text" class="form-control" id="description" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Content
                                                                <input type="text" class="form-control" id="content" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Image
                                                                <input type="text" class="form-control" id="image" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Author
                                                                <input type="text" class="form-control" id="author" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Category
                                                                <input type="text" class="form-control" id="category" onkeyup='onLoad()'>
                                                            </th>
                                                            <th scope="row">Edit
                                                                <input type="text" class="form-control" disabled>
                                                            </th>

                                                        </thead>
                                                        <tbody id="dataContainer">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if ($_SESSION['role'] == 'admin') { ?>

                                <div class="tab-pane fade" id="users">
                                    <h3 class="head text-center">All Amazing Users</h3>

                                    <div id="usersTable">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="table-responsive ">
                                                    <div class="tableFixHead">
                                                        <table class="table table-hover ">
                                                            <thead>
                                                                <th scope="row">#</th>
                                                                <th scope="row">Date of Joining
                                                                    <input type="text" class="form-control" id="DOJ" onkeyup='onLoad2()' disabled>
                                                                </th>
                                                                <th scope="row">UserName
                                                                    <input type="text" class="form-control" id="uname" onkeyup='onLoad2()'>
                                                                </th>
                                                                <th scope="row">E-mail
                                                                    <input type="text" class="form-control" id="email" onkeyup='onLoad2()'>
                                                                </th>
                                                                <th scope="row">Name
                                                                    <input type="text" class="form-control" id="user_name" onkeyup='onLoad2()'>
                                                                </th>
                                                                <th scope="row">Role
                                                                    <input type="text" class="form-control" id="role" onkeyup='onLoad2()'>
                                                                </th>
                                                                <th scope="row">Edit
                                                                    <input type="text" class="form-control" onkeyup='onLoad2()' disabled>
                                                                </th>
                                                            </thead>




                                                            <tbody id="userDataContainer">

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            <?php } ?>
                            <div class="tab-pane fade" id="comments">
                                <div class="text-center">
                                    <i class="img-intro icon-checkmark-circle"></i>
                                </div>
                                <h3 class="head text-center">Thanks for staying tuned! <span style="color:#f48260;">♥
                                <p class="narrow text-center">
                                    This section can be used for additional functionality i.e, to display comments.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <script>
            $(function() {
                $('a[title]').tooltip();
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#uploadPreview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#addImage").change(function() {
                readURL(this);
            });


            onLoad();
            onLoad2();

            $("#new_post").show();
            $('#edit_post').hide();

            function updateUser(id) {
                var role = $("#no" + id).val();
                var datastream = "id=" + id + "&role=" + role;
                $.ajax({
                    type: "POST",
                    data: datastream,
                    url: "backend/update_role.php",
                    cache: false,
                    success: function(data) {
                        alert('Role Updated!');
                        onLoad2();
                    }
                });
            }

            function clearData() {
                if (confirm('Sure, you want to clear progress?'))
                    $('#uploadPreview').removeAttr('src');
                    $("#updateId").removeAttr('value');
                    document.getElementById("upform").reset();
            }

            $(document).ready(function(e) {
                $("#upform").on('submit', (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "backend/add_post.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            // alert(data);
                            document.getElementById("upform").reset();
                            onLoad();
                            $("#updateId").removeAttr('value');
                            $('#uploadPreview').removeAttr('src');
                            document.getElementById("toClick1").click();

                        },
                        error: function() {}
                    });
                }));
            });

            function onLoad() {
                $("#addImage").attr("required", '');
                var title = $("#title").val();
                var description = $("#description").val().substring(0, 190);
                var content = $("#content").val();
                var author = $("#author").val();
                var category = $("#category").val();
                var image = $("#image").val();

                var datastream = "title=" + title + "&description=" + description + "&content=" + content + "&image=" + image + "&author=" + author + "&category=" + category;
                $.ajax({
                    type: "POST",
                    url: "backend/display.php",
                    data: datastream,
                    cache: false,
                    success: function(data) {
                        $("#dataContainer").html(data);
                    }
                });
            }

            function onLoad2() {
                var username = $("#uname").val();
                var email = $("#email").val();
                var name = $("#user_name").val();
                var role = $("#role").val();

                var datastream = "username=" + username + "&email=" + email + "&name=" + name + "&role=" + role;
                $.ajax({
                    type: "POST",
                    url: "backend/display_users.php",
                    data: datastream,
                    cache: false,
                    success: function(data) {
                        $("#userDataContainer").html(data);
                    }
                });
            }

            function deletePost(id) {

                if (confirm("Sure you want to delete post?")) {

                    var datastream = "id=" + id;
                    $.ajax({
                        type: "POST",
                        url: "backend/delete_post.php",
                        cache: false,
                        data: datastream,
                        success: function() {
                            alert("Post Deleted");
                            onLoad();
                        }
                    });
                }
            }

            function deleteUser(id) {

                if (confirm("Sure you want to delete user?")) {

                    var datastream = "id=" + id;
                    $.ajax({
                        type: "POST",
                        url: "backend/delete_user.php",
                        cache: false,
                        data: datastream,
                        success: function() {
                            alert("User Deleted");
                            onLoad2();
                        }
                    });
                }
            }

            function getData(id) {
                $("#new_post").hide();
                $('#edit_post').show();
                $("#toClick2").click();
                var datastream = "id=" + id;
                $("#addImage").removeAttr("required");
                $.ajax({
                    type: "POST",
                    data: datastream,
                    url: "backend/get_data.php",
                    cache: false,
                    success: function(data) {

                        var result = eval('(' + data + ')');
                        document.getElementById('addTitle').value = result.title;
                        document.getElementById('addDescription').value = result.description;
                        document.getElementById('addContent').value = result.content;
                        document.getElementById('addAuthor').value = result.author;
                        document.getElementById('addCategory').value = result.category;
                        document.getElementById('updateId').value = result.id;

                        $("#uploadPreview").attr("src", "uploads/" + result.image);
                    }
                });
            }
        </script>
    </body>

    </html>


<?php

} else {
    header("location: login.php?redirect=admin_panel");
}
