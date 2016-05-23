<?php
session_start();

// Se o admin estiver logado redireciona para página de admnistração
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
    header("Location: http://{$_SERVER['HTTP_HOST']}/admin");
    exit;
}
$erro = 0; // Variável de controle de erro no login
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

if($usuario != null && $senha != null) {

    $valida = validaAdmin($usuario, $senha);

    if($valida == 1) {
        $_SESSION['admin'] = 1;
        header("Location: http://{$_SERVER['HTTP_HOST']}/admin");
        exit;
    } else {
        $erro = 1; // Login falhou
    }
}
?>
<form class="form-signin" action="/login" method="post">
    <h2 class="form-signin-heading">Faça o login</h2>
    <?php if($erro == 1) { ?>
        <div class="alert alert-danger" role="alert">
            Usuário ou senha inválida
        </div>
    <?php } ?>
    <div class="form-group">
        <input class="form-control" name="usuario" placeholder="Usuário" required autofocus>
    </div>
    <div class="form-group">
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>