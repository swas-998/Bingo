<?php
include 'conndb.php';
$conn=dbcon();
$uid=$_GET['uid'];
$bid=$_GET['bid'];

$sql="insert into scan(uid,bid) values('".$uid."','".$bid."')";
$conn->query($sql);




?>