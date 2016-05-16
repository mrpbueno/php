<?php
//Array com as rotas válidas
$rotas = ["contato","empresa","home","produtos","servicos","busca"];
//Interpreta uma URL e retorna os seus componentes
$url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//Separa o path da / e seta a rota home como default
$path = !empty(explode('/',$url['path'])[1]) ? explode('/',$url['path'])[1] : "home";