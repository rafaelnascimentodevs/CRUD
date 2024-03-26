<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Cadastro</h1>
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar" class="form-control">  
      <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
      </div>
      <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
      </div>
      <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </body>
</html>