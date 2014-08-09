<form enctype="multipart/form-data" action="upload.php" method="POST"> 
<input type="hidden" name="MAX_FILE_SIZE" value="100000" /> 
Choose a file to upload: <input name="uploadedfile" type="file" /><br/> 
<input type="submit" value="Upload File" /> 
</form> 
<?php 
  $to_file = "../tmp/" . basename($_FILES['uploadedfile']['name']); 
  $from_file = $_FILES['uploadedfile']['tmp_name']; 

  if (move_uploaded_file($from_file, $to_file)) { 
    echo "Successful upload"; 
?> 
  <a href="<?php echo $to_file;?>"><?php echo $to_file;?></a> 
<?php 
  } else { 
    echo "Unsuccessful upload"; 
  } 
  
  
date_default_timezone_set('Asia/Bangkok'); 
$CreateDate=date("Y-m-d H:i:s"); 
	include '../connect.php';
	
	$file_name = $_FILES["uploadedfile"]["name"];
 
	$sql = "INSERT INTO `l_file` (`f_name`, `f_create`) VALUES ('$file_name', '$CreateDate')";
	$query = mysql_query($sql);
	if($query){
		echo 'OK!!!';
	}else{
		echo 'Error!!!';
	}
