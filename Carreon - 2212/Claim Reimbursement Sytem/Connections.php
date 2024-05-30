<?php
$Connections = mysqli_connect ("localhost:3307", "root", "", "logindb");
if(mysqli_connect_error()){
echo"Failed to Connect in Mysql",mysqli_connect_error(); 
}
?>