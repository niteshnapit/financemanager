<?php
require "dbh.php";
include('../../shared/navbar.php');


$sqlCategories = "SELECT * FROM categories";
$queryCategories = mysqli_query($conn, $sqlCategories);
$numCategories = mysqli_num_rows($queryCategories);

?>


<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <br><br>
            <h5>All Categories</h5>
            <a class="btn btn-warning" href="add-category.php">Add Category</a>
            <br><br>

            <?php
            $counter = 0;
            while ($rowCategories = mysqli_fetch_assoc($queryCategories)) {
                $counter++;
                $id = $rowCategories['cat_id'];
                $name = $rowCategories['cat_name'];
            ?>
                <div class="card">
                    <div class="card-body">
                        <h6><?php echo $counter; ?></h6><br>
                        <h6><?php echo $name; ?></h6><br>
                        <a class="btn btn-danger" href="delete_category.php?cid=<?php echo $id;?>">Delete</a>
                        <a class="btn btn-warning" href="edit-category.php?cid=<?php echo $id;?>">Edit</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
