<?php
//For Including Config.php
include 'config.php';
//Posting Data
if (isset($_POST['submit'])) {
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/cms.css">
    <link rel="stylesheet" href="./styles/cms_thm.css">
    <title>Supplier Entry</title>
</head>

<body>
    <!--Form For Inputing Data -->
    <div class="klub_tab_tl1_x cms_tile_hldr" align="center" style="background-color: #fffaf1;">
        <form action="supplier.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Name: </label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="category">Category: </label>
                    </td>
                    <td>
                        <input type="text" name="category" id="category" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address: </label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="district">District: </label>
                    </td>
                    <td>
                        <input type="text" name="district" id="district" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contactperson">Contact Person: </label>
                    </td>
                    <td>
                        <input type="text" name="contactperson" id="contactperson" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mobile1">Mobile Number 1 : </label>
                    </td>
                    <td>
                        <input type="text" name="mobile1" id="mobile1" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mobile2">Mobile Number 2: </label>
                    </td>
                    <td>
                        <input type="text" name="mobile2" id="mobile2" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telephone">Telephone: </label>
                    </td>
                    <td>
                        <input type="text" name="telephone" id="telephone" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">e-Mail: </label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="accountnumber">Account Number: </label>
                    </td>
                    <td>
                        <input type="text" name="accountnumber" id="accountnumber" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="accountholder">Account Holder Name: </label>
                    </td>
                    <td>
                        <input type="text" name="accountholder" id="accountholder" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bankname">Bank Name: </label>
                    </td>
                    <td>
                        <input type="text" name="bankname" id="bankname" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bankbranch">Bank Branch: </label>
                    </td>
                    <td>
                        <input type="text" name="bankbranch" id="bankbranch" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ifsc">IFSC Code: </label>
                    </td>
                    <td>
                        <input type="text" name="ifsc" id="ifsc" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="micr">MICR Code: </label>
                    </td>
                    <td>
                        <input type="text" name="micr" id="micr" class="klub_input klub_h3 cms_inp_det1">
                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="remarks">Remarks: </label>
                    </td>
                    <td>
                        <textarea name="remarks" id="remarks" class="klub_input klub_h3 cms_inp_det1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn btn-success" role="button" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>

        <a href="./showSupplier.php" class="button-3" role="button">Show Supplier</a>

    </div>


</body>

</html>