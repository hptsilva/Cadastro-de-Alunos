<h1 style="text-align: center">Bem-vindos ao meu site</h1>
<br>

<?php

    if(isset($_GET['erro'])){?>

        <div style="text-align: center" class="alert alert-danger" role="alert">
            Login e/ou senha inválido(s)
        </div>

<?php

    }

?>



<form method="post" style="text-align: center" action="login.php">

    <label>
        Login
        <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
        <br>
        Senha
        <input type="password" name="senha" placeholder="Senha do usuário" class="form-control">
        <br><br>
        <input type="submit" value="Entrar" class="btn btn-success">
    </label>

</form>