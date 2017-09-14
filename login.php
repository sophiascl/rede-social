<?php
	require_once "funcoes.php";

	comecar_sessao();
  
	if(isset($_POST['userName']) && isset($_POST['password'])){

		if($_POST['userName']=='Root' && $_POST['password']=='root' && !(empty($_POST['password'])) ){
	
			$u=[];
			$u['nome']= 'Root';
			$u['snome']= 'Silva';
			$u['sexo']= 'F';
			$u['email']= 'root@root.com';
			$u['userName']= 'Root';
			header('Location:home.php'); //criar uma página Home(para mostrar as informações do usuário).
			echo 'sucesso';
			logIn($u);
			var_dump($_SESSION);
				
			}
			else if($_POST['userName']!='Root' || $_POST['password']!='root'){
				header('Location:erro.php');

		}
	}
	

	

?>