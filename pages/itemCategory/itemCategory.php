<?php
//For Including Config.php
include '../../config.php';
//Posting Data
if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    //Getting Values From Form

    $eby = "josh";
    $status = test_input($_POST['status']);
    $priority = test_input($_POST['priority']);
    $first_category = test_input($_POST['firstcategory']);
    $first_desc = test_input($_POST['firstdescription']);
    $second_category = test_input($_POST['secondcategory']);
    $second_desc = test_input($_POST['seconddescription']);
    $third_category = test_input($_POST['thirdcategory']);
    $third_desc = test_input($_POST['thirddescription']);
    $remarks = test_input($_POST['remarks']);


    // Query For inserting Invoice Data Into Database
    $query = "INSERT INTO inv_category (cat_status, cat_priority, cat_first_category, cat_first_desc, cat_second_category, cat_second_desc, cat_third_category, cat_third_desc, cat_remarks, cat_entered_by) VALUES('$status','$priority','$first_category','$first_desc','$second_category','$second_desc','$third_category','$third_desc','$remarks','$eby')";
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
