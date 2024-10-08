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
            <th>Status</th>
            <th>Priority</th>
            <th>First Category</th>
            <th>First Description</th>
            <th>Second Category</th>
            <th>Second Description</th>
            <th>Third Category</th>
            <th>Third Description</th>
            <th>Remarks</th>
            <th>Entered By</th>
            <th>Entered On</th>
        </tr>
        <?php
        //for including config.php
        include 'config.php';
        $query = "SELECT * FROM inv_category";
        $run = mysqli_query($conn, $query);
        if ($num = mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                echo "
                <tr>
                    
                    <td>" . $result['cat_sl_no'] . "</td>
                    <td>" . $result['cat_status'] . "</td>
                    <td>" . $result['cat_priority'] . "</td>
                    <td>" . $result['cat_first_category'] . "</td>
                    <td>" . $result['cat_first_desc'] . "</td>
                    <td>" . $result['cat_second_category'] . "</td>
                    <td>" . $result['cat_second_desc'] . "</td>
                    <td>" . $result['cat_third_category'] . "</td>
                    <td>" . $result['cat_third_desc'] . "</td>
                    <td>" . $result['cat_remarks'] . "</td>
                    <td>" . $result['cat_entered_by'] . "</td>
                    <td>" . $result['cat_entered_on'] . "</td>
                </tr>
                ";
            }
        }
        ?>
    </table>
    <br>
    <a href="./item_Category.php" class="button-3" role="button">Item Category Entry</a>

</body>

</html>