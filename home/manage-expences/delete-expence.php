<?php
include_once "dbh.php";

if(isset($_GET['eid'])){

    $eid = $_GET['eid'];
    // echo $eid;
    $sqlDelExpence = "DELETE FROM expences WHERE id='$eid'";
    $result = mysqli_query($conn,$sqlDelExpence);
    if($result){
        header("Location: all-expences.php");
    }
    else{
        echo "Error!";
    }
}
else{
    echo "Error!";
}
?>