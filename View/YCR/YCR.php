<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style type="text/css">


            .field1 {
                width:500px;
                height:100px;
            }

            .fieldTwo {
                width:500px;
                height:150px;
            }
            select, input {
                width:222px;

            }

            .textarea {
                resize:none;
                width: 222px;
                height: 50px;
            }

            select {
                width: 222px;
            }

            .radio {
                width: 30px;
            }

            #Text8 {
                width: 165px;
            }
            #Text7 {
                width: 165px;
                margin-left: 0px;
            }
            #Text9 {
                width: 165px;
                margin-bottom: 0px;
            }
            #Text6 {
                width: 165px;
            }
            .auto-style2 {
                width: 222px;
            }
            .auto-style3 {
                width: 222px;
                height: 23px;
            }
            .auto-style4 {
                height: 23px;
            }
            .auto-style5 {
                width: 222px;
                height: 56px;
            }
            .auto-style6 {
                height: 56px;
            }
            #TextArea1 {
                height: 50px;
                width: 222px;
                margin-left: 0px;
            }
            #Radio2 {
                width: 24px;
            }
            .auto-style9 {
                width: 459px;
            }
            .auto-style10 {
                width: 222px;
                height: 73px;
            }
            .auto-style11 {
                height: 73px;
            }
            #TextArea2 {
                height: 50px;
                width: 223px;
            }
            .auto-style15 {
                width: 210px;
            }
            .auto-style16 {
                width: 221px;
            }
            .auto-style17 {
                width: 221px;
                height: 56px;
            }
            .auto-style18 {
                width: 221px;
                height: 23px;
            }
        </style>
    </head>
    <body style="height: 1635px; width: 852px;">


        <form name="application" action="YCR.php" method="post">
            <table style="width:77%;">
                <tr>
                    <td class="auto-style2">Name</td>
                    <td class="auto-style2">
                        <input id="txtName" name="applicantName" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">Surname</td>
                    <td class="auto-style2">
                        <input id="txtSurname" name="applicantSurname" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">Identity Number</td>
                    <td class="auto-style2">
                        <input id="txtId" name="applicantId" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <table style="width:77%;">
                <tr>
                    <td class="auto-style2">Phone</td>
                    <td class="auto-style2">
                        <input id="txtPhone" name="applicantPhone" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">Alternative Phone</td>
                    <td class="auto-style2">
                        <input id="txtAlternativePhone" name="applicantAlternativePhone" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2"></td>
                    <td class="auto-style2">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <fieldset class="field1" >
                <legend>Address</legend>


                <table style="width: 94%; height: 78px;">
                    <tr>
                        <td class="auto-style15">Street</td>
                        <td class="auto-style2">
                            <input id="txtNumberAndStreet" name="applicantNumberAndStreet" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style15">Suburb</td>
                        <td class="auto-style2">
                            <input id="txtSuburb" name="applicantSuburb" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style15">Code</td>
                        <td class="auto-style2">
                            <input id="txtCode" name="applicantCode" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>


            </fieldset><p>
                &nbsp;</p>
            &nbsp;<table style="width: 82%;">
                <tr>
                    <td class="auto-style2">Email</td>
                    <td class="auto-style16">
                        <input id="txtEmail" name="applicantEmail" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style5">Qualification(s)</td>
                    <td class="auto-style17">
                        <textarea class="textarea" id="taQualifications" name="applicantQualifications" ></textarea></td>
                    <td class="auto-style6"></td>
                </tr>
                <tr>
                    <td class="auto-style3">Drivers License</td>
                    <td class="auto-style18">Yes
                        <input id="rbDriversLicenseY" class="radio"  name="DriversLicense" type="radio" value="Yes" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No&nbsp;
                        <input id="rbDriversLicenseN" class="radio" checked="checked" name="DriversLicense" type="radio" value="No" /></td>
                    <td class="auto-style4"></td>
                </tr>
            </table>
            <table style="width: 82%;">
                <tr>
                    <td class="auto-style2">&nbsp;</td>
                    <td class="auto-style9">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">Own Vehicle</td>
                    <td class="auto-style9">Yes&nbsp;
                        <input id="rbOwnVehicleY"  class="radio" name="OwnVehicle" type="radio" value="Yes" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No&nbsp;
                        <input id="rbOwnVehicleN" class="radio" checked="checked" name="OwnVehicle" type="radio" value="No" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">&nbsp;</td>
                    <td class="auto-style9">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <fieldset class="fieldTwo">
                <legend>Computer Literacy</legend>

                <table style="width:100%;">
                    <tr>

                        <td>
                            <input id="cbMsWord" name="computerLiteracy[]" value="MS Word" type="checkbox" />MS Word</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>

                        <td>
                            <input id="cbMsExcel" name="computerLiteracy[]" value="MS Excel" type="checkbox" />MS Excel</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>               
                        <td>
                            <input id="cbMsAccess" name="computerLiteracy[]" value="MS Access" type="checkbox" />MS Access</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>               
                        <td>
                            <input id="cbMsPowerPoint" name="computerLiteracy[]" value="MS Power Point" type="checkbox" />MS Power Point</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>                
                        <td>
                            <input id="cbMsWindowsPlatform" name="computerLiteracy[]" value="MS Windows Platform" type="checkbox" />MS Windows Platform</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>

            </fieldset><p>
                &nbsp;</p>
            &nbsp;<fieldset class="fieldTwo">
                <legend>References</legend>

                <table style="width: 100%; height: 109px;">
                    <tr>
                        <td class="auto-style15">&nbsp;First Reference Name</td>
                        <td>
                            <input id="txtReferenceOneName" name="applicantReferenceOneName" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style15">Phone</td>
                        <td>
                            <input id="txtReferenceOnePhone" name="applicantReferenceOnePhone" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style15">Second Reference Name</td>
                        <td>
                            <input id="txtReferenceTwoName" name="applicantReferenceTwoName" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="auto-style15">Phone</td>
                        <td>
                            <input id="txtReferenceTwoPhone" name="applicantReferenceTwoPhone" type="text" /></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>

            </fieldset>
            <table style="width: 82%;">

                <tr>
                    <td class="auto-style2">Previous Salary</td>
                    <td>
                        <input id="txtPreviousSalary" name="applicantPreviousSalary" type="text" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style2">Preferred Salary</td>
                    <td><select id="slSalary" name="applicantPreferredSalary" >
                            <option selected="selected">Select Range</option>
                            <option>R3 000 - R5 000</option>
                            <option>R6 000 - R8 000</option>
                            <option>R9 000 - R11 000</option>
                            <option>R12 000 - R15 000</option>
                            <option>More Than R25 000</option>
                        </select>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td class="auto-style10">Health</td>
                    <td class="auto-style11">
                        <textarea class="textarea" id="taHealth" name="applicantHealth"></textarea></td>
                    <td class="auto-style11"></td>
                </tr>
            </table>

            <p>

                <input id="btnSubmit" name="submitForm" type="submit" value="Submit Form" /></p>

        </form>

        <?php
        session_start();
        if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
            if (isset($_POST["submitForm"])) {
                $skillsList = "";
                $address = "";
                if (isset($_POST["submitForm"])) {
                    $address = $address . $_POST["applicantNumberAndStreet"] . ", " . $_POST["applicantSuburb"] . ", " . $_POST["applicantCode"];
                    if (isset($_POST["computerLiteracy"]) && is_array($_POST["computerLiteracy"])) {
                        foreach ($_POST["computerLiteracy"] as $skills) {
                            $skillsList = $skillsList . $skills . ", ";
                        }
                        $skillsList = substr($skillsList, 0, strlen($skillsList) - 2);
                    }

 $connect = mysql_connect("itstudents.dut.ac.za", "201308", "5AcraSwA");
if (!$connect) {
    die("MySQL could not connect!");
}

$DB = mysql_select_db('201308');

if (!$DB) {
    die("MySQL could not select Database!");
}
/*$connect = mysql_connect("localhost", "root", "");
if (!$connect) {
    die("MySQL could not connect!");
}

$DB = mysql_select_db('ycr');

if (!$DB) {
    die("MySQL could not select Database!");
}*/
                    $insertApp = "Insert into applicant Values ('$_POST[applicantId]','$_POST[applicantName]','$_POST[applicantEmail]','$address','$_POST[applicantPhone]','$_POST[applicantAlternativePhone]','$_POST[applicantHealth]','$_POST[DriversLicense]','$_POST[OwnVehicle]','$_POST[applicantPreferredSalary]')";

                    $insertHistory = "Insert into job_history (Ap_id, Ap_reference_one_name, Ap_reference_one_phone, Ap_reference_two_name, Ap_reference_two_phone, Ap_lastsal) Values ('$_POST[applicantId]','$_POST[applicantReferenceOneName]','$_POST[applicantReferenceOnePhone]','$_POST[applicantReferenceTwoName]','$_POST[applicantReferenceTwoPhone]','$_POST[applicantPreviousSalary]','$_POST[applicantPreferredSalary]')";

                    $insertSkills = "Insert into qualifications (Ap_id, Ap_qual, Ap_compliteracy) Values ('$_POST[applicantId]','$_POST[applicantQualifications]','$skillsList')";

                    mysql_query($insertApp);
                    mysql_query($insertHistory);
                    mysql_query($insertSkills);

                    mysql_close();
                    echo "<script>alert('Application sent');   
    top.location.href= document.location ='../index.php'; window.location = '../index.php';</script>";
                   // header('Location:../index.php');
                    
                }
            }
        } else {
echo "Please login <a href='../Log/Login.php' >Login</a>";
            header('location:../Log/Login.php');
        }
        ?>
        
    </body>
</html>