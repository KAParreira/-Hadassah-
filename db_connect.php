<?php
// Conexão

$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password);

$db_name = mysqli_select_db($connect,'sistemalogin');

if(mysqli_connect_error()):
     echo "Error in connection".mysqli_connect_error();
endif;	 

?>