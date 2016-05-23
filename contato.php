<h2>Página de contato</h2>

<?php
if(!empty($_POST))
    require_once ('envia.php');

if(empty($_POST))
    require_once ('formulario.php');
?>