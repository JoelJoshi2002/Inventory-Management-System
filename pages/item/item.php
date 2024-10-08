<?php
//For Including Config.php
include '../../config.php';
//Posting Data
if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    //Getting Values From Form

    $eby = "josh";
    $category_id = test_input($_POST['categoryid']);
    $priority = test_input($_POST['priority']);
    $status = test_input($_POST['status']);
    $name = test_input($_POST['name']);
    $description = test_input($_POST['description']);
    $specification = test_input($_POST['specification']);
    $reffered_by = test_input($_POST['refferedby']);

    // Query For inserting Invoice Data Into Database
    $query = "INSERT INTO inv_item (inv_itm_category_id, inv_itm_priority, inv_itm_status, inv_itm_name, inv_itm_description, inv_itm_specification, inv_itm_reffered_by, inv_itm_entered_by) VALUES('$category_id','$priority','$status','$name','$description','$specification','$reffered_by','$eby')";
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
