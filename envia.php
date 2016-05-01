<?php
if(!empty($_POST)){
?>
<h2>Contato</h2>
<div class="alert alert-success" role="alert">
    <p>Dados enviados com sucesso, abaixo seguem os dados que você enviou</p>
</div>
<p>Nome: <?=$_POST['nome']?></p>
<p>E-mail: <?=$_POST['email']?></p>
<p>Assumto: <?=$_POST['assunto']?></p>
<p>Texto: <?=$_POST['texto']?></p>
<?php
}
else{
    require_once('contato.php');
}
?>