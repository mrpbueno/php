<?php

require_once ('conexao.php');
require_once ('rotas.php');

function getConteudo($path)
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM paginas WHERE path = :path";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":path",$path);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function validaRota($path, $rotas)
{
    if(in_array($path,$rotas)){
        require_once($path.".php");
    }
    else {
        require_once('404.php');
    }
}

function buscaConteudo($busca)
{
    $conexao = conexaoDB();
    $sql = "SELECT path, titulo FROM paginas WHERE conteudo LIKE :busca";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":busca","%".$busca."%");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}