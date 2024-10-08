<?php
//For Including Config.php
include 'config.php';
//Posting Data
if (isset($_POST['submit'])) {
    //Getting Values From Form

    $eby = "josh";
    $slno = test_input($_POST['slno']);
    $invid = test_input($_POST['invid']);
    $name = test_input($_POST['name']);
    $modelno = test_input($_POST['modelno']);
    $make = test_input($_POST['make']);
    $hsn = test_input($_POST['hsn']);
    $cgst = test_input($_POST['cgst']);
    $sgst = test_input($_POST['sgst']);
    $igst = test_input($_POST['igst']);
    $price = test_input($_POST['price']);
    $quantity = test_input($_POST['quantity']);
    $amount = test_input($_POST['amount']);
    $warrantyperiod = test_input($_POST['warrantyperiod']);
    $warrantyfrom = test_input($_POST['warrantyfrom']);
    $warrantyto = test_input($_POST['warrantyto']);
    $remarks = test_input($_POST['remarks']);



    // Query For inserting Invoice Data Into Database
    $query = "INSERT INTO invMaster(sl_no, inv_id, item_name, item_model_no, item_make, item_hsn_sac, item_cgst, item_sgst, item_igst, item_unit_price,item_quantity, item_amount, item_warranty_period, item_warranty_from, item_warranty_to, item_remarks, item_entered_on, item_entered_by) VALUES('$slno','$invid','$name','$modelno','$make','$hsn','$cgst','$sgst','$igst','$price','$quantity','$amount','$warrantyperiod','$warrantyfrom','$warrantyto','$remarks','$eby')";
    $run = mysqli_query($conn, $query);
}

function test_input($data)
{
    // Removing extra spaces
    $data = trim($data);
    //Removing Slashes
    $data = stripslashes($data);
    //Removing Special Charachters
    $data = htmlspecialchars($data);
    return $data;
}



?>