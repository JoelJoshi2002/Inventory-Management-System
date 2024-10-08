<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Show Invoice</title>
</head>

<body>
    <!--Creating the table -->
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>SL</th>
            <th>Invoice Number</th>
            <th>Invoice Date</th>
            <th>Delivered Date</th>
            <th>Supplier ID</th>
            <th>Number of Items</th>
            <th>Total Amount</th>
            <th>SGST</th>
            <th>CGST</th>
            <th>IGST</th>
            <th>Total After Discount</th>
            <th>Remarks</th>
            <th>Invoice</th>
        </tr>
        <?php
        //for including config.php
        include 'config.php';
        $query = "SELECT * FROM inv_invoice_master";
        $run = mysqli_query($conn, $query);
        if ($num = mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                $i = 0;


                echo "
                <tr>
                    
                    <td>" . $i . "</td>
                    <td>" . $result['inv_inv_no'] . "</td>
                    <td>" . $result['inv_date'] . "</td>
                    <td>" . $result['inv_delivered_date'] . "</td>
                    <td>" . $result['inv_sup_id'] . "</td>
                    <td>" . $result['inv_no_items'] . "</td>
                    <td>" . $result['inv_amount'] . "</td>
                    <td>" . $result['inv_sgst'] . "</td>
                    <td>" . $result['inv_cgst'] . "</td>
                    <td>" . $result['inv_igst'] . "</td>
                    <td>" . $result['inv_tot_after_discount'] . "</td>
                    <td>" . $result['inv_remarks'] . "</td>
                    <td> <a onclick='' href='./uploads/" . $result['inv_sl'] . ".pdf' target='_blank' rel='noreferer'>Download Pdf</a></td>
                </tr>
                ";
                $i++;
            }
        }
        ?>
    </table>
    <br>
    <a href="./invoice.php" class="button-3" role="button">Invoice Entry</a>
    <script type="text/javascript">
        function openTab(pdf) {
            window.open(pdf, '_blank');
        }
    </script>

</body>

</html>