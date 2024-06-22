<?php
require("conection.php"); 


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM aluno WHERE id = $id";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $email = $row['email'];
        $curso = $row['curso'];

       
        ?>
        <h3>Confirmação de Exclusão</h3>
        <p>Você está prestes a excluir o seguinte aluno:</p>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Curso:</strong> <?php echo htmlspecialchars($curso); ?></p>

        <p>Tem certeza que deseja excluir este aluno?</p>
        <form action="delete_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Sim, Excluir">
            <a href="index.html">Cancelar</a>
        </form>
        <?php
    } else {
        echo "<h3>Aluno não encontrado.</h3>";
    }

    $result->free();
} else {
    echo "<h3>Parâmetro ID não encontrado.</h3>";
}

$conn->close();
?>
