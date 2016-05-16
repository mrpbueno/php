<?php $pagina = getConteudo($path); ?>
<h2><?=$pagina['titulo']?></h2>
<p><?=$pagina['conteudo']?></p>
<ul>
<?php
$busca = isset($_POST['busca']) ? $_POST['busca'] : null;
$conteudo = buscaConteudo($busca);
foreach ($conteudo as $c) { ?>
    <li><a href="<?= $c['path'] ?>"><?= $c['titulo'] ?></a></li>
<?php } ?>
</ul>
