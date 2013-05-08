<html>
<head>
	<title>Documents</title>
	<style>
		input
		{
			
			left:40%;
			height:30px;
			width:30%;
		}
		
		body
		{
			background:#F0F0F0;
		}
		
		label
		{
			width:30%;
			height:30px;
			
			left:1%;
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
</head>
<body>
<div class="color">
	<h1>Documents</h1>
</div>
<div>
<?php	
	if (isset($_FILES['uploadedfile'])) {
$errors = array(); 
$allowed_ext =array('pdf');

$file_name = $_FILES['uploadedfile'] ['name'];
$file_ext = strtolower(end(explode('.', $file_name)));
$file_size = $_FILES['uploadedfile'] ['size'];
$file_tmp = $_FILES['uploadedfile'] ['tmp_name'];

if (in_array($file_ext, $allowed_ext)=== false){
$errors[] = 'not allowed! pdf files less than 2MB only';
}
if ($file_size > 2097152){
$errors[] = 'File size must be under 2mb';
}
if(empty($errors)){
 if (move_uploaded_file($file_tmp, 'uploadedfile/' .$file_name)); {
echo 'File uploaded';
}
} else {
 
 foreach ($errors as $error){
 }
  echo $error, '<br />';
  }
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<p>
<input type="file" name ="uploadedfile"/>
<input type="submit" value="Upload" name="upload"/>
</p>
</form>
</div>
</body>
</html>