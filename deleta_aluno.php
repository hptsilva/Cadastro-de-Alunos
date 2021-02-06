<?php

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$id_aluno = $_GET['id_aluno'];

$query = "DELETE FROM alunos WHERE id_aluno = $id_aluno";

mysqli_query($connection, $query);

header('location:index.php?pagina=alunos');
