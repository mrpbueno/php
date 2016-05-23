<form action="/contato" method="post">
    <div class="form-group">
        <label>Nome:</label>
        <input class="form-control" name="nome" required>
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label>Assunto:</label>
        <input class="form-control" name="assunto" required>
    </div>
    <div class="form-group">
        <label>Texto:</label>
        <textarea class="form-control" rows="3" name="texto" required></textarea>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>