<?php
include "../../../shared/navbar.php";
require "dbh.php";

$sqlCategories = "SELECT * FROM categories";
$queryCategories = mysqli_query($conn, $sqlCategories);
$numCategories = mysqli_num_rows($queryCategories);

?>

<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"><br><br><br>
            <form action="submit-add-expence.php" method="post">
            <input type="text" class="form-control" placeholder="add expence">
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Category</option>
                <?php
                while ($rowCategories = mysqli_fetch_assoc($queryCategories)) {
                    // $counter++;
                    $id = $rowCategories['cat_id'];
                    $name = $rowCategories['cat_name'];
                ?>    
                <option value="1"><?php echo $name; ?></option>
               <?php } ?>
            </select>
            <br><br><br>
            <button name="submit-expence" class="btn btn-danger">Add</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>