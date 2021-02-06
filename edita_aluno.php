<?php

$id_aluno = $_POST['id_aluno'];
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

$query = "UPDATE alunos SET nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento', endereco = '$endereco', cidade = '$cidade', estado = '$estado', cpf = $cpf
          WHERE id_aluno = $id_aluno";

mysqli_query($connection, $query);

header('location:index.php?pagina=alunos');
