<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Obrigado</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="container">
        <h1>Muito obrigado por se cadastrar!</h1>
        <p>Seu cadastro foi realizado com sucesso.</p>

        <h2>Pessoas cadastradas:</h2>
        <ul>
            <?php
            // Conexão com o banco de dados
            require_once 'conexao.php';
            $pdo = mysqlConnect();

            // Consulta para recuperar as pessoas cadastradas
            $stmt = $pdo->query("SELECT * FROM pessoa");
            while ($row = $stmt->fetch()) {
                echo "<li>";
                echo "Nome: " . htmlspecialchars($row['nome']) . "<br>";
                echo "Email: " . htmlspecialchars($row['email']) . "<br>";
                echo "Celular: " . htmlspecialchars($row['celular']) . "<br>";
                echo "Assunto: " . htmlspecialchars($row['assunto']) . "<br>";
                echo "Mensagem: " . htmlspecialchars($row['mensagem']) . "<br>";
                echo "Gênero: " . htmlspecialchars($row['genero']) . "<br>";
                echo "Interesses: " . htmlspecialchars($row['interesses']) . "<br>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>

    <?php
    include 'footer.php';
    ?>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>