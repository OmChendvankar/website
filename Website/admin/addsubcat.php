<?php
include '../config.php';
require "header.php";
if (isset($_POST['submit'])){

    $category_id=$_POST['category_id'];
    $sub_cat_name=$_POST['sub_cat_name'];

    $query="INSERT INTO `sub_cat`(`cat_id`, `sub_cat_name`) 
    VALUES ('$category_id', '$sub_cat_name')";
    if(mysqli_query($conn, $query)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}

?>
<div class="div">
<form action="" class="fw-bold" method="POST">
    <div class="subc">
        <p class="">Add Sub-Category</p>
    </div>
    <div id="form">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-select">
        <?php
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['id'] == $category_id) {
                    echo '<option selected value="' . $row['id'] . '">' . $row['cat_name'] . '</option>';
                } else {
                    echo '<option value="' . $row['id'] . '">' . $row['cat_name'] . '</option>';
                }
            }
        ?>
        </select>
    </div>
    <div>
        <label class="form-label">Sub-Category Name</label>
        <input type="text" name="sub_cat_name" class="form-control" placeholder="Enter Subcategory Name" required>
    </div>
    <input type="submit" value="Submit" name="submit" class="submit">
</form>
</div>
<?php
    require "footer.php";
?>
