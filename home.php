<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
     header('location: index.php');
endif;

// Dados
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM user WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>

<html lang="pt-br">
     <head>
        
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
			
			<title> ハダサー美容院  </title>
			
		   <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		  <link rel="stylesheet" href="CSS/utsukushiHome.css">
          <link rel="icon" href="IMAGE/ico.png">
		   
	 </head>

     <body>
            
			<div class="title">
			  <img class="img" src="IMAGE/ico.png">
			</div>
			
	        <nav>
			    <div class="boxH">
			       <h2> ようこそ！ <?php echo $dados['nome']; ?></h2>
				</div>
				 
 			 <button class="btn1"><a class="label" href="#">Home</a></button>
 			 <button class="btn1"><a class="label" href="#">Hairstyle</a></button>
			 <button class="btn1"><a href="logout.php">Sair</a></button>
			 <img class="img2" src="IMAGE/ico.png">
				
 			</nav>	
			
			<div class="box">
			    <div class="row">
				    <div class="col-sm-4">
			            <div class="card">
			                 <img class="kami" src="IMAGE/and3.jpg">
			                 <h5> 青い髪 (DARK BLUE HAIR) </h5>
		
                        </div>
			        </div>
					
				    <div class="col-sm-4">
			           <div class="card">
			              <img class="kami" src="IMAGE/keke4.jpg">
			              <h5> ピンク髪 (PINK HAIR)</h5>
                        </div>
					</div>
					
					<div class="col-sm-4">
			            <div class="card">
			                 <img class="kami" src="IMAGE/sasa3.jpg">
			                 <h5> 青い (BLUE HAIR) </h5>
							 
                        </div>
			        </div>
					
			    </div>
		    </div>
			
			<div class="box1">
			    <div class="row">
				    <div class="col-sm-3">
			            <div class="card">
			                 <img class="kami" src="IMAGE/j2.jpg">
			                 <h5> 黄色のインナーカラー (YELLOW INNER COLOR) </h5>
						
                        </div>
			        </div>
					<div class="col-sm-3">
			            <div class="card">
			                 <img class="kami" src="IMAGE/j3.jpg">
			                 <h5> 青のインナーカラー (BLUE INNER COLOR) </h5>
							
                        </div>
			        </div>
					
					<div class="col-sm-3">
			            <div class="card">
			                 <img class="kami" src="IMAGE/j1.jpg">
			                 <h5> 緑のインナーカラー (GREEN INNER COLOR) </h5>
								
                        </div>
			        </div>
					
					<div class="col-sm-3">
			            <div class="card">
			                 <img class="kami" src="IMAGE/j4.jpg">
			                 <h5> 銀のインナーカラー (SILVER INNER COLOR) </h5>
							
                        </div>
			        </div>
					
                 </div>
			 </div>	 
			
		   <!-- Option 1: Bootstrap Bundle with Popper -->
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
             <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		 
	 </body>	 
</html>	 