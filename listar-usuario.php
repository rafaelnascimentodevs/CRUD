<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista de Usuários</h1>
    <?php
        $sql ="SELECT * FROM usuarios";

        $res = $conn->query($sql);
        
        $qtd = $res->num_rows;

        if($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
                print "<th>#</th>"; 
                print "<th>Nome</th>";
                print "<th>E-mail</th>";
                print "<th>Data de Nascimento</th>";
                print "<th>CPF</th>";
                print "<th>Ações</th>";
            while ($row = $res->fetch_object()){
                print "<tr>";
                print "<td>" .$row->id. "</td>"; 
                print "<td>" .$row->nome. "</td>";
                print "<td>" .$row->email. "</td>";
                print "<td>" .$row->data_nasc. "</td>";
                print "<td>" .$row->cpf. "</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class= 'btn btn-success'>Editar
                        </button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;};\" class= 'btn btn-danger'>Excluir</button>
                       </td>";
                print "</tr>";
            }
            print "</table>";
        }else{
            print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
        }
    ?>    
  </body>
</html>