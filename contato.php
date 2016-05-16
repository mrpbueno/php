<?php $pagina = getConteudo($path); ?>
<h2><?=$pagina['titulo']?></h2>
<p><?=$pagina['conteudo']?></p>
<?php
if(!empty($_POST))
    require_once ('envia.php');

if(empty($_POST))
    require_once ('formulario.php');
?>