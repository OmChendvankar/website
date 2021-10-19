<?php
session_start();
include 'config.php';
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $article_id = $_GET['article_id'];
    $sql = "SELECT * FROM article WHERE article_id = '$article_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Article</title>
</head>
<body>
    <div class="articlebox">
        <div class="sectionHead">
        <?php 
        echo $row["title"];
        ?>
        </div>
        <img  class="articleimg" src="./admin/<?php  echo $row["image"]; ?>">
        <div class="desc">
        <?php 
        echo $row["brief_desc"];
        ?>
        </div>
        </br></br>
        <div class="desc">
        <?php 
        echo $row["description"];
        ?>
        </div>
    </div>
</body>
</html>
