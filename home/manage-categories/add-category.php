<?php include('../../shared/navbar.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><br><br><br>
            <form action="catadded.php" method="post">
                <input type="text" name="category-name" class="form-control" placeholder="Add New Category"><br><br>
                <button class="btn btn-success" name="submit-category">Add Category</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>