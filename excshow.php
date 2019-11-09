<?php
include 'conndb.php';
$co=dbcon();
$sql="select * from exch";
$res=$co->query($sql);
$row=$res->fetch_assoc();
echo $row["coin"];
?>