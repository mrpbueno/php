<h2>Busca</h2>

<ul>
<?php
$busca = isset($_POST['busca']) ? $_POST['busca'] : null;
$conteudo = buscaConteudo($busca);
foreach ($conteudo as $c) { ?>
    <li><a href="<?= $c['path'] ?>"><?= $c['titulo'] ?></a></li>
<?php } ?>
</ul>
