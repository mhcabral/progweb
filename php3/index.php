<html>
<head>
	<?php
		session_start();
		if(isset($_SESSION['usuario'])){
			echo "<script type='text/javascript'>window.open('\pagregs.php','_self')</script>";
		}  
	?>
	<title>Pagina de Login</title>
	<meta charset="utf-8">
	<style type="text/css">
	body{
		margin: 10px 10px 10px 10px;
	}
	table{
		margin-left: 500px;
		margin-top: 100px;
		font-size: 20px;
		text-align: center;
	}
	h1{
		text-align: center;
	}
	</style>
</head>
<body>
	<form method="POST" action="logar.php">
		<h1>SISTEMA DE POSTAGENS<h1>
		<table>
			<tr>
				<td>Usuario</td>
				<td><input type="text" width="15px" name="usuario"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="text" width="15px" name="senha"></td>
			</tr>
			<tr>
			<td colspan="2"><input id="submit" type="submit" value="Entrar"></td>
		</tr>
		</table>
	</form>
</body>
</html>