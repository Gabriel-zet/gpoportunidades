<?php
session_start();

include_once('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND password = '$password'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    
        echo "<script type='text/javascript'>
        alert('Não foi encontrado nenhum resultado!');
        window.location.href = 'login.php';
      </script>";
        exit;
    }else 
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: ../index.html');
    }
} else {
    echo "deu erro";
}
?>
