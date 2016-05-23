<?php

function getPath()
{
    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    return explode('/',$url['path']);
}

function getConteudo($path)
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM paginas WHERE path = :path";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":path",$path);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function salvaConteudo($path, $titulo, $conteudo)
{
    $conexao = conexaoDB();
    $sql = "UPDATE paginas SET titulo = :titulo, conteudo = :conteudo WHERE path = :path";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":path",$path);
    $stmt->bindValue(":titulo",$titulo);
    $stmt->bindValue(":conteudo",$conteudo);
    $stmt->execute();
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

function listaPaginas()
{
    $conexao = conexaoDB();
    $sql = "SELECT path, titulo FROM paginas";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function validaAdmin($usuario, $senha)
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM admin WHERE usuario = :usuario";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":usuario",$usuario);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    return password_verify($senha, $admin['senha']);
}