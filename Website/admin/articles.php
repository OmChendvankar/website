<?php
require "header.php";

if(isset($_GET['action'])) {
    $action=$_GET['action'];
    if($action == 'delete') {
        $id=$_GET['id'];
        $sql = mysqli_query($conn, "delete from article where article_id = '$id'");
    }
}

?>
<div class="row my-5">
    <h3 class="fs-4 mb-3" id="msg">Articles</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub-Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $Record = mysqli_query($conn, "Select * from sub_cat,categories,article WHERE article.cat_id = categories.id AND article.sub_cat_id = sub_cat.id AND categories.id = sub_cat.cat_id");
                while ($row = mysqli_fetch_array($Record)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row['article_id']?></th>
                        
                        <td><?php echo $row['cat_name'] ?></td>
                        <td><?php echo $row['sub_cat_name']?></td>
                        <td><?php echo $row['title']?></td>
                        <td><a class="dbutton" href="articles.php?action=delete&id=<?php echo $row['article_id']?>">Delete</a></td>
                        <td></td>
                    </tr>
                <?php
                    }
                ?>                            
                </tbody>
            </table>
        </div>
</div>
<?php
require "footer.php";
?>