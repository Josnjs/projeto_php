<?php
require("conection.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

   
    $sql = "UPDATE aluno SET nome='$nome', email='$email', curso='$curso' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Dados atualizados com sucesso!</h3>";
        echo "<a href='index.html'>Voltar</a>";
    } else {
        echo "<h3>Ocorreu um erro ao atualizar os dados: " . $conn->error . "</h3>";
    }
}

$conn->close();
?>
