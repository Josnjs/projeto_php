<?php
require("conection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

 
    $sql = "DELETE FROM aluno WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Aluno excluído com sucesso!</h3>";
        echo "<a href='index.html'>Voltar</a>";
    } else {
        echo "<h3>Ocorreu um erro ao excluir o aluno: " . $conn->error . "</h3>";
    }
}

$conn->close();
?>
