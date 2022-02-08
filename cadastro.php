<?php
     
	 include('conexao.php');
	 
	 $nome = $_POST['nome'];
     $login = $_POST['login'];
     $senha = MD5($_POST['senha']);
     
	 $in = mysqli_query($connect,"insert into user (nome, login, senha) values ('$nome', '$login', '$senha')");

	 
   ?>
   
    <html lang="pt-br">
        <head>
           <title> Sucesso </title>
		   <meta charset="utf-8">
		   <link rel="stylesheet" href="CSS/utsukushi.css">
		   <link rel="ico" href="IMAGE/icon.png">
		   
	    </head>
		<body>
		
		  <h2> Cadastro realizado com sucesso </h2>
		   
		    <button class="btn1"> 
			 <a href="index.php"> LOGIN </a>
			 </button>
		
			<button class="btn2"> 
			 <a href="home.html"> HOME </a>
			 </button>
			 
		</body>
	 </html>	