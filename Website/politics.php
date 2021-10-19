<?php 
session_start();
include "config.php";
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
    <title>Daily Magazine|Politics</title>

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
                        <a class="nav-link" href="#international">International
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#national">National
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#local">Local
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
        <section id="politics_headder">
            <div id="headTag">
                Politics
            </div>
        </section>

        <section id="international"><!--Inter national news (Source:cnbc.com)-->
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead">International Affairs</div>
                        <hr>
                        <br>
                    </div>
                    <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=1 and sub_cat_id=1 order by article_id desc limit 4");
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

        <section id="national"><!--National news (Source:indiatoday.in)-->
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead">National Affairs</div>
                        <hr>
                        <br>
                    </div>
                    <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=1 and sub_cat_id=2 order by article_id desc limit 4");
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

        <section id="local"><!--Local news (Source:hindustantimes.com)-->
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionHead">Local Affairs</div>
                        <hr>
                        <br>
                    </div>
                    <?php 
                    $Record = mysqli_query($conn, "Select * from article where cat_id=1 and sub_cat_id=3 order by article_id desc limit 4");
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

        <?php
        require('footer.php');
        ?>

</body>

</html>
