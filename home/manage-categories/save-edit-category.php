<?php
require "dbh.php";

if(isset($_POST['submit-category'])){
    $id = $_POST['cid'];
    $name = $_POST['category-name'];
    // echo $cid;
    // echo $name;

    $sqlEditCategory = "UPDATE categories SET cat_name='$name' WHERE cat_id='$id'";    
    $result = mysqli_query($conn,$sqlEditCategory);
    if($result){
        header("Location: all-categories.php");
    }
}