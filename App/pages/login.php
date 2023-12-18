
<div class="container col-md-7">
    <form method="post">

        <h1 class="h3 mb-3 fw-normal">Please sign in up</h1>
        
        <div class="form-floating">
            <input type="text" name="login" class="form-control" id="username" placeholder="name@example.com">
            <label for="username">Username</label>
        </div>

        <br>

        <div class="form-floating">
            <input type="password" name="senha" class="form-control" id="password" placeholder="Password">
            <label for="password">Password</label>
        </div>

        <br>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="acao">Sign In</button>
        <p class="mt-5 mb-3 text-muted">&copy;2023</p>
    </form>
</div>

<?php

    // verificando o login
    if (isset($_POST['acao'])) {

        $login = strip_tags($_POST['login']);
        $senha = strip_tags($_POST['senha']);

        $sql = Mysql::getConn()->prepare("SELECT * FROM Usurios WHERE UsuarioLogin = ? AND UsuarioSenha = ?");
        $sql->execute(array($login, $senha));

        if ($sql->rowCount() == 1) {
            // logou
            $_SESSION['login'] = $login;
        }
        else {
            // Falhou
            die('Falha');
        }
    }

    // verificando se já está logado
    if (isset($_SESSION['login'])) {
        echo '<script>location.href="/"</script>';
    }
?>