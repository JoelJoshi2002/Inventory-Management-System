<?php
include '../../config.php';
$query = "SELECT distinct inv_inv_no,inv_sl  FROM inv_invoice_master";
$run = mysqli_query($conn, $query);
// $option = [];
if ($num = mysqli_num_rows($run) > 0) {
    while ($result = mysqli_fetch_assoc($run)) {
        echo "<option value='" . strval($result['inv_inv_no']) . "' data=" . $result['inv_sl'] . ">" . $result['inv_inv_no'] . "</option>";
    }
}
