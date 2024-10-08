<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Show Supplier</title>
</head>

<body>
    <!--Creating the table -->
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Category</th>
            <th>Contact Person</th>
            <th>Mobile 1</th>
            <th>Mobile 2</th>
            <th>Telephone</th>
            <th>e-Mail</th>
            <th>Account No</th>
            <th>Account Holder</th>
            <th>Bank Name</th>
            <th>Bank Branch</th>
            <th>IFSC</th>
            <th>MICR</th>
            <th>Entered On</th>
            <th>Entered By</th>
            <th>Status</th>
            <th>Remarks</th>
        </tr>
        <?php
        //for including config.php
        include 'config.php';
        $query = "SELECT * FROM inv_supplier";
        $run = mysqli_query($conn, $query);
        if ($num = mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                echo "
                <tr>
                    
                    <td>" . $result['sup_sl'] . "</td>
                    <td>" . $result['sup_name'] . "</td>
                    <td>" . $result['sup_address'] . "</td>
                    <td>" . $result['sup_district'] . "</td>
                    <td>" . $result['sup_category'] . "</td>
                    <td>" . $result['sup_contact_person'] . "</td>
                    <td>" . $result['sup_mobile_one'] . "</td>
                    <td>" . $result['sup_mobile_two'] . "</td>
                    <td>" . $result['sup_tel_no'] . "</td>
                    <td>" . $result['sup_email'] . "</td>
                    <td>" . $result['sup_accno'] . "</td>
                    <td>" . $result['sup_acc_holder'] . "</td>
                    <td>" . $result['sup_bank'] . "</td>
                    <td>" . $result['sup_branch'] . "</td>
                    <td>" . $result['sup_ifsc'] . "</td>
                    <td>" . $result['sup_micr'] . "</td>
                    <td>" . $result['sup_entered_on'] . "</td>
                    <td>" . $result['sup_entered_by'] . "</td>
                    <td>" . $result['sup_status'] . "</td>
                    <td>" . $result['sup_remarks'] . "</td>
                </tr>
                ";
            }
        }
        ?>
    </table>
    <br>
    <a href="./invoice.php" class="button-3" role="button">Invoice Entry</a>

</body>

</html>