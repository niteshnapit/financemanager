<?php
include "../../shared/navbar.php";
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
            <input type="text" class="form-control" name="amount" placeholder="add amount">
            <br>
            <select name="category-name" class="form-select">
                <option value="">Select a Category</option>
                <?php
                while ($rowCategories = mysqli_fetch_assoc($queryCategories)) {
                    // $counter++;
                    $id = $rowCategories['cat_id'];
                    $name = $rowCategories['cat_name'];
                    echo "<option value='".$id."'>".$name."</option>";
                     } ?>
            </select>



            <br><br><br>
            <button name="submit-expence" class="btn btn-danger">Add</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>