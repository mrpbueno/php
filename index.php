<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site simples em PHP</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<?php
require_once('menu.php');

if(!isset($_GET['acao'])){
    $_GET['acao'] = 'home';
}

switch($_GET['acao']){
    case 'home':
        require_once('home.php');
        break;
    case 'empresa':
        require_once('empresa.php');
        break;
    case 'produtos':
        require_once('produtos.php');
        break;
    case 'servicos':
        require_once('servicos.php');
        break;
    case 'contato':
        require_once('contato.php');
        break;
    case 'envia':
        require_once('envia.php');
        break;
    default:
        require_once('home.php');
}

require_once('footer.php');

?>
</div>

<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
