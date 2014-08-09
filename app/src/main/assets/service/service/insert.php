<?php

include '../connect.php';

$l_type = $_REQUEST["l_type"];
$l_survey = $_REQUEST["l_survey"];
$l_date = $_REQUEST["l_date"];
$l_location = $_REQUEST["l_location"];
$l_latitude = $_REQUEST["l_latitude"];
$l_longitude = $_REQUEST["l_longitude"];

$sql = "INSERT INTO l_lichen (`l_type`, `l_survey`, `l_date`, `l_location`, `l_latitude`, `l_longitude`) VALUES ('$l_type', '$l_survey', '$l_date', '$l_location', '$l_latitude', '$l_longitude')";

$query = mysql_query($sql);

	if(!$query)
	{
		$arr['StatusID'] = "0"; 
		$arr['Error'] = "Cannot save data!";	
	}
	else
	{
		$arr['StatusID'] = "1"; 
		$arr['Error'] = "SAVE OK";	
	}






?>
