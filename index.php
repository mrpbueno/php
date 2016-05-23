<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site simples em PHP</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom login -->
    <link rel="stylesheet" href="/css/signin.css">
</head>
<body>

<div class="container">
<?php

require_once ('menu.php');
require_once ('conexao.php');
require_once ('rotas.php');
require_once ('funcoes.php');
$path = !empty(getPath()[1]) ? getPath()[1] : "home";
validaRota($path, $rotas);
require_once ('footer.php');

?>
</div>

<!-- JavaScript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
</body>
</html>