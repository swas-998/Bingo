<?php
include 'conndb.php';
$conn=dbcon();
$sqld="delete from rate";
$conn->query($sqld);

$sql="insert into rate(type,size,cost) values
('p','s','".$_GET['psmallp']."'),
('p','m','".$_GET['pmediump']."'),
('p','l','".$_GET['plargep']."'),
('p','o','".$_GET['otherpp']."'),
('g','s','".$_GET['gsmallp']."'),
('g','m','".$_GET['gmediump']."'),
('g','l','".$_GET['glargep']."'),
('g','o','".$_GET['othergp']."'),
('m','ir','".$_GET['irp']."'),
('m','st','".$_GET['alp']."'),
('m','al','".$_GET['stp']."'),
('m','cu','".$_GET['cup']."'),
('pa','nw','".$_GET['newspaperp']."'),
('pa','ca','".$_GET['cartonsp']."')";
$conn->query($sql);
include 'bingo_admin.php'
?>