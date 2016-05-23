<form action="/salva" method="post">
    <div class="form-group">
        <label>Título</label>
        <input class="form-control" name="titulo" value="<?=$pagina['titulo']?>" required>
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <textarea name="conteudo" id="editor" required>
        <?=$pagina['conteudo']?>
        </textarea>
    </div>
    <input type="hidden" name="path" value="<?=$pagina['path']?>">
    <button type="submit" class="btn btn-default">Salvar</button>
</form>
