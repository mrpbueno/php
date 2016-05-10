<?php
//Array com as rotas válidas
$rotas = ["contato","empresa","envia","home","produtos","servicos"];
//Interpreta uma URL e retorna os seus componentes
$url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//Separa o path da /
$path = explode('/',$url['path']);
//Função para validação de rotas
function validaRota($rotas,$path)
{
    if(in_array($path[1],$rotas)){
        require_once($path[1].".php");
    }
    else if($path[1]==""){
        require_once('home.php');
    }
    else{
        require_once('404.php');
    }
}