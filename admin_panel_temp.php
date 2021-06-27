<?php

session_start();
if (isset($_SESSION['login'])) {
    require_once('connection.php');
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

        <section id="createPost">
            <div class="container-fluid">
                <div class="row">
                    <h1>Create Post</h1>
                </div>
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
        </section>



        <section id="postsTable">
            <div class="container-fluid">
                <div class="row">
                    <h1>All Posts</h1>
                </div>
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
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <script>

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

            function clearData() {
                if (confirm('Sure, you want to clear progress?'))
                    document.getElementById("upform").reset();
            }

            $(document).ready(function(e) {
                $("#upform").on('submit', (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "add_post.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            window.open('admin_panel.php', '_self');
                        },
                        error: function() {}
                    });
                }));
            });

            function onLoad() {
                $("#addImage").attr("required", '');
                var title = $("#title").val();
                var description = $("#description").val();
                var content = $("#content").val();
                var author = $("#author").val();
                var category = $("#category").val();
                var image = $("#image").val();

                var datastream = "title=" + title + "&description=" + description + "&content=" + content + "&image=" + image + "&author=" + author + "&category=" + category;
                $.ajax({
                    type: "POST",
                    url: "display.php",
                    data: datastream,
                    cache: false,
                    success: function(data) {
                        $("#dataContainer").html(data);
                    }
                });
            }

            function deletePost(id) {

                if (confirm("Sure you want to delete post?")) {

                    var datastream = "id=" + id;
                    $.ajax({
                        type: "POST",
                        url: "delete_post.php",
                        cache: false,
                        data: datastream,
                        success: function() {
                            alert("Post Deleted");
                            onLoad();
                        }
                    });
                }
            }

            function getData(id) {
                var datastream = "id=" + id;
                $("#addImage").removeAttr("required");
                $.ajax({
                    type: "POST",
                    data: datastream,
                    url: "get_data.php",
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
