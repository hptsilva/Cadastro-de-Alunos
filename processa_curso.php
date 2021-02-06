<?php

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$query = "INSERT INTO cursos(nome_curso, carga_horaria)
            VALUES('$nome_curso', $carga_horaria)";

mysqli_query($connection, $query);

header('location:index.php?pagina=cursos');
