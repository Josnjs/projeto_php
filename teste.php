<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projeto";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}

echo "Conexão bem sucedida!";


mysqli_close($conn);

?>
