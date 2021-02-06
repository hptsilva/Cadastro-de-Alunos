<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table style="border:1px solid #ccc; width: 100%" id="alunos">

    <caption>Tabela de alunos</caption>
    <thead>
        <tr>
            <th>Aluno </th>
            <th>Data de nascimento</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CPF</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
    <?php

    $servidor = 'localhost';
    $user = 'root';
    $senha = 'colin122';
    $db = 'escola_curso';

    $connection = mysqli_connect($servidor, $user, $senha, $db);

    $query = "SELECT * FROM alunos";
    $consulta_alunos = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_alunos)){

        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'. $linha['data_nascimento'].'</td>';
        echo '<td>'. $linha['endereco'].'</td>';
        echo '<td>'. $linha['cidade'].'</td>';
        echo '<td>'. $linha['estado'].'</td>';
        echo '<td>'. $linha['cpf'].'</td>';

        ?>

        <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
        <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>

        <?php
    }

    ?>
    </tbody>
</table>
