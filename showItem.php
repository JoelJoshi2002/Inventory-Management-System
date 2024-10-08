<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/buttons.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/cms.css">
    <link rel="stylesheet" href="./styles/cms_thm.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./table.css">
    <title>Show Item Details</title>

</head>

<body style="background-image:url(http://mbccet.com/cdn/img/trans_7.png);">
    <!--Creating the table -->
    <table border="1" cellspacing="0" cellpadding="0" id="klub_tab_tl1_xt">
        <thead>
            <tr class="cms_rep_title">
                <td class="no-sort" width="80">SL</td>
                <td width="80">Category</td>
                <td width="80">Priority</td>
                <td width="80">Status</td>
                <td width="80">Name</td>
                <td width="80">Description</td>
                <td width="80">Specification</td>
                <td width="80">Reffered By</td>
                <td width="80">Entered By</td>
                <td width="120">Entered On</td>
            </tr>
        </thead>
        <tbody>
            <?php
            //for including config.php
            include 'config.php';
            $query = "SELECT * FROM inv_item";
            $run = mysqli_query($conn, $query);
            if ($num = mysqli_num_rows($run) > 0) {
                while ($result = mysqli_fetch_assoc($run)) {
                    echo "
                <tr>
                    
                    <td class='no-sort'>" . $result['inv_itm_sl_no'] . "</td>
                    <td>" . $result['inv_itm_category_id'] . "</td>
                    <td>" . $result['inv_itm_priority'] . "</td>
                    <td>" . $result['inv_itm_status'] . "</td>
                    <td>" . $result['inv_itm_name'] . "</td>
                    <td>" . $result['inv_itm_description'] . "</td>
                    <td>" . $result['inv_itm_specification'] . "</td>
                    <td>" . $result['inv_itm_reffered_by'] . "</td>
                    <td>" . $result['inv_itm_entered_by'] . "</td>
                    <td>" . $result['inv_itm_entered_on'] . "</td>
                </tr>
                ";
                }
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="./itemDetails.php" class="button-3" role="button">Item Category Entry</a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // sort table data:
            $(document).on("click", "table thead tr th:not(.no-sort)", function() {
                console.log("hiii")
                var table = $(this).parents("table");
                var rows = $(this).parents("table").find("tbody tr").toArray().sort(TableComparer($(this).index()));
                var dir = ($(this).hasClass("sort-asc")) ? "desc" : "asc";

                if (dir == "desc") {
                    rows = rows.reverse();
                }

                for (var i = 0; i < rows.length; i++) {
                    table.append(rows[i]);
                }

                table.find("thead tr th").removeClass("sort-asc").removeClass("sort-desc");
                $(this).removeClass("sort-asc").removeClass("sort-desc").addClass("sort-" + dir);
            });

        });


        // table data comparison:
        function TableComparer(index) {
            return function(a, b) {
                var val_a = TableCellValue(a, index);
                var val_b = TableCellValue(b, index);
                var result = ($.isNumeric(val_a) && $.isNumeric(val_b)) ? val_a - val_b : val_a.toString().localeCompare(val_b);

                return result;
            }
        }


        // get table cell value:
        function TableCellValue(row, index) {
            return $(row).children("td").eq(index).text();
        }
    </script>

</body>

</html>