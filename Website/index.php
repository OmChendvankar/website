<?php 
include "./config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Daily Magazine|Home</title>

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Daily Magazine</a>

            <a class="navbar-brand" href="politics.php">Politics</a>
            
            <a class="navbar-brand" href="science.php">Science</a>

            <a class="navbar-brand" href="business.php">Business</a>

            <a class="navbar-brand" href="sports.php">Sports</a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="#politics">Politics
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#business">Business
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#science">Science
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sports">Sports
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main>
        <section id="index_headder">
            <div id="headTag">
                India’s Daily Magazine
            </div>
        </section>

        <section id="politics"><!--Politics-->
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead"><a href="politics.php">Politics</a></div>
                        <div class="sectiondesc"><a>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status. The branch of social science that studies politics and government is referred to as political science.</a></div>
                        <hr>
                        <br>
                    </div>
                    <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=1 order by article_id desc limit 4");
                    while ($row = mysqli_fetch_array($Record)) {
                    ?>
      
                    <div class="col-md-3">
                    <div class="box"><!--News box -->
                        <img class="Politics_image" src="./admin/<?php echo $row['image'];?>" alt="Image here...">
                        <p><?php echo $row['title'];?><br><a><?php echo $row['brief_desc'];?></a></p>
                        <form action="article.php" method="get">
                            <input type="hidden" name="article_id" value="<?php echo $row['article_id'] ?>">
                            <button type="submit" class="btn  btn-success">View Article</button>
                        </form>
                    </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

        <section id="business"><!--Business-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead"><a href="business.php">Business</a></div>
                        <hr>
                        <br>
                    </div>
                    <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=3 order by article_id desc limit 4");
                    while ($row = mysqli_fetch_array($Record)) {
                    ?>
      
                    <div class="col-md-3">
                    <div class="box"><!--Business-->
                        <img class="Politics_image" src=",/img/<?php echo $row['image'];?>" alt="Image here...">
                        <p><?php echo $row['title'];?><br><a><?php echo $row['brief_desc'];?></a></p>
                        <form action="article.php" method="get">
                            <input type="hidden" name="article_id" value="<?php echo $row['article_id'] ?>">
                            <button type="submit" class="btn  btn-success">View Article</button>
                        </form>
                    </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

        <section id="science"><!--shopping-->
            <div class="container">
                <div class="col-md-12">
                    <div class="sectionHead"><a href="science.php">Science</a></div>
                    <hr>
                    <br>
                </div>
                <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=2 order by article_id desc limit 4");
                    while ($row = mysqli_fetch_array($Record)) {
                    ?>
      
                    <div class="col-md-3">
                    <div class="box"><!--Business-->
                        <img class="Politics_image" src=",/img/<?php echo $row['image'];?>" alt="Image here...">
                        <p><?php echo $row['title'];?><br><a><?php echo $row['brief_desc'];?></a></p>
                        <form action="article.php" method="get">
                            <input type="hidden" name="article_id" value="<?php echo $row['article_id'] ?>">
                            <button type="submit" class="btn  btn-success">View Article</button>
                        </form>
                    </div>
                    </div>
                    <?php
                        }
                    ?>
            </div>
        </section>

        
        <section id="sports"><!--sports-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead"><a href="sports.php">Sports</a></div>
                        <hr>
                        <br>
                    </div>
                    <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=4 order by article_id desc limit 4");
                    while ($row = mysqli_fetch_array($Record)) {
                    ?>
                    <div class="col-md-3">
                    <div class="box"><!--Sports-->
                        <img class="Politics_image" src=",/img/<?php echo $row['image'];?>" alt="Image here...">
                        <p><?php echo $row['title'];?><br><a><?php echo $row['brief_desc'];?></a></p>
                        <form action="article.php" method="get">
                            <input type="hidden" name="article_id" value="<?php echo $row['article_id'] ?>">
                            <button type="submit" class="btn  btn-success">View Article</button>
                        </form>
                    </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <?php
        require('footer.php');
        ?>
