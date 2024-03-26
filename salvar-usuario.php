<?php {
    switch (@$_REQUEST["acao"]) {
        case ("cadastrar"):
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];
            $cpf = $_POST["cpf"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc, cpf) VALUES('{$nome}', '{$email}', '{$senha}','{$data_nasc}', '{$cpf}')";
            
            $res = $conn->query($sql);

            if (!$res) {
                print "<script>alert('Erro no Cadastro');</script>";
                print "<script>location.href='index.php';</script>";
            } else {
                print "<script>alert('Cadastrado com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];
            $cpf = $_POST["cpf"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        nome='{$email}',
                        nome='{$senha}',
                        nome='{$cpf}',
                        nome='{$data_nasc}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if (!$res) {
                print "<script>alert('Erro na Edição');</script>";
                print "<script>location.href='index.php';</script>";
            } else {
                print "<script>alert('Editado com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST['id'];
            
            $res = $conn->query($sql);

            if (!$res) {
                print "<script>alert('Erro: Não possível excluir');</script>";
                print "<script>location.href='index.php';</script>";
            } else {
                print "<script>alert('Excluido com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            
            break;
        }
    }
?>