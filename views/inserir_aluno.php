<?php

if(!isset($_GET['editar'])){


?>

<h1>Inserir novo aluno:</h1>
<br><br>
<form method="post" action="processa_aluno.php">

    <label>
        Nome do aluno:<br>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    </label>
    <br>
    <label>
        Data Nascimento:<br>
        <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
    </label>
    <br>
    <label>
        Endereço:<br>
        <input class="form-control" type="text" name="endereco" placeholder="Insira o endereço">
    </label>
    <br>
    <label>
        Cidade:<br>
        <input class="form-control" type="text" name="cidade" placeholder="Insira a cidade">
    </label>
    <br>
    <label>
        Estado:<br>
        <input class="form-control" type="text" name="estado" placeholder="Insira o estado">
    </label>
    <br>
    <label>
        CPF:<br>
        <input class="form-control" type="text" name="cpf" placeholder="Insira o cpf do aluno">
    </label>
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir aluno">


</form>
<?php } else{ ?>
    <?php
    $servidor = 'localhost';
    $user = 'root';
    $senha = 'colin122';
    $db = 'escola_curso';

    $connection = mysqli_connect($servidor, $user, $senha, $db);

    $query = "SELECT * FROM alunos";
    $consulta_cursos = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_cursos)){?>
        <?php if($linha['id_aluno'] == $_GET['editar']){?>
            <h1>Editar curso:</h1>
            <br><br>
            <form method="post" action="edita_aluno.php">

                <label>
                    <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                    Nome do aluno:<br>
                    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
                </label>
                <br>
                <label>
                    Data Nascimento:<br>
                    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                </label>
                <br>
                <label>
                    Endereço:<br>
                    <input class="form-control" type="text" name="endereco" placeholder="Insira o endereço" value="<?php echo $linha['endereco']; ?>">
                </label>
                <br>
                <label>
                    Cidade:<br>
                    <input class="form-control" type="text" name="cidade" placeholder="Insira a cidade" value="<?php echo $linha['cidade']; ?>">
                </label>
                <br>
                <label>
                    Estado:<br>
                    <input class="form-control" type="text" name="estado" placeholder="Insira o estado" value="<?php echo $linha['estado']; ?>">
                </label>
                <br>
                <label>
                    CPF:<br>
                    <input class="form-control" type="text" name="cpf" placeholder="Insira o cpf do aluno" value="<?php echo $linha['cpf']; ?>">
                </label>
                <br><br>
                <input class="btn btn-success" type="submit" value="Editar aluno">


            </form>

        <?php }}} ?>