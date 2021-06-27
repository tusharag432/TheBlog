<?php
session_start();
if (isset($_SESSION['login'])) {

    require_once("backend/connection.php");
    $id = $_GET['id'];
    $query = "SELECT * from posts where id = '$id'";
    $result = $conn->query($query)->fetch_assoc();

    $title = $result['title'];
    $description = $result['description'];
    $content = $result['content'];
    $image = $result['image'];
    $author = $result['author'];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css\post.css">
    </head>

    <body>

        <header id="welcome" style="background-image:
        linear-gradient(#1111118f,
            #1111118f),
        url('uploads/<?php echo $image; ?>');">
            <nav>
                <div class="brand">
                    <h1>Logo</h1>
                </div>
                <div class="links">
                    <div class="dropdown" id="user">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php if($_SESSION['role']!='viewer') {?>
                            <a class="dropdown-item" href="admin_panel.php">Admin Panel</a><?php } ?>
                            <!-- <a class="dropdown-item" href="#">Profile</a> -->
                            <a class="dropdown-item" href="backend/logout.php">Logout</a>
                        </div>
                    </div>
                    <a href = "index.php">Home</a>
                    <a href = "about.php">About</a>
                    <a href="https://www.linkedin.com/in/tushar432/">Team</a>
                    <a href="https://www.linkedin.com/in/tushar432/">Contact</a>
                </div>
            </nav>

            <div class="heading">
                <div>
                    <h1 class="title"> <?php echo $title ?></h1>
                    <h2 class="description"> <?php echo $description ?> </h2>
                </div>
                <div style="margin-top: 3rem;">
                    <h4 class="author"><?php echo $author ?></h4>
                </div>
            </div>

            <div class="message">
                <a href="#content"> <i class="fa fa-angle-down"></i></a>
            </div>
        </header>

        <article id="content">
            <p style="white-space: pre-wrap;"><?php echo $content; ?></p>
        </article>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>

    <?php
} else {
    header("location: login.php");
}

?>