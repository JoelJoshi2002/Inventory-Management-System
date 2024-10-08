<?php
//For Including Config.php
include 'config.php';
//Posting Data
if (isset($_POST['submit'])) {
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
    $remarks = test_input($_POST['remarks']);

    $getQuery = "SELECT * FROM inv_supplier WHERE sup_name='$supplier'";
    $getRun = mysqli_query($conn, $getQuery);
    $getResult = mysqli_fetch_assoc($getRun);

    $supplier_id = $getResult['sup_sl'];

    $file = $_FILES['invfile'];
    $file_name = $_FILES['invfile']['name'];
    $file_type = $_FILES['invfile']['type'];
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $file_size = $_FILES['invfile']['size'];
    $file_temp_loc = $_FILES['invfile']['tmp_name'];

    $auto_increment_query = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'inv' AND TABLE_NAME = 'inv_master'";
    $auto_increment_run = mysqli_query($conn, $auto_increment_query);
    $auto_increment_result = mysqli_fetch_assoc($auto_increment_run);

    $auto_increment_file_name = strval($auto_increment_result['AUTO_INCREMENT']);

    $file_store = "uploads/" . $auto_increment_file_name . '.' . $file_extension;
    move_uploaded_file($file_temp_loc, $file_store);


    // Query For inserting Invoice Data Into Database
    $query = "INSERT INTO inv_master (inv_inv_no, inv_date, inv_delivered_date, inv_sup_id,inv_no_items,inv_amount,inv_sgst,inv_cgst,inv_igst,inv_tot_after_discount,inv_entered_by,inv_remarks) VALUES('$numbere','$datee','$deliv_datee','$supplier_id','$noofitems','$amount','$sgst','$cgst','$igst','$totAftDis','$eby','$remarks')";
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/cms.css">
    <link rel="stylesheet" href="./styles/cms_thm.css">
    <title>Invoice Entry</title>

</head>

<body>
    <!--Form For Inputing Data -->
    <div class="klub_tab_tl1_x cms_tile_hldr" align="center" style="background-color: #fffaf1;">
        <form onsubmit="postData()" id="invoiceTable" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="invoicenumber">Invoice Number: </label>
                    </td>
                    <td>
                        <input type="text" name="invoicenumber" id="invoicenumber" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="invoicedate">Invoice Date: </label>
                    </td>
                    <td>
                        <input type="text" name="invoicedate" id="invoicedate" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="delivereddate">Delivered Date: </label>
                    </td>
                    <td>
                        <input type="text" name="delivereddate" id="delivereddate" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="supplier">Supplier: </label>
                    </td>
                    <td>
                        <input type="text" list="supplier" name="supplier" id="suppliers" class="klub_input klub_h3 cms_inp_det1">
                        <datalist id="supplier" id="supplierDataList">
                            <?php
                            $query = "SELECT * FROM inv_supplier";
                            $run = mysqli_query($conn, $query);
                            if ($num = mysqli_num_rows($run) > 0) {
                                while ($result = mysqli_fetch_assoc($run)) {
                                    echo "<option value='" . strval($result['sup_name']) . "'>" . $result['sup_name'] . "</option>";
                                }
                            }
                            ?>
                        </datalist>
                        <a href="./supplier.php" class="button-3" role="button">Add Supplier</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numberofitems">Number of Items: </label>
                    </td>
                    <td>
                        <input type="text" name="numberofitems" id="numberofitems" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="amount">Amount : </label>
                    </td>
                    <td>
                        <input type="text" name="amount" id="amount" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sgst">SGST: </label>
                    </td>
                    <td>
                        <input type="text" name="sgst" id="sgst" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cgst">CGST: </label>
                    </td>
                    <td>
                        <input type="text" name="cgst" id="cgst" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="igst">IGST: </label>
                    </td>
                    <td>
                        <input type="text" name="igst" id="igst" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="totalafterdiscount">Total After Discount: </label>
                    </td>
                    <td>
                        <input type="text" name="totalafterdiscount" id="totalafterdiscount" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="remarks">Remakrs: </label>
                    </td>
                    <td>
                        <input type="text" name="remarks" id="remarks" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="invfile">Upload Invoice: </label>
                    </td>
                    <td>
                        <input type="file" name="invfile" id="invfile" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn btn-success" role="button" type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <a href="./showInvoice.php" class="button-3" role="button">Show Invoice</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        /*@ Registration start */
        function postData(e) {
            e.preventDefault();

            let formData = $('#invoiceTable').serialize();

            $.ajax({
                method: 'POST',
                url: 'invoice.php',
                data: formData,
                success: function(response) {

                    let res = JSON.parse(response);

                    console.log(res)

                },
                error: function(response) {

                    let res = JSON.parse(response.responseText);

                    console.log(res)
                },
            });
        };
    </script>
</body>

</html>