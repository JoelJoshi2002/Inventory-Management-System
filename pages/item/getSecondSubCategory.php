<?php
include '../../config.php';

if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    $name = $_POST['subcategoryname'];
    $query = "SELECT distinct cat_third_category, cat_sl_no FROM inv_category WHERE cat_second_category='$name'";
    $run = mysqli_query($conn, $query);
    if ($num = mysqli_num_rows($run) > 0) {
        while ($result = mysqli_fetch_assoc($run)) {
            echo "<option value='" . strval($result['cat_third_category']) . "' data=" . $result['cat_sl_no'] . ">" . $result['cat_third_category'] . "</option>";
        }
    }
}
