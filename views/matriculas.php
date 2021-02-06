<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir matrícula:</a>

<table style="border:1px solid #ccc; width: 100%" id="matriculas">

    <caption>Tabela de matrículas</caption>
    <thead>
        <tr>
            <th>Aluno</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $servidor = 'localhost';
    $user = 'root';
    $senha = 'colin122';
    $db = 'escola_curso';

    $connection = mysqli_connect($servidor, $user, $senha, $db);

    $query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso
                FROM alunos, cursos, alunos_cursos
                WHERE alunos_cursos.id_aluno = alunos.id_aluno
                AND alunos_cursos.id_curso = cursos.id_curso";
    $consulta_matriculas = mysqli_query($connection, $query);
    $aluno = NULL;
    while($linha = mysqli_fetch_array($consulta_matriculas)){

        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'. $linha['nome_curso'].'</td>';

        ?>

        <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>

        <?php

    }

    ?>
    </tbody>
</table>
