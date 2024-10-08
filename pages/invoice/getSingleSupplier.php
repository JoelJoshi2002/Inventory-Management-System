<?php
include '../../config.php';

if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    $sl = $_POST['supplier'];
    $query = "SELECT sup_name, sup_address FROM inv_supplier where sup_sl=$sl";
    $run = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($run);
    echo implode(",", $result);
    // return $result;
}
