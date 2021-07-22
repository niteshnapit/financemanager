<?php
include_once "dbh.php";

if(isset($_GET['cid'])){

    $cid = $_GET['cid'];
    $sqlDelCategory = "DELETE FROM categories WHERE cat_id='$cid'";
    $result = mysqli_query($conn,$sqlDelCategory);
    if($result){
        header("Location: all-categories.php");
    }
    else{
        echo "Error!";
    }
}
else{
    echo "Error!";
}
?>