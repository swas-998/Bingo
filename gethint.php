<?php
	$hint = "";
	$code=fopen("php.txt","r");
	$data=fgets($code);
	$data1=intval($data);
	if($data==NULL)
	{
	$hint="no data recieved";
	}
	else
	{
	$hint=$data;
	}


// Output "no suggestion" if no hint was found or output correct values
echo $hint;
?>