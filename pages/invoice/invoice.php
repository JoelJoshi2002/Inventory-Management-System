<?php
//For Including Config.php
include '../../config.php';
if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST') {
    //Getting Values From Form

    $eby = "josh";
    $numbere = test_input($_POST['invoicenumber']);
    $datee = test_input($_POST['invoicedate']);
    $deliv_datee = test_input($_POST['delivereddate']);
    $supplier = test_input($_POST['supplier']);
    $noofitems = (int)test_input($_POST['numberofitems']);
    $amount = (int)test_input($_POST['amount']);
    $sgst = (int)test_input($_POST['sgst']);
    $cgst = (int)test_input($_POST['cgst']);
    $igst = (int)test_input($_POST['igst']);
    $totAftDis = (int)test_input($_POST['totalafterdiscount']);
    $podate = (int)test_input($_POST['podate']);
    $ponumber = (int)test_input($_POST['ponumber']);
    $dept_no = (int)test_input($_POST['dept_no']);
    $staff_id = (int)test_input($_POST['staff_id']);
    $amount_paid_on = (int)test_input($_POST['amount_paid_on']);
    $payment_remarks = (int)test_input($_POST['payment_remarks']);
    $totalamount = (int)test_input($_POST['totalamount']);
    $payment_status = (int)test_input($_POST['payment_status']);
    $remarks = test_input($_POST['remarks']);


    // $supplier_id = $getResult['sup_sl'];

    $file = $_FILES['invfile'];
    $file_name = $_FILES['invfile']['name'];
    $file_type = $_FILES['invfile']['type'];
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_size = $_FILES['invfile']['size'];
    $file_temp_loc = $_FILES['invfile']['tmp_name'];

    $auto_increment_query = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'inv' AND TABLE_NAME = 'inv_invoice_master'";
    $auto_increment_run = mysqli_query($conn, $auto_increment_query);
    $auto_increment_result = mysqli_fetch_assoc($auto_increment_run);

    $auto_increment_file_name = strval($auto_increment_result['AUTO_INCREMENT']);

    $file_store = "../../uploads/" . $auto_increment_file_name . '.' . $file_extension;
    move_uploaded_file($file_temp_loc, $file_store);


    // Query For inserting Invoice Data Into Database
    $query = "INSERT INTO inv_invoice_master (inv_inv_no, inv_date, inv_delivered_date, inv_sup_id,inv_no_items,inv_amount,inv_sgst,inv_cgst,inv_igst,inv_tot_after_discount,inv_entered_by,inv_remarks, inv_po_date, inv_po_no, inv_dept_no, inv_staff_id, inv_amount_paid_on, inv_payment_remarks, inv_tot_amount, inv_payment_status ) VALUES
    ('$numbere','$datee','$deliv_datee','$supplier','$noofitems','$amount','$sgst','$cgst','$igst','$totAftDis','$eby','$remarks','$podate','$ponumber','$dept_no','$staff_id','$amount_paid_on','$payment_remarks','$totalamount','$payment_status')";
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
