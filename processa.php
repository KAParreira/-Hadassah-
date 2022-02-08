<?php
     
	 include_once('db_connect.php');
	 
	 $nome = ucwords($_POST['nome']);
	 $login = $_POST['login'];
	 $senha = $_POST['senha'];
	 
	 $sql = "INSERT INTO tb_user (nome, login, senha) VALUES  ('$nome, $login, $senha')";
	 $in = mysqli_query($connect,$sql);
	 
	 
	 mysqli_close($connect);
	 
?>
