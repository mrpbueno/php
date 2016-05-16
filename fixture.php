<?php

require_once ('conexao.php');
$conexao = conexaoDB();

echo "### Executando Fixture ###\n";

echo "Removendo tabela - ";
$conexao->query("DROP TABLE IF EXISTS paginas");
echo "OK\n";

echo "Criando a tabela - ";
$conexao->query("CREATE TABLE paginas (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  path varchar(45) NOT NULL,
  titulo varchar(45) NOT NULL,
  conteudo text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
echo "OK\n";

echo "Inserindo dados - ";
$path =['home','empresa','produtos','servicos','contato','busca'];
$titulo = ['Home','Empresa','Produtos','Serviços','Contato','Busca'];
$conteudo = ['Conteúdo da Home','Conteúdo da Empresa','Conteúdo dos Produtos',
                    'Conteúdo dos Serviços','Página de Contato','Resultado da Busca'];

$sql = "INSERT INTO paginas (path, titulo, conteudo) VALUES (:path, :titulo, :conteudo)";
$stmt = $conexao->prepare($sql);
for($i=0;$i<=5;$i++){
    $stmt->bindValue(":path",$path[$i]);
    $stmt->bindValue(":titulo",$titulo[$i]);
    $stmt->bindValue(":conteudo",$conteudo[$i]);
    $stmt->execute();
}
echo "OK\n";

echo "### Fim ###\n";