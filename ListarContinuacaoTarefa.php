<?php
    include 'conexao.php';

    $sql = "SELECT * FROM cliente";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>ID</th></tr>
        <tr><th>Nome</th></tr>
        <tr><th>CPF</th></tr>
        <tr><th>Produto</th></tr>";
        
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['cpf'] . "</td>";
            echo "<td>" . $row['produto'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
       } else {
            echo "<p>Nenhum cliente cadastrado</p>";
            }    


?>