<?php
include 'conndb.php';
$conn=dbcon();
$sqld="delete from exch";
$conn->query($sqld);
$sql="insert into exch(coin) values('".$_GET['newrate']."')";
$conn->query($sql);
include 'bingo_admin.php'

?>