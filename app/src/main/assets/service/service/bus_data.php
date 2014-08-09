<?php
 include '../connect.php';

 $b_id = $_GET['id'];

$sql = "SELECT busstop FROM b_bus_busstop
		left join b_busstop
		on b_bus_busstop.bs_id = b_busstop.bs_id
		where b_id =$b_id
		";

$query = mysql_query($sql);

while($rs = mysql_fetch_array($query)){

	$x[] = $rs['busstop'];
}
	 echo json_encode($x);

