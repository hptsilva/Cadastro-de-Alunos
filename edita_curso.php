<?php

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$query = "UPDATE cursos SET nome_curso = '$nome_curso', carga_horaria = $carga_horaria
          WHERE id_curso = $id_curso";

mysqli_query($connection, $query);

header('location:index.php?pagina=cursos');
