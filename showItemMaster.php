<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Show Item Category</title>
</head>

<body>
    <!--Creating the table -->
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>SL</th>
            <th>Invoice ID</th>
            <th>Item Name</th>
            <th>Model Number</th>
            <th>Make</th>
            <th>HSN/SAC</th>
            <th>CGST</th>
            <th>SGST</th>
            <th>IGST</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Warranty Period</th>
            <th>Warranty From</th>
            <th>Warranty To</th>
            <th>Remarks</th>
            <th>By</th>
            <th>On</th>
        </tr>
        <?php
        //for including config.php
        include 'config.php';
        $query = "SELECT * FROM inv_item_master";
        $run = mysqli_query($conn, $query);
        if ($num = mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                echo "
                <tr>
                    
                    <td>" . $result['sl_no'] . "</td>
                    <td>" . $result['inv_id'] . "</td>
                    <td>" . $result['item_name'] . "</td>
                    <td>" . $result['item_model_no'] . "</td>
                    <td>" . $result['item_make'] . "</td>
                    <td>" . $result['item_hsn_sac'] . "</td>
                    <td>" . $result['item_cgst'] . "</td>
                    <td>" . $result['item_sgst'] . "</td>
                    <td>" . $result['item_igst'] . "</td>
                    <td>" . $result['item_unit_price'] . "</td>
                    <td>" . $result['item_quantity'] . "</td>
                    <td>" . $result['item_amount'] . "</td>
                    <td>" . $result['item_warranty_period'] . "</td>
                    <td>" . $result['item_warranty_from'] . "</td>
                    <td>" . $result['item_warranty_to'] . "</td>
                    <td>" . $result['item_remarks'] . "</td>
                    <td>" . $result['item_entered_on'] . "</td>
                    <td>" . $result['item_entered_by'] . "</td>
                </tr>
                ";
            }
        }
        ?>
    </table>
    <br>

</body>

</html>