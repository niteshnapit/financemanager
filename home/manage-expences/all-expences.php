<?php
include "../../shared/navbar.php";
require "dbh.php";

// $sqlExpences = "SELECT * FROM expences";
$sqlExpences = "SELECT * FROM expences INNER JOIN categories ON expences.category_id = categories.cat_id";
$queryExpences = mysqli_query($conn, $sqlExpences);
// $numExpences = mysqli_num_rows($$queryExpences);


?>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <br>
            <a class="btn btn-warning" href="add-expence.php">Add Expence</a>
            <br><br>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S No</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Category</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 0;
                    while ($rowExpences = mysqli_fetch_assoc($queryExpences)) {
                        $counter++;
                        $cid = $rowExpences['cat_id'];
                        $expenceId = $rowExpences['id'];
                        $cat_name = $rowExpences['cat_name'];
                        $amount = $rowExpences['amount'];
                        $date = $rowExpences['expence_date'];
                    ?>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $amount; ?></td>
                            <td><?php echo $cat_name; ?></td>
                            <td><?php echo $date; ?></td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="delete-expence.php?eid=<?php echo $expenceId; ?>">Delete</a>
                                <!-- <a class="btn btn-sm btn-warning" href="edit-expence.php?cid=<?php echo $cid; ?>">Edit</a> -->
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>