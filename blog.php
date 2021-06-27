<?php

session_start();
if (isset($_SESSION['login'])) {
    require_once('backend/connection.php');
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/blog.css">
    </head>

    <body>


        <header id="welcome">
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
                Welcome to <br> The Blog

            </div>

            <div class="message">
                <div class="">Scroll Down to Enter The Amazing World</div>

                <a href="#highlightContent" style="text-decoration: none;"> <i class="fa fa-angle-down"></i></a>
            </div>
        </header>


        <section id="highlightContent">
            <div class="container-fluid">
                <div class="row">
                    <h1 style=" margin-bottom: 2rem;">
                        Today's Highlight<br>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-7 ">
                        <div class="card-container">
                            <div class=" card">


                                <?php
                                include_once("backend/connection.php");
                                $query = "SELECT * FROM posts LIMIT 1";

                                $result = $conn->query($query)->fetch_assoc();

                                $title = $result['title'];
                                $description = $result['description'];
                                $image = $result['image'];
                                $id = $result['id'];
                                $author = $result['author'];
                                $date = $result['date'];
                                ?>



                                <img src="uploads/<?php echo $image; ?>" alt="First Image">
                                <!-- <img src="img/one.jpg" alt="First Image">                             -->
                                <div class="content">
                                    <div class="visible">
                                        <h2><?php echo $title; ?></h2>
                                        <h5><?php echo $author; ?>&nbsp;&middot;
                                            &nbsp;<?php echo $date; ?></h5>
                                    </div>
                                    <div class="hoverVisible">
                                        <h4><?php echo $description; ?></h4>
                                        <h4><a href="post.php?id=<?php echo $id; ?>" target="_blank">Read More</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 otherHighlights vertical-center">

                        <?php

                        $query = "SELECT * FROM posts LIMIT 3";
                        $result = $conn->query($query);
                        while ($row = $result->fetch_assoc()) {

                            $title = $row['title'];
                            $description = $row['description'];
                            $image = $row['image'];
                            $id = $row['id'];
                            $author = $row['author'];
                            $date = $row['date'];

                        ?>
                            <div class="row raised">
                                <div class="col-lg-3 col-md-4">
                                    <img src="uploads/<?php echo $image; ?>" alt="Second">
                                </div>
                                <div class="col-lg-9 col-md-8 spaceBetween">
                                    <h3 class="title"><?php echo $title; ?></h2>
                                        <h5><?php echo $author; ?>&nbsp;&middot;
                                            &nbsp;<?php echo $date; ?></h5>
                                        <a href="post.php?id=<?php echo $id; ?>" target="_blank">Read More</a>
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>


                </div>
            </div>
        </section>


        <section id="posts">


            <div class="container-fluid">
                <?php

                $query1 = "SELECT distinct category from posts";
                $result1 = $conn->query($query1);

                while ($row1 = $result1->fetch_assoc()) {
                    $category = $row1['category'];
                ?>
                    <div class="category">
                        <div class="row">

                            <?php echo "<h1>" . $category . "</h2>"; ?>


                        </div>

                        <div class="row">

                            <?php

                            $query2 = "SELECT * FROM posts WHERE category = '$category'";
                            $result2 = $conn->query($query2);
                            while ($row = $result2->fetch_assoc()) {

                                $title = $row['title'];
                                $description = $row['description'];
                                $image = $row['image'];
                                $id = $row['id'];
                                $author = $row['author'];
                                $date = $row['date'];

                            ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 card-container">
                                    <div class="card">
                                        <img src="uploads/<?php echo $image; ?>" alt="">
                                        <div class="content">
                                            <div class="visible">
                                                <h3 class="title"><?php echo $title; ?></h3>
                                                <h5><?php echo $author; ?>&nbsp;&middot;
                                                    &nbsp;<?php echo $date; ?></h5>
                                            </div>
                                            <div class="hoverVisible">
                                                <h4><?php echo $description; ?></h4>
                                                <h4><a href="post.php?id=<?php echo $id; ?>" target="_blank">Read More</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>


        <!-- <div id="sample" style="display: none;">
            <div class="card">
                <img src="img\1_1.jpg" alt="">
                <div class="content">
                    <div class="visible">
                        <h3 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adip</h3>
                        <h5>Author</h5>
                    </div>
                    <div class="hoverVisible">
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, laborum fugiat eius corrupti eum adipisci. Fuga sunt minima corporis tempore quisquam. Dolor maxime sunt ipsa doloremque cumque a quibusdam recusandae!z</h4>
                        <h4><a href="#" target="_blank">Read More</a></h4>
                    </div>
                </div>
            </div>
        </div> -->



        <?php include_once("footer.php") ?>
        <script>
            document.addEventListener('animationstart', function(e) {
                if (e.animationName === 'fade-in') {
                    e.target.classList.add('did-fade-in');
                }
            });

            document.addEventListener('animationend', function(e) {
                if (e.animationName === 'fade-out') {
                    e.target.classList.remove('did-fade-in');
                }
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>
    
    
    <?php
} else {
    header("location: login.php?redirect=blog");
}

?>