<?php
if(!empty($_POST)){
?>
<h2>Contato</h2>
<div class="alert alert-success" role="alert">
    <p>Dados enviados com sucesso, abaixo segue os dados que você enviou</p>
</div>
<p><b>Nome:</b> <?=$_POST['nome']?></p>
<p><b>E-mail:</b>E-mail: <?=$_POST['email']?></p>
<p><b>Assumto:</b> <?=$_POST['assunto']?></p>
<p><b>Texto:</b> <?=$_POST['texto']?></p>
<?php
}
else{
    require_once('contato.php');
}
?>