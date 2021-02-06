<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>

<table style="border:1px solid #cccccc; width: 100%" id="cursos">

    <caption>Tabela de cursos</caption>
    <thead>
        <tr>
                <th>Curso</th>
                <th>Carga horário</th>
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

    $query = "SELECT * FROM cursos";
    $consulta_cursos = mysqli_query($connection, $query);
    while($linha = mysqli_fetch_array($consulta_cursos)){

            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'. $linha['carga_horaria'].'</td>';

    ?>

        <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
        <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>

    <?php

    }
    ?>
    </tbody>
</table>
