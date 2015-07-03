<?php
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario == demo && $senha == demo){
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
	}
	echo "<script type='text/javascript'>window.open('\index.php','_self')</script>";

?>