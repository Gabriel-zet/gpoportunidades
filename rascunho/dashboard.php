<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head>

<body>

    <?php 
    
    include_once('auth.php');

    $sql = "SELECT * FROM inscritos";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Erro na consulta: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "CPF: " . $row['cpf'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
    ?>


    <img src="/images/landing.svg" alt="" srcset="">


</body>

</html>