

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
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Atualizar Aluno</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f0f0f0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .form-container {
                    background-color: #ffffff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    width: 400px; 
                }
                .form-container h3 {
                    text-align: center;
                }
                .form-container form {
                    text-align: left;
                }
                .form-container label {
                    display: block;
                    margin-bottom: 10px;
                }
                .form-container input[type="text"],
                .form-container input[type="email"],
                .form-container input[type="submit"] {
                    width: calc(100% - 20px); 
                    padding: 8px;
                    margin-bottom: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    font-size: 14px;
                    box-sizing: border-box;
                }
                .form-container input[type="submit"] {
                    background-color: #4CAF50;
                    color: white;
                    border: none;
                    cursor: pointer;
                }
                .form-container input[type="submit"]:hover {
                    background-color: #45a049;
                }
                .form-container a {
                    display: block;
                    text-align: center;
                    margin-top: 10px;
                    text-decoration: none;
                    color: #333;
                }
                .form-container a:hover {
                    text-decoration: underline;
                }
            </style>
        </head>
        <body>
            <div class="form-container">
                <h3>Atualizar Aluno</h3>
                <form action="update_process.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>"><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
                    <label for="curso">Curso:</label><br>
                    <input type="text" id="curso" name="curso" value="<?php echo htmlspecialchars($curso); ?>"><br><br>
                    <input type="submit" value="Atualizar">
                </form>
                <a href="index.html">Cancelar</a>
            </div>
        </body>
        </html>
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
