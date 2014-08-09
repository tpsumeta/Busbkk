<?php

include '../connect.php';

$sql = 'SELECT * FROM b_bus';
$query = mysql_query($sql);

while($rs = mysql_fetch_array($query)){

	 echo json_encode($rs);
	
}


?>
