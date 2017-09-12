<?php
	function comecar_sessao(){
		session_start();
	}

	function logIn($usuario){
		$_SESSION['usuario'] = $usuario;
	}
	function logOut(){
		unset($_SESSION['usuario']);
	}

	comecar_sessao();
  
	if(isset($_POST['userName']) && isset($_POST['password'])){

		if($_POST['userName']=='Root' && $_POST['password']=='root'){
	
		$u=[];
		$u['userName']= 'Root';
		$u['snome']= 'Silva';
		$u['sexo']= 'F';
		$u['email']= 'root@root.com';
		$u['nomeUsuario']= 'Root';
		$u['password']= 'root';

		logIn($u);
		if(!empty($_POST['password']))
		var_dump($_SESSION);
		echo 'sucesso';
		//header('Location:index.html'); //criar uma página Home(para mostrar as informações do usuário).

		}else {
			header('Location:erro.php');
		}

		
	}

	

?>