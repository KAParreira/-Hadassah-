<!DOCTYPE html>
<html lang="pt-br">

     <head>
         <title> KOKOROMI </title>
     </head>
     
     <body>
         <h1> PHP </h1>
     </body>
      
</html>

<?php

$nome = "KOKOROMI";

function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";

for ($i = 1; $i <= 10; $i++){
	echo $i;
}

?>