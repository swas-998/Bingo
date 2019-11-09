<?php
include 'conndb.php';
$conn=dbcon();
$sum=0;
$code=fopen("php.txt","w");
$calvar=array(0,0,0,0,0,0,0,0,0,0,0,0,0);

$sql="select cost from rate where type='p' and size='s'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[0]=$row["cost"];
$cos=$_GET["psmall"];
$sum=$sum+($cos * $calvar[0] );

$sql="select cost from rate where type='p' and size='m'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[1]=$row["cost"];
$cos=$_GET["pmedium"];
$sum=$sum+($cos * $calvar[1] );

$sql="select cost from rate where type='p' and size='l'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[2]=$row["cost"];
$cos=$_GET["plarge"];
$sum=$sum+($cos * $calvar[2] );

$sql="select cost from rate where type='p' and size='o'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[3]=$row["cost"];
$cos=$_GET["otherp"];
$sum=$sum+($cos * $calvar[3] );

$sql="select cost from rate where type='g' and size='s'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[4]=$row["cost"];
$cos=$_GET["gsmall"];
$sum=$sum+($cos * $calvar[4] );

$sql="select cost from rate where type='g' and size='m'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[5]=$row["cost"];
$cos=$_GET["gmedium"];
$sum=$sum+($cos * $calvar[5] );

$sql="select cost from rate where type='g' and size='l'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[6]=$row["cost"];
$cos=$_GET["glarge"];
$sum=$sum+($cos * $calvar[6] );

$sql="select cost from rate where type='g' and size='o'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[7]=$row["cost"];
$cos=$_GET["otherg"];
$sum=$sum+($cos * $calvar[7] );

$sql="select cost from rate where type='pa' and size='nw'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[8]=$row["cost"];
$cos=$_GET["newspaper"];
$sum=$sum+($cos * $calvar[8] );

$sql="select cost from rate where type='pa' and size='ca'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[9]=$row["cost"];
$cos=$_GET["cartons"];
$sum=$sum+($cos * $calvar[9] );

$sql="select cost from rate where type='m' and size='ir'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[10]=$row["cost"];
$cos=$_GET["ir"];
$sum=$sum+($cos * $calvar[10] );

$sql="select cost from rate where type='m' and size='al'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[11]=$row["cost"];
$cos=$_GET["al"];
$sum=$sum+($cos * $calvar[11] );

$sql="select cost from rate where type='m' and size='st'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[12]=$row["cost"];
$cos=$_GET["st"];
$sum=$sum+($cos * $calvar[12] );

$sql="select cost from rate where type='m' and size='cu'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$calvar[13]=$row["cost"];
$cos=$_GET["cu"];
$sum=$sum+($cos * $calvar[13] );


//echo $sum;



$sql="insert into pay(bid,credit) values('".$_GET['bid']."','".$sum."')";
$conn->query($sql);


$sql="select uid from scan where bid=".$_GET['bid']."";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$u=$row['uid'];
echo $u."  ";
$sql="select credit from reg where uid=".$u."";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$oldcost=$row['credit'];
echo $oldcost."  ";
$tc=$oldcost+$sum;
echo $tc;
$sql="update reg set credit=".$tc." where uid=".$u."";
$conn->query($sql);


 include 'credit.php';
?>