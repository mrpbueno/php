<?php

$path = isset($_POST['path']) ? $_POST['path'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
$conteudo = isset($_POST['conteudo']) ? $_POST['conteudo'] : null;

// Verifica se uma das variáveis não estão vazias
if(!empty($path) || !empty($titulo) || !empty($conteudo)) {
    // Salva o conteúdo e redireciona para a página que foi editada
    salvaConteudo($path, $titulo, $conteudo);
    header("Location: http://{$_SERVER['HTTP_HOST']}/{$path}");
    exit;
} else {
    // Redireciona para a home caso uma das variáveis estiver vazia
    header("Location: http://{$_SERVER['HTTP_HOST']}");
    exit;
}
