<?php
//include"tertiary.class.php";
function autoload($class)
{
    require('classes/' . $class . '.class.php');
}

// automatically loads all needed classes, when they are needed
spl_autoload_register("autoload");
$tertiary= new Tertiary;
?>

<html>
<head>
	<title>Tertiary</title>
	<style>
		
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
	
	<script type="text/javascript" src="C:\wamp\www/jquery-1.9.1.min.js">
		
	</script>
	
</head>
<body>
<div class="divBody">
<form action="tertiary.class.php" method="post" name="tertiary">
	<table width="100%">
	<colgroup>
		<col style="width:20%;" >
		<col style="width:40%;" >
		
	<colgroup>
		<tr>
			<td>Course Status</td>
			<td>
				<select name="status" title="select the status that describe the course progress so far">
					<option value="">Select Course Satus</option>
					<option value="Done">I finished the course</option>
					<option value="Still Studying">Still Studying</option>
				</select>
				<span>*</span>
				<span><?php if($tertiary->statusError==1) echo"Select qualification status"; ?></span>
			</td>
		</tr>
		
		<tr>
			<td>Year Obtained</td>
			<td><input type="text" name="txtYear" title="Enter the year of which you obtained your qualification"/>
			</td>
		</tr>
		
		<tr>
			<td>Qualification Name</td>
			<td><input type="text" name="txtName" title="Enter the name of your qualification"/>
			<span>*</span>
			<span><?php if($tertiary->nameError==1) echo"Enter qualification name"; ?></span></td>
		</tr>
		<tr>
			<td>Intitution Name</td>
			<td><input type="text" name="txtInstitution" title="Enter the name of the intitution where you are doing 
			or did your qualification"/>
			</td>
		</tr>
		<tr>
			<td>First Subject</td>
			<td><input type="text" name="txtSubject1" title="Enter a subject that is a backbone of your course"/>
			<span>*</span>
			<span><?php if($tertiary->subject1Error==1) echo"Enter first subject"; ?></span></td>
		</tr>
		<tr>
			<td>Second Subject</td>
			<td><input type="text" name="txtSubject2" title="Enter a subject that is a backbone of your course"/>
			<span>*</span>
			<span><?php if($tertiary->subject2Error==1) echo"Enter second subject"; ?></span></td>
		</tr>
		<tr>
			<td>Third Subject</td>
			<td><input type="text" name="txtSubject3" title="Enter a subject that is a backbone of your course"/>
			<span>*</span>
			<span><?php if($tertiary->subject3Error==1) echo"Enter third subject"; ?></span></td>
		</tr>
		<tr>
			<td>Fourth Subject</td>
			<td><input type="text" name="txtSubject4" title="Enter a subject that is a backbone of your course"/>
			<span>*</span>
			<span><?php if($tertiary->subject4Error==1) echo"Enter fourth subject"; ?></span></td>
		</tr>
		<tr>
			<td>Fifth Subject</td>
			<td><input type="text" name="txtSubject5" title="Enter a subject that is a backbone of your course"/></td>
		</tr>
		<tr>
			<td>Sixth Subject</td>
			<td><input type="text" name="txtSubject6" title="Enter a subject that is a backbone of your course"/></td>
		</tr>
		<tr>
			<td>Seventh Subject</td>
			<td><input type="text" name="txtSubject7" title="Enter a subject that is a backbone of your course"/></td>
		</tr>
		<tr>
			<td>Eighth Subject</td>
			<td><input type="text" name="txtSubject8" title="Enter a subject that is a backbone of your course"/></td>
		</tr>
		<tr>
			<td>Nineth Subject</td>
			<td><input type="text" name="txtSubject9" title="Enter a subject that is a backbone of your course"/></td>
		</tr>
		<tr>
			<td>Tenth Subject</td>
			<td><input type="text" name="txtSubject10" title="Enter a subject that is a backbone of your course"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="qualifications" /></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>