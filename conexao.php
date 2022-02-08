<?php
     
	 $servername = "localhost";
     $username = "root";
     $password = "";

     $connect = mysqli_connect($servername, $username, $password);
	 
	 $banco =  mysqli_select_db($connect,'sistemalogin') or die ("ERRO ao selecionar o banco de dados");
    
?>