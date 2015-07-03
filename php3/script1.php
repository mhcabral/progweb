<?php

	$nome = $_POST['nome_completo'];
	$sex = $_POST['sex'];
	$comment = $_POST['comentario'];

	echo "<p>Nome Completo: " . $nome . "<br/>Sexo: " . $sex . "<br/>Comentario: " . $comment ."</p>";

	$conexao = mysql_connect("localhost", "root", "kx8964t", 3306);

	if (!$conexao) 
		die("<p>O servidor do banco está indisponível</p>");

	$banco = @mysql_select_db("bd_prog_web",$conexao);

	if (!$banco) 
		die("<p>Banco de Dados não disponível.</p>");

	echo "<p>Banco de dados aberto com sucesso.</p>";

	$sql = "INSERT INTO registro (id,nome,sexo,comentarios) VALUES (NULL,'$nome','$sex','$comment')"; 
	mysql_query($sql,$conexao);
	$results = mysql_query ("Select * from registro;",$conexao);
	echo "<p>".$results."</p>";
	mysql_close($conexao);
?>