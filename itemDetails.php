<?php
//For Including Config.php
include 'config.php';
//Posting Data
if (isset($_POST['submit'])) {
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



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/cms_thm.css">
    <link rel="stylesheet" href="./styles/cms.css">
    <title>
        <Details></Details> Entry
    </title>

</head>

<body>
    <!--Form For Inputing Data -->
    <div class="klub_tab_tl1_x cms_tile_hldr" align="center" style="background-color: #fffaf1;">
        <form action="itemDetails.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="categoryid">Category ID: </label>
                    </td>
                    <td>
                        <input type="text" name="categoryid" id="categoryid" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="priority">Item Priority: </label>
                    </td>
                    <td>
                        <input type="text" name="priority" id="priority" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="status">Status: </label>
                    </td>
                    <td>
                        <input type="text" name="status" id="status" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="name">Name: </label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Description: </label>
                    </td>
                    <td>
                        <textarea name="description" id="description" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="specification">Specification: </label>
                    </td>
                    <td>
                        <textarea name="specification" id="specification" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="refferedby">Reffered By: </label>
                    </td>
                    <td>
                        <input type="text" name="refferedby" id="refferedby" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn btn-success" role="button" type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
        <a href="./showItemDetails.php" class="button-3" role="button">Show Item Details</a>
    </div>


</body>

</html>