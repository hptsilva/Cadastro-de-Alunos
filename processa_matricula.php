<?php

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$query = "INSERT INTO alunos_cursos(id_aluno, id_curso)
            VALUES($id_aluno,$id_curso)";

mysqli_query($connection, $query);

header('location:index.php?pagina=matriculas');