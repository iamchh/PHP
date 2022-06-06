<?php
$servername="localhost";
$username="username";
$password="password"

//create connection
$conn = new mysqli($servername,$username,$password);

//check connection
if (conn->connection_error){
die('connnection failed'.$conn->connnection_error);
   }

echo'connected successfully';

?>
