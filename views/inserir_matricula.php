<h1>Inserir nova matrícula:</h1>
<br><br>
<p>Selecione o aluno:</p>

<form method="post" action="processa_matricula.php">

    <label>
        <select class="form-control" name="escolha_aluno">
            <?php

                $servidor = 'localhost';
                $user = 'root';
                $senha = 'colin122';
                $db = 'escola_curso';

                $connection = mysqli_connect($servidor, $user, $senha, $db);

                $query1 = "SELECT * FROM alunos";
                $consulta_alunos = mysqli_query($connection, $query1);

                while($linha = mysqli_fetch_array($consulta_alunos)){

                    echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';


                }

            ?>
        </select>
        <br>
        <br>
        <select class="form-control" name="escolha_curso">
            <?php

            $query2 = "SELECT * FROM cursos";
            $consulta_cursos = mysqli_query($connection, $query2);

            while($linha = mysqli_fetch_array($consulta_cursos)){

                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';

            }

            ?>
        </select>
        <br>
        <br>
        <input class="btn btn-success" type="submit" value="Matricular aluno">
    </label>

</form>

