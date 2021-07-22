<?php 
include_once "dbh.php";
include('../../shared/navbar.php');

if(isset($_GET['cid'])){
    $cid = $_GET['cid'];
    $sql = "SELECT * FROM categories WHERE cat_id='$cid'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $cat_name =  $row["cat_name"];
        $cat_id =  $row["cat_id"];
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><br><br><br>
            <form action="save-edit-category.php" method="post">
                <input type="hidden" value="<?php echo $cat_id;?>" name="cid"> 
                <input type="text" name="category-name" value="<?php echo $cat_name;?>" class="form-control">
                <br><br>
                <button class="btn btn-success" name="submit-category">Save</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>