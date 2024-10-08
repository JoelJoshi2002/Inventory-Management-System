<?php
//For Including Config.php
include '../../config.php';
//Posting Data
if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {

    //Getting Values From Form

    $eby = "josh";
    $INVID = test_input($_POST['INVID']);
    $itemID = test_input($_POST['itemID']);
    $itemID = test_input($_POST['itemID']);
    $itemSL = test_input($_POST['itemSL']);
    $make_year = test_input($_POST['make_year']);
    $asset_code = test_input($_POST['asset_code']);
    $purpose = test_input($_POST['purpose']);
    $current_place = test_input($_POST['current_place']);
    $building = test_input($_POST['building']);
    $room_no = test_input($_POST['room_no']);
    $primary_custodian = test_input($_POST['primary_custodian']);
    $in_charge = test_input($_POST['in_charge']);
    $remarks = test_input($_POST['remarks']);
    $eby = test_input($_POST['eby']);


    // Query For inserting Invoice Data Into Database
    $query = "INSERT INTO inv_invoice_details  (sl_no , inv_id, inv_item_id, item_sl_no, make_year, asset_code, purpose, current_place, building, room_no,purchased_to, primary_custodian, in_charge, remarks, entered_by) VALUES('$SL','$INVID','$itemID','$itemSL','$make_year','$asset_code','$purpose','$current_place','$building','$room_no', '$puarchased_to', '$primary_custodian', '$in_charge', '$remarks', '$eby')";
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
