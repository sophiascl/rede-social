<?php
	function começar_sessão(){
		session_start();
	}

	function loginIn(){
		$_SESSION['usuario'] = $usuario;
	}
	function loginOut(){
		unset($usuario);
	}
	$u=[];
	$u['nome']= $_POST['firstName'];
	$u['snome']= $_POST['lastName'];
	$u['sexo']= $_POST['sexo'];
	$u['email']= $_POST['email'];
	$u['username']= $_POST['userName'];
	$u['senha']= $_POST['password'];
	if($u['nome']=='Root' && $u['senha']=='root'){
		$_SESSION['usuario'] = $usuario;
	}

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="./css/cadastrar.css">
	</head>
	<body>
		<div class="fadeIn">
			<h1 class="title">Cadastro</h1>
			<form class="form">
				<input class="firstName" name="firstName" type="text" value="Root"/>
				<input class="lastName" name="lastName" type="text" value="Root"/>
				<input class="sexo" name="sexo" type="radio" name="sexo"/>Male
				<input class="sexo" name="sexo"  type="radio" name="sexo"/>Female
				<input class="email" name="email" type="email" value="root@root.com"/>
				<input class="userName" name="userName" type="text" value="Rooty"/>
				<input class="password" name="password" type="password" value="root"/>
				<input class="confPassword" type="password" value="root"/>
				<input class="send" type="submit">
			</form>
		</div>
	</body>
</html>