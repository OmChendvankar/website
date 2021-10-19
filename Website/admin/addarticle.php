<?php
include '../config.php';
require "header.php";
if (isset($_POST['submit'])){

    $categories=$_POST['categories'];
    $sub_categories=$_POST['sub_categories'];
    $title=$_POST['title'];
    $image=$_FILES['image'];
    $brief_desc=$_POST['brief_desc'];
    $description=$_POST['description'];
    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $img_des="img/".$image_name;
    move_uploaded_file($image_loc,"img/".$image_name);

    $query="INSERT INTO `article`(`cat_id`, `sub_cat_id`, `title`, `image`, `brief_desc`, `description`) 
    VALUES ('$categories', '$sub_categories','$title','$img_des','$brief_desc', '$description')";
    // $q=mysqli_query($conn,$query);
    if(mysqli_query($conn, $query)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}    
?>
        <div class="div">
            <form class="fw-bold" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center fs-4 ">Add Article </p>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                    Categories
                    </label>
                    <select name="categories" class="required-entry" id="category" onchange="reload()">
                    <option value="" hidden>select</option>
                    <?php
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['id'] == $categories) {
                            echo '<option selected value="' . $row['id'] . '">' . $row['cat_name'] . '</option>';
                        } elseif($row['id'] == $_GET['cat']){
                            echo '<option selected value="' . $row['id'] . '">' . $row['cat_name'] . '</option>';    
                        } else {
                            echo '<option value="' . $row['id'] . '">' . $row['cat_name'] . '</option>';
                        }
                    }
                    ?>
                    </select>                
                </div>
                <div class="mb-3">
                    <label class="form-label">Sub-Category</label>
                    <select name="sub_categories" id="sub_category" class="required-entry">
                    <?php 
                    $cat=$_GET['cat'];
                    $sql = "SELECT * FROM `sub_cat` WHERE cat_id= '$cat'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['id'] == $sub_categories) {
                            echo '<option selected value="' . $row['id'] . '">' . $row['sub_cat_name'] . '</option>';
                        } else {
                            echo '<option value="' . $row['id'] . '">' . $row['sub_cat_name'] . '</option>';
                        }
                    }
                    ?>
                    </select>              
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Title
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Upload Image
                    </label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Brief description
                    </label>
                    <input type="text" name="brief_desc" class="form-control" placeholder="Enter Brief Description" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                    Description
                    </label>
                    <input type="text" name="description" class="form-control" placeholder="Enter Description" required>
                </div>
                <input type="submit" class="submit" value="Submit" name="submit" onclick="return Validate()">
            </form>
        </div>
<?php
require "footer.php";
?>
<script type="text/javascript">
    function reload(){
        var v1=document.getElementById("category").value;
        self.location='addarticle.php?cat=' + v1;
    }

    function Validate() {
        var cat = document.getElementById("category");
        var sub_cat = document.getElementById("sub_categories");
        if (category.value == "" || sub_categories.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select an option!");
            return false;
        }
        return true;
    }
</script>