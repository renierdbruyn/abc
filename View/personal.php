<?php

//include"personal.class.php";
function autoload($class) {
    require('classes/' . $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
$person = new Personal;
?>
<html>
    <head>
        <title>Personal Details</title>
        <style>		
            input, select, textarear
            {

                left:40%;
                height:30px;
                width:30%;
            }

            label
            {
                width:30%;
                height:30px;			
                left:1%;
                font-size:18px;
            }		

            span
            {
                color:red;
            }

            body
            {
                background:#F0F0F0;
            }
            .color
            {
                background:#B1B1B1;
            }

            .button
            {
                background:#B1B1B1;
                font-size:20px;
                border:0px;
            }	
        </style>

        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <link rel="" />
        <script>

            $(function()
            {

                var countries = [
                    "Algeria ",
                    "Angola",
                    "Benin",
                    "Botswana",
                    "Burkina faso",
                    "Burundi",
                    "Cameron",
                    "Central African Republic",
                    "comoros",
                    "chad ",
                    "congo republic",
                    "Cote d Ivoire",
                    "Djibouti",
                    "Egypt",
                    "Equatorial Guinea",
                    "Eritrea",
                    "Ethiopia",
                    "Gabon",
                    "Gambia",
                    "Ghana",
                    "Guinea",
                    "Guinea-Bissau",
                    "Kenya",
                    "Lesotho",
                    "Liberia",
                    "Libya",
                    "Madagascar",
                    "Malawi",
                    "Mali",
                    "Mauritania",
                    "Mauritius",
                    "Morocco",
                    "Mozambique",
                    "Namibia",
                    "Namibia",
                    "Nigeria",
                    "Rwanda",
                    "Sao Tome and Principe",
                    "Senegal",
                    "Sierra Leone",
                    "South Africa"




                ];
                $("#country").autocomplete({
                    source: countries
                });
            });
        </script>

    </head>
    <body>
        <div class="color">
            <h1>Personal Details</h1>
        </div>

        <div>
            <form action="personal.class.php" method="post">	
                <label>Name</label>
                <input type="text" name="txtName" title="Enter your first name "/>
                <span>*</span>
                <span><?php if ($person->firstNameError) echo"Enter name"; ?></span>
                <br/>

                <label>Surname</label>
                <input type="text" name="txtSurname" title="Enter your last name "/>
                <span>*</span>
                <span><?php if ($person->lastNameError) echo"Enter last name"; ?></span>
                <br/>

                <label>ID Number</label>
                <input type="text" name="txtId" title="Enter your ID number of 13 digits "/>
                <span>*</span>
                <span><?php if ($person->idError) echo"Enter ID number"; ?></span>
                <br/>

                <label>Phone</label>
                <input type="text" name="txtPhone" title="Enter your phone number of 10 digits "/>
                <span>*</span>
                <span><?php if ($person->phoneError) echo"Enter phone number"; ?></span>
                <br/>

                <label>Email</label>
                <input type="text" name="txtEmail" title="Enter your email address "/>
                <br/>

                <label>Street</label>
                <input type="text" name="txtStreet" title="[ADDRESS] Enter your house number and street "/>
                <br/>

                <label>Town</label>
                <input type="text" name="txtTown" title="[ADDRESS] Enter your town "/>
                <br/>

                <label>Postal Code</label>
                <input type="text" name="txtCode" title="[ADDRESS] Enter your postal code "/>
                <br/>

                <label>Nationality</label>
                <input type="text" id="country" name="nationality" title="Enter your nationality" />				
                <span><?php if ($person->nationError) echo"Enter your nationality"; ?></span>
                <br/>

                <label>Languages</label>		
                <select style="height:70px;" name="slLanguages" multiple title="Select your languages. Hold Ctrl button to select multiple languages">					
                    <option value="isiZulu">isiZulu</option>
                    <option value="English">English</option>
                    <option value="isiXhosa">isiXhosa</option>
                    <option value="seSotho">seSotho</option>
                    <option value="Afrikaams">Afrikaans</option>
                    <option value="seTswana">seTswana</option>
                    <option value="sePedi">sePedi</option>
                    <option value="tshiVenda">tshiVenda</option>	
                    <option value="siSwati">siSwati</option>
                    <option value="xiTsonga">xiTsonga</option>
                    <option value="isiNdebele">isiNdebele</option>			
                </select>
                <br/>
                <br/>
                <label>Health</label>		
                <select name="slHealth" title="Select health corresponging to yours">
                    <option value="">Select Your Health</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                    <option value="Okay">Okay</option>
                    <option value="Bad">Bad</option>
                    <option value="Poor">Poor</option>
                    <option value="Critical">Critical</option>				
                </select>		
                <br/>

                <label>Drivers License</label>		
                <select name="slLicense" title="Select your license status ">
                    <option value="none">None</option>
                    <option value="Code A1">Code A1</option>
                    <option value="Code A">Code A</option>
                    <option value="Code B">Code B</option>
                    <option value="Code C1">Code C1</option>
                    <option value="Code C">Code C</option>
                    <option value="Code EB">Code EB</option>
                    <option value="Code EC1">Code EC1</option>
                    <option value="Code EC">Code EC</option>				
                </select>
                <br/>	
                <br/>
                <input type="submit" class="button" value="Next" name="personal"/>	
            </form>	
        </div>



    </body>
</html>

