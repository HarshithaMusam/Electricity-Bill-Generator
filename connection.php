<?php 
 $host="localhost";
   $dbUsername="root";
   $dbPassword="";
   $dbname="page";
   $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
if($conn){
   echo "Database connected successfully" . "<br>";
}
?>