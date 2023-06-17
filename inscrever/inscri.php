<?php

include_once('../db.php');

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];

    // Verifica se o nome de usuário ou e-mail já existe no banco de dados
    $check_query = "SELECT * FROM inscritos WHERE email='$email' OR cpf='$cpf'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        echo "CPF ou e-mail já existem no sistema!";
        exit;
    } else {
        // Insere os dados do formulário no banco de dados
        $sql = "INSERT INTO inscritos (username, cpf, email) VALUES ('$username', '$cpf', '$email')";
        if (mysqli_query($conn, $sql)) {
            $mensagem = urlencode("Cadastro realizado com sucesso!");
            header("Location: ../index.html?mensagem=$mensagem");
            exit;
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conn);
            exit;
        }
    }
}

mysqli_close($conn);


?>
