
<html>

<head>
	<title>Minha Primeira Página</title>
	<meta charset="utf-8" />
</head>

<body>
	<?php
		session_start();
		$usuario = $_SESSION['usuario'];
		echo "<form method='POST' action='logout.php'><table><tr><td>Bem vindo ".$usuario."</td>";
		echo "<td><input type='submit' value='Logout'></td></tr></table></form>"; 
	?>
	<h1>Este é um grande cabeçalho</h1>
	<h3>E este aqui é um pequeno cabeçalho</h3>
	<p>Aqui eu coloquei um parágrafo com algum texto aleatório, e a seguir<br/>
	 vou inserir um formulário dentro de uma tabela. Além disso, aqui vai<br/> 
	 um link: <a href="http://icomp.ufam.edu.br">http://icomp.ufam.edu.br</a></p>
	<form method="POST" action="script1.php">
	<table>
		<tr>
			<td>Seu nome</td>
			<td><input id="nome_completo" type="text" name="nome_completo"/></td>
		</tr>
		<tr>
			<td>Seu sexo</td>
			<td>
			<select name="sex">
				<option value="Masculino" selected="">Masculino</option>
				<option value="Feminino">Feminino</option>
			</select>
			</td>
		</tr>
		<tr>
			<td valign="top">Seus<br/>comentários</td>
			<td><textarea id="coment" name="comentario" rows="10" cols="60"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="submit" type="submit" value="Enviar"></td>
		</tr>
		</form>
	</table>
</body>

</html>