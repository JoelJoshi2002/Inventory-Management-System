<?php
include '../../config.php';
$query = "SELECT * FROM inv_supplier";
$run = mysqli_query($conn, $query);
// $option = [];
if ($num = mysqli_num_rows($run) > 0) {
    while ($result = mysqli_fetch_assoc($run)) {
        echo "<option value='" . strval($result['sup_sl']) . "'>" . $result['sup_name'] . "</option>";
    }
}

// return $option;
