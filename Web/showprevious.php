<?php
   include 'conndb.php';
  
   function val($type,$size)
   {
   		 $conn=dbcon();

   		 $sql="select cost from rate where type='" . $type . "' and size='" . $size . "' ";
   		 $res=$conn->query($sql);
  		 $row=$res->fetch_assoc();
  		 return $row["cost"];


   }
 ?>