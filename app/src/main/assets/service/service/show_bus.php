<?php
 include '../connect.php';

 $b_id = $_GET['id'];

$sql = "SELECT * FROM b_bus where b_id =$b_id ";

$query = mysql_query($sql);

while($r = mysql_fetch_assoc($query)) {
    $rows[] = $r;
}

print json_encode($rows);

