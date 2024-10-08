<?php
include '../../config.php';

if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = $_POST['categoryname'];
    $query = "SELECT distinct cat_second_category, cat_sl_no FROM inv_category WHERE cat_first_category='$name'";
    $run = mysqli_query($conn, $query);
    if ($num = mysqli_num_rows($run) > 0) {
        while ($result = mysqli_fetch_assoc($run)) {
            echo "<option value='" . strval($result['cat_second_category']) . "' data=" . $result['cat_sl_no'] . ">" . $result['cat_second_category'] . "</option>";
        }
    }
}
