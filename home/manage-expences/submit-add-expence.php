<?php
// include "../../../shared/navbar.php";
include "dbh.php";

if(isset($_POST['submit-expence'])){
    $amount = $_POST['amount'];
    $cid = $_POST['category-name'];
    
    $date = date('Y-m-d');

    // echo $amount."<br>";
    // echo $cid."<br>";
    // echo $date."<br>";

    $sqlAddExpence = "INSERT INTO expences(category_id, amount, expence_date) VALUES('$cid','$amount', '$date')";

    if(mysqli_query($conn, $sqlAddExpence)){
        header("Location: all-expences.php");
    }
}