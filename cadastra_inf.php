<?php
 require("conection.php"); 
   
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $curso = $_POST['curso'];
 
 $sql = "INSERT INTO aluno (nome, email, curso) VALUES ('$nome','$email','$curso')";
 
 if ($conn->query($sql) === TRUE){
    echo "<h3>Cadastro realizado com sucesso: </h3> ";
    echo " <a href='index.html'>Voltar</a>";
 }else{
    echo "<h3>OCORREU UM ERRO: </h3> " . $sql . "<br" . $conn->error;
 }
 
 ?>