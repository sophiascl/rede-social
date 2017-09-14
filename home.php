<?php
	require_once "funcoes.php";
	comecar_sessao();
	if(isset($_SESSION["usuario"])){
		$u=$_SESSION["usuario"];

	}
?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/home.css">
		<meta charset="utf-8"/>
	</head>
	<body>
		<div>
	
		<ul>
			<li><a href="index.html">Página Inicial</a></li>
			<li><a href="logOut.php">Sair</a></li>
		</ul>
			
			<img class="imgPerfil" src="./img/images.jpg" />
			<p><?php echo $u['nome']; ?></p>
			<p><?php echo $u['userName']; ?></p>
			<p><?php echo $u['snome']; ?></p>
			<p><?php echo $u['email']; ?></p>
			<p><?php echo $u['sexo']; ?></p>
			
		</div>
	</body>
</htm>


