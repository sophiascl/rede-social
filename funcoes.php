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
?>