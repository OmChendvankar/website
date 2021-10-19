<?php
require "header.php";

if(isset($_GET['action'])) {
    $action=$_GET['action'];
    if($action == 'delete') {
        $id=$_GET['id'];
        $sql = mysqli_query($conn, "delete from sub_cat where id = '$id'");
    }
}

?>
<div class="row my-5">
    <h3 class="fs-4 mb-3" id="msg">Sub-Categories</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $Record = mysqli_query($conn, "Select * from sub_cat,categories WHERE sub_cat.cat_id = categories.id");
                while ($row = mysqli_fetch_array($Record)) {
                ?>
                <tr>
                        <td><?php echo $row['sub_cat_name'] ?></td>
                        <td><?php echo $row['cat_name']?></td>
                        <td><a class="dbutton" href="subcats.php?action=delete&id=<?php echo $row['id']?>">Delete</a></td>
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