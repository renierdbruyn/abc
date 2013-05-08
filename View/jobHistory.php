<?php
	
	echo"<script>alert(\"Personal data inserted\")</script>";
        function autoload($class)
{
    require('classes/' . $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
	//include"jobHistory.class.php";
	$job=new History;
	
?>
<html>
<head>
	<title>Job History</title>
	<style>
		
		body
		{
			width:100%;
			height:100%;
			background:#F0F0F0;
		}
		
		.button
		{
			background:#B1B1B1;
			font-size:20px;
			border:0px;
		}	
		.divHeader
		{
			width:96%;
			height:150px;
			position:absolute;
			right:2%;
			left:2%;
			
			background:#B1B1B1;
		}
		
		.divBody
		{			
			position:absolute;
		 	right:2%;
		 	left:2%;
			width:96%;
			
			
		}
		
		.divFooter
		{
		 	position:absolute;
		 	right:2%;
		 	left:2%;
		 	top:700px;
			width:96%;
			height:80px;			
			background:#B1B1B1;		
		}
		
		img
		{
			position:absolute;
			top:45%;
		}
		
		
		
		.address
		{
			background:#B1B1B1;
			border-color:#B1B1B1;
		}
		
		input, label, select, option
		{
			width:40%;
			height:30px;
		}
		
		.select
		{
			width:20%;
		}
		
		span
		{
			color:red;
		}
			
	</style>
	
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="" />
  <script>
  
  $(function()

 {
    var industries = [

"Agriculture Products and Services" ,
"Airlines",
"Aviation Services"  ,
"Airlines ",
"Aviation Services"  ,
"Supplies",
"Animal Products" ,
"Apparel" ,
"Accessories"  ,
"Textiles" ,
"Architectural" ,
"Engineering and Technical" , 
"Associations and Non-Profit Organizations ",
"Banking and Financial Services " ,
"Beverages, Alcoholic and Non-alcoholic" ,
"Building Systems " ,
"Materials " ,
"Fixtures ",
"Business Consultancy and Advisory" ,
"Computer & IT Products" ,
"Education and Training ",
"Entertainment and Recreation" ,
"Environmental Products and Services " ,
"Executive Search and Personnel Recruitment ",
"Farm Equipment|" ,
"Food Manufacturing " ,
"Distribution " ,
"Services ",
"Freight Forwarders" ,
"Couriers" ,
"Gases, Natural and Processed ",
"Government ",
"Greater Phuket Member",
"Health",
"Hygiene Products and Services",
"Hospitals",
"Hotels",
"Restaurants ",
"Caterers",
"Industrial Equipment",
"Information and Communications Technology",
"Inspection, Safety and Security",
"Insurance",
"Laos Business Chapter",
"Legal Practice",
"Manufacturing Automotive",
"Manufacturing Consumer",
"Manufacturing Electronics",
"Manufacturing Industrial",
"anufacturing Other",
"Manufacturing Chemical Elements and Apllied Products",
"Marketing and Communications",
"Outplacement Services",
"Petroleum and Petroleum Products",
"Pharmaceutical and Medicinal Products",
"Power and Electrical",
"Printing and Publishing",
"Property and Real Estate Services",
"Retail  consumer Products",
"Retail  consumer Products",
"Schools",
"Scientific and Medical Instruments",
"Security", 
"Investigative Services a Products",
"Sourcing", 
"Trading and Buying",
"Transport Vehicles and Parts", 
"Transportation and Logistics",
"Travel & Tourism",
"Supplies "



    ];
    $( "#industry" ).autocomplete({
      source: industries
    });
   });

  </script>
	
</head>
<body>
<div class="divBody" name="body">
<form action="jobHistory.class.php" method="post">
	<table width="100%">
	<colgroup>
		<col style="width:20%;" >
		<col style="width:40%;" >
		<col style="width:1%;" >
		<col style="width:1%;" >
	<colgroup>
	<tr>
		<td><label>Duration</label></td>
		<td>
			<select class="select" name="slNumber" title="Select a number for the duration ">
				<option>0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			<select class="select" name="slUnit" title="Select a unit for the duration, 
			it will complement the chosen number " >
				<option>Unit</option>
				<option value="Weeks">Weeks</option>
				<option value="Months">Months</option>
				<option value="Years">Years</option>
			</select>
			<span>*</span>
			<span><?php if($job->numberError) echo"select a duration"; ?></span>		
			<span><?php if($job->unitError) echo"Select a duration"; ?></span>
		</td>
	</tr>
	<tr>
		<td><label>Company</label></td>
		<td><input type="text" name="txtCompany" title="Enter previous or current company of employment " /></td>
	</tr>
	<tr>
		<td><label>Type of Industry</label></td>
		<td><input type="text" id="industry" name="txtIndustry" title="Enter type of industry that best defines the company" />
		<span>*</span>
		<span><?php if($job->industryError) echo"Enter industry"; ?></span>
		</td>
	</tr>
	<tr>
		<td><label>Position</label></td>
		<td><input type="text" name="txtPosition" title="Enter the position you held in the company structure " />
		<span>*</span>
		<span><?php if($job->positionError) echo"Enter position"; ?></span>
		</td>
	</tr>	
	
	<tr>
		<td rowspan="3"><label>Duties</label></td>
		<td rowspan="3"><textarea style="width:40%; height:100px;" name="taDuties" 
		title="Enter a list of duties you performed in the company, seperated by commas "></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><label>Reference Name</label></td>
		<td><input type="text" name="txtName" title="Enter a first name and last name of your reference " />
		<span>*</span>
		<span><?php if($job->nameError) echo"Enter reference name"; ?></span>
		</td>
	</tr>
	<tr>
		<td><label>Reference Phone</label></td>
		<td><input type="text" name="txtPhone" title="Enter phone number of your reference in 10 digits " />
		<span>*</span>
		<span><?php if($job->phoneError) echo"Enter reference phone"; ?></span>
		</td>
	</tr>
	<tr>
		<td><label>Self Description</label></td>
		<td>
		<textarea style="width:40%; height:100px;" name="taDescription" 
		title="Describe yourself but dont be too long " >
		</textarea>
		<span>*</span>
		<span><?php if($job->descriptionError) echo"Enter a short description of yourself"; ?></span>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input class="button" type="submit" name="history"  value="Next"/></td>
	</tr>
</table>
</form>
</div>
</body>
</html>