<?php
//For Including Config.php
include '../../config.php';
//Posting Data
if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    //Getting Values From Form
    $eby = "josh";
    $name = test_input($_POST['username']);
    $category = test_input($_POST['category']);
    $address = test_input($_POST['address']);
    $district = test_input($_POST['district']);
    $contactperson = test_input($_POST['contactperson']);
    $mobile1 = (int)test_input($_POST['mobile1']);
    $mobile2 = (int)test_input($_POST['mobile2']);
    $telephone = (int)test_input($_POST['telephone']);
    $email = test_input($_POST['email']);
    $accountnumber = (int)test_input($_POST['accountnumber']);
    $accountholder = test_input($_POST['accountholder']);
    $bankname = test_input($_POST['bankname']);
    $bankbranch = test_input($_POST['bankbranch']);
    $ifsc = test_input($_POST['ifsc']);
    $micr = test_input($_POST['micr']);
    $remarks = test_input($_POST['remarks']);

    // Query For inserting Values Into Database
    $query = "INSERT INTO inv_supplier(sup_entered_by,sup_name,sup_category,sup_address,sup_district,sup_contact_person,sup_mobile_one,sup_mobile_two,sup_tel_no,sup_email,sup_accno,sup_acc_holder,sup_bank,sup_branch,sup_ifsc,sup_micr,sup_remarks) VALUES('$eby','$name','$category','$address','$district','$contactperson','$mobile1','$mobile2','$telephone','$email','$accountnumber','$accountholder','$bankname','$bankbranch','$ifsc','$micr','$remarks')";
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
