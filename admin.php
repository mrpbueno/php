<?php
session_start();

// verifica se o admin está logado
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
    $paginas = listaPaginas();
    echo "<h2>Página de administração do site</h2>";
    echo "<ul class='list-inline'>";
    foreach($paginas as $pagina){
        echo "<li><a href='/admin/{$pagina['path']}'>{$pagina['titulo']}</a></li>";
    }
    echo "<li><a href='/logout'>Sair</a></li>";
    echo "</ul>";

    $path2 = isset(getPath()[2]) ? getPath()[2] : null;
    if($path2 != null) {
        $pagina = getConteudo($path2);
        require_once ('edita.php');
    }
} else {
    // Admin não está logado - redireciona para página de login
    header("Location: http://{$_SERVER['HTTP_HOST']}/login");
    exit;
}