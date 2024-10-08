<?php
//For Including Config.php
include 'config.php';
//Posting Data
if (isset($_POST['submit'])) {
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



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/cms_thm.css">
    <link rel="stylesheet" href="./styles/cms.css">
    <title>Category Entry</title>

</head>

<body>
    <!--Form For Inputing Data -->
    <div class="klub_tab_tl1_x cms_tile_hldr" align="center" style="background-color: #fffaf1;">
        <form action="item_category.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="status">Status: </label>
                    </td>
                    <td>
                        <input type="text" name="status" id="status" class="klub_input klub_h3 cms_inp_det1">
                    </td>
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
                        <label for="firstcategory">First Category: </label>
                    </td>
                    <td>
                        <input type="text" name="firstcategory" id="firstcategory" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="firstdescription">First Category Description: </label>
                    </td>
                    <td>
                        <textarea name="firstdescription" id="firstdescription" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="secondcategory">Second Category : </label>
                    </td>
                    <td>
                        <input type="text" name="secondcategory" id="secondcategory" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="seconddescription">Second Category Description: </label>
                    </td>
                    <td>
                        <textarea name="seconddescription" id="seconddescription" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="thirdcategory">Third Category: </label>
                    </td>
                    <td>
                        <input type="text" name="thirdcategory" id="thirdcategory" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="thirddescription">Third Category Description: </label>
                    </td>
                    <td>
                        <textarea name="thirddescription" id="thirddescription" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="remarks">Remarks</label>
                    </td>
                    <td>
                        <textarea name="remarks" id="remarks" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn btn-success" role="button" type="submit" name="submit" value="Submit">
            </table>
        </form>
        <a href="./showItem_Category.php" class="button-3" role="button">Show Item Category</a>
    </div>


    <script>

    </script>
</body>

</html>