<?php

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$id_curso = $_GET['id_curso'];

$query = "DELETE FROM cursos WHERE id_curso = $id_curso";

mysqli_query($connection, $query);

header('location:index.php?pagina=cursos');