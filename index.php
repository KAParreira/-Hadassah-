<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Botão Enviar
 if(isset($_POST['btn-entrar'])):
      $erros = array();
	  $login = mysqli_escape_string($connect, $_POST['login']);
	  $senha = mysqli_escape_string($connect, $_POST['senha']);
	  
	  if(empty($login) or empty($senha)):
	     $erros[] = "<li> o campo login ou senha precisa ser preenchido </li>";
		else: 
		  $sql = "SELECT login FROM user WHERE login = '$login'";
		  $resultado = mysqli_query($connect, $sql);
		  
		  if(mysqli_num_rows($resultado) > 0):
		     $senha = md5($senha); 
		     $sql = "SELECT * FROM user WHERE login = '$login' AND senha = '$senha'";
			 $resultado = mysqli_query($connect, $sql);
			 
			  if(mysqli_num_rows($resultado) == 1):
                 $dados = mysqli_fetch_array($resultado);
				 mysqli_close($connect);
				 $_SESSION['logado'] = true;
				 $_SESSION['id_user'] = $dados['id'];
				 header('location: home.php');
               else:
                  $erros[] = "<li> Essa Senha é fruto da sua brisa </li>";			   
			  endif;	
		  	  
			else:
			  $erros[] = "<li> Esse usuário é fruto da sua brisa </li>";
           endif;		  
	  endif;	 
endif;	
?>



    <html lang="pt-br">
        <head>
           <title> Login </title>
		   <meta charset="utf-8">
		   <link rel="stylesheet" href="CSS/utsukushi.css">
		   <link rel="icon" href="IMAGE/ico.png">
		   
	    </head>
        <body>
	        <div class="container">
			
	         <h1> LOGIN </h1>
		        <?php
		  
		           if (!empty($erros)):
			           foreach($erros as $erro):
				         echo $erro;
				       endforeach;	
			        endif;	 
		        ?>
			    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		            <div class="input">
					 <label>Login</label>
        			 <input type="text" name="login">
					 <label>Senha</label>
		             <input type="password" name="senha">
					    <button class="forget"> 
					     <a href="otario.html"> Esqueci a senha </a>
					    </button>
						 <button class="btn4"> 
					     <a href="Contact.php"> Cadastro </a>
					    </button>
						<button class="btn" type="submit" name="btn-entrar"> Entrar </button>
					</div>
		        </form>
		    </div>	

              <img class="img" src="IMAGE/ico.png">	
			  
        </body>
    </html>
