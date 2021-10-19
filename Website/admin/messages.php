<?php
include "../config.php";
require "header.php";

if(isset($_GET['action'])) {
    $action=$_GET['action'];
    if($action == 'delete') {
        $id=$_GET['id'];
        $sql = mysqli_query($conn, "delete from contact where id = '$id'");
    }
}
?>
<div class="row my-5">
    <h3 class="fs-4 mb-3" id="msg">Messages</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $Record = mysqli_query($conn, "Select * from contact");
                while ($row = mysqli_fetch_array($Record)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td><?php echo $row['message']?></td>
                        <td><a class="dbutton" href="messages.php?action=delete&id=<?php echo $row['id']?>">Delete</a></td>
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

