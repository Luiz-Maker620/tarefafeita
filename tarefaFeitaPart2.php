<?php
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $produto = $_POST['produto'];

        $sql = "INSERT INTO cliente (nome, cpf, produto)
                VALUES ('$nome', '$cpf', '$produto')";
    
        if($mysqli->query($sql) ) {
            echo "Pessoa Cadastrada";
        } else {
            echo "Erro: " . $mysqli->error;
        }

    }

?>

