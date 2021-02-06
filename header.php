<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meus Cursos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"> <img src="img/logo.jpg" title="Logo" alt="Logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <a href="?pagina=contato">Contato</a>
                <?php if(isset($_SESSION['login'])){?>
                <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (Sair) <?php }?></a>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">
</body>
</html>