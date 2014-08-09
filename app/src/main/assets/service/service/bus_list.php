<?php
// $choice =$_POST["button"];
// $cars = array("Honde", "BMW" , "Ferrari","Ducaite", "Royal Enfield" , "Harley Davidson");
 // print json_encode($cars);


 include '../connect.php';

$sql = 'SELECT b_id,linebus FROM b_bus';
$query = mysql_query($sql);

// while($rs = mysql_fetch_array($query)){

// 	$x[] = $rs['b_id'];
// }
// 	 echo json_encode($x);


while($r = mysql_fetch_assoc($query)) {
    $rows[] = $r;
}

print json_encode($rows);