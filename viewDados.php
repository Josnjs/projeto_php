<!-- 

<?php
require("conection.php"); 

$sql = "SELECT * FROM aluno";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<h3>Alunos cadastrados: </h3>";
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Email</th><th>Curso</th><th>Ações</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['curso']) . "</td>";
            echo "<td>";
            echo "<a href='update.php?id=" . $row['id'] . "'>Atualizar</a> | ";
            echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Tem certeza que deseja excluir este aluno?\")'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo " <a href='index.html'>Voltar</a>";
    } else {
        echo "<h3>Nenhum aluno cadastrado.</h3>";
    }

    $result->free();
} else {
    echo "<h3>OCORREU UM ERRO: </h3> " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> -->

<?php
require("conection.php"); 


echo "
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }
    h3 {
        text-align: center;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table th, table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }
    table th {
        background-color: #f2f2f2;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    table tr:hover {
        background-color: #f1f1f1;
    }
    .actions {
        text-align: center;
    }
    .actions a {
        text-decoration: none;
        margin: 0 5px;
        color: #333;
    }
    .actions a:hover {
        text-decoration: underline;
    }
</style>
";


$sql = "SELECT * FROM aluno";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
  
        echo "<h3>Alunos cadastrados: </h3>";
        echo "<table>";
        echo "<tr><th>Nome</th><th>Email</th><th>Curso</th><th>Ações</th></tr>";

     
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['curso']) . "</td>";
            echo "<td class='actions'>";
            echo "<a href='update.php?id=" . $row['id'] . "'>Atualizar</a>";
            echo " | ";
            echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Tem certeza que deseja excluir este aluno?\")'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }

       
        echo "</table>";
        echo "<p><a href='index.html'>Voltar</a></p>";
    } else {
      
        echo "<h3>Nenhum aluno cadastrado.</h3>";
    }

  
    $result->free();
} else {
    
    echo "<h3>OCORREU UM ERRO: </h3> " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
