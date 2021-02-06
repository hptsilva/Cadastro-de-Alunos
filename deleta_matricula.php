<?php

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$id_aluno_curso = $_GET['id_aluno_curso'];

$query = "DELETE FROM alunos_cursos WHERE id_aluno_curso = $id_aluno_curso";

mysqli_query($connection, $query);

header('location:index.php?pagina=matriculas');
