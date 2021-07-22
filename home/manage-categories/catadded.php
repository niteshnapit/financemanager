<?php
require "dbh.php";


if (isset($_POST['submit-category'])){
    $category_name = $_POST['category-name'];
}

$sqlAddCategory = "INSERT INTO categories(cat_name) VALUES('$category_name')";
mysqli_query($conn,$sqlAddCategory);
   
header("Location: all-categories.php");