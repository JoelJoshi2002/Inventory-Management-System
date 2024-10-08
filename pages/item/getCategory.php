<?php
include '../../config.php';
$query = "SELECT distinct cat_first_category,cat_sl_no  FROM inv_category";
$run = mysqli_query($conn, $query);
// $option = [];
if ($num = mysqli_num_rows($run) > 0) {
    while ($result = mysqli_fetch_assoc($run)) {
        echo "<option value='" . strval($result['cat_first_category']) . "' data=".$result['cat_sl_no'].">" . $result['cat_first_category'] . "</option>";
    }
}