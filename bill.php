<?php
     include "connection.php"
?>
<?php

if(isset($_POST['submit'])){
 $Consumerno=$_POST['Consumerno'];
 $Lastmonth=$_POST['Lastmonth'];
 $Currentmonth=$_POST['Currentmonth'];
$Selectcategory=$_POST['Selectcategory'];
$Units=$_POST['Units'];
$Billamount=$_POST['Billamount'];
$Tax=$_POST['Tax'];
 $Netamount=$_POST['Netamount'];
$sql="INSERT Into
bill(Consumerno,Lastmonth,Currentmonth,Selectcategory,Units,Billamount,Tax,Netamount) values('$Consumerno','$Lastmonth','$Currentmonth','$Selectcategory','$Units','$Billamount','$Tax','$Netamount')";
  if($conn->query($sql)){
          echo "New record inserted successfully";
   }
}
?>