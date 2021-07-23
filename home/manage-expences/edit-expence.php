<?php
include_once "dbh.php";
include('../../../shared/navbar.php');

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    // echo $cid;
    $sql = "SELECT * FROM expences INNER JOIN categories ON expences.category_id = categories.cat_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $amount =  $row["amount"];
        $cat_name =  $row["cat_name"];
        $cat_id =  $row["category_id"];
        echo $amount;
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><br><br><br>
            <form action="save-edit-expence.php" method="post">
                <input type="hidden" value="<?php echo $cat_id; ?>" name="cid">
                <input type="text" name="edit-amount" value="<?php echo $amount; ?>" class="form-control">
                <br><br>

                <select name="category-name" class="form-select">
                    <option value=""><?php echo $cat_name; ?></option>
                    <?php

                    $sqlCategories = "SELECT * FROM categories";
                    $queryCategories = mysqli_query($conn, $sqlCategories);
                    $numCategories = mysqli_num_rows($queryCategories);


                    while ($rowCategories = mysqli_fetch_assoc($queryCategories)) {
                        // $counter++;
                        $id = $rowCategories['cat_id'];
                        $name = $rowCategories['cat_name'];
                        echo "<option value='" . $id . "'>" . $name . "</option>";
                    } ?>
                </select><br>
                <button class="btn btn-success" name="submit-category">Update</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>