<?php

    if(!isset($_GET['editar'])){


?>
        <h1>Inserir novo curso:</h1>
        <br><br>
        <form method="post" action="processa_curso.php" >

        <label>
            Nome do curso:<br>
            <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
        </label>
        <br>
        <label>
            Carga horária:<br>
            <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária do curso">
        </label>
        <br><br>
        <input class="btn btn-success" type="submit" value="Inserir curso">

        </form>

<?php } else{ ?>
<?php
$servidor = 'localhost';
$user = 'root';
$senha = 'colin122';
$db = 'escola_curso';

$connection = mysqli_connect($servidor, $user, $senha, $db);

$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($connection, $query);
while($linha = mysqli_fetch_array($consulta_cursos)){?>
        <?php if($linha['id_curso'] == $_GET['editar']){?>
        <h1>Editar curso:</h1>
        <br><br>
        <form method="post" action="edita_curso.php" >

            <label>
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                Nome do curso:<br>
                <input type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
            </label>
            <br>
            <label>
                Carga horária:<br>
                <input type="text" name="carga_horaria" placeholder="Insira a carga horária do curso" value="<?php echo $linha['carga_horaria']; ?>">
            </label>
            <br><br>
            <input type="submit" value="Editar curso">

        </form>

<?php }}} ?>

