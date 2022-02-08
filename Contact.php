<!DOCTYPE html>
    <html lang="pt-br">

     <head>
 	     <meta charset="utf-8">
 	     <meta name="viewport" content="width=device-width, initial-scale=1">
		 
		 <title>  ハダサーContact </title>
 	      
		  <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		 
		 <link rel="stylesheet" href="CSS/utsukushiContact.css">
		 <link rel="icon" href="IMAGE/ico.png">
     </head>
	 
	 <body>
	      
		    <div class="title">
			  <img class="img" src="IMAGE/ico.png">
			</div> 	
	      
	        <nav>
			    
				<div class="boxH">
				  <h1> ようこそ！ </h1>
				 </div>
 				 <button class="btn1"><a class="label" href="index.html">Home</a></button>
				 <button class="btn1"><a class="label" href="#">Hairstyle</a></button>
 				 <button class="btn1"><a class="label" href="#"> Cadastro</a></button>
				 <button class="btn1"><a href="index.php">Login</a></button>
				 <img class="img2" src="IMAGE/ico.png">

 			</nav>
			
			<section>
			   <form action="cadastro.php" method="POST" >	
				  
				  <h5>Nome</h5>
				  <input type="text" name="nome" id = "nome" class="campo" maxlength="40" required autofocus>
				  <h5>Login</h5>
				  <input type="login" name="login" id = "login" class="campo" maxlength="50" required> 
				  <h5>Senha</h5>
				  <input type="password" name="senha" id ="senha" class="campo" maxlength="40" required> 
				  
				  <div class="box">
				  <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="btn">
				  <input type="reset" value="Limpar" class="btn">
				  </div>
			    </form>
			</section>
			
	 </body>	 
	 
 </html>