<?php

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$query = "INSERT INTO alunos(nome_aluno, data_nascimento, endereco, cidade, estado, cpf)
            VALUES('$nome_aluno', '$data_nascimento', '$endereco', '$cidade', '$estado', $cpf)";

mysqli_query($connection, $query);

header('location:index.php?pagina=alunos');
