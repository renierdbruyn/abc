<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Untitled Page</title>
    <style>
        input, select, textarear
		{		
			height:40px;
			width:300px;
			font-size:16px;
		}
		
		label
		{
			width:300px;
			height:30px;			
			left:1%;
			font-size:20px;
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
        .left
        {
            position:absolute;
            left:10%;
            width:40%;
        }
        .right
        {
            position:absolute;
            top:80px;
            left:55%;  
            width:40%; 
            z-index:-1;
        }
    </style>
</head>
<body>
    <div class="color">
        <h1>Personal Details</h1>
    </div>
<form action="matric.html" method="post">
    <div class="left">
        
        <label>Name</label><br />
        <input name="txtName" title="Enter your first name " type="text" />
        <br />
        <label>Surname</label><br />
        <input name="txtSurname" title="Enter your last name " type="text" />
        <br />
        <label>ID Number</label><br />
        <input name="txtId" title="Enter your ID number of 13 digits " type="text" />
        <br />
        <label>Phone</label><br />
        <input name="txtPhone" title="Enter your phone number of 10 digits " type="text" />
        <br />
        <label>Email</label><br />
        <input name="txtEmail" title="Enter your email address " type="text" />
        <br />
        <label>Street</label><br />
        <input name="txtStreet" title="[ADDRESS] Enter your house number and street " type="text" />
        <br />
        <label>Town</label><br />
        <input name="txtTown" title="[ADDRESS] Enter your town " type="text" />
        <br />
        

    </div>
    <div class="right">

        <label>Postal Code</label><br />
        <input name="txtCode" title="[ADDRESS] Enter your postal code " type="text" />
        <br />
        <label>Nationality</label><br />
        <input id="country" name="nationality" title="Enter your nationality" type="text" />
        <br />
        <label>Languages</label><br />
        <select multiple="multiple" name="slLanguages" style="height: 200px;" title="Select your languages. Hold Ctrl button to select multiple languages">
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
        <br />
        <br />
        <label>
            Health</label><br />
        <select name="slHealth" title="Select health corresponging to yours">
            <option value="">Select Your Health</option>
            <option value="Good">Good</option>
            <option value="Excellent">Excellent</option>
            <option value="Okay">Okay</option>
            <option value="Bad">Bad</option>
            <option value="Poor">Poor</option>
            <option value="Critical">Critical</option>
        </select>
        <br />
        <label>
            Drivers License</label><br />
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
        <br />
        <br />
        <input class="button" name="personal" type="submit" value="Next" />        
    </div>
</form>
</body>
</html>
