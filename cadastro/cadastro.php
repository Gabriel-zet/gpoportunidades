<?php
include_once("../db.php");

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Verifica se o nome de usuário ou e-mail já existe no banco de dados
    $check_query = "SELECT * FROM usuarios WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        echo "Nome de usuário ou e-mail já existem no sistema!";
        exit;
    } else {
        // Insere os dados do formulário no banco de dados
        $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";
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
