<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastrados</title>
    <link rel="stylesheet" href="css/header1.css">
    <link rel="stylesheet" href="css/cadastroDados.css">
    <script src="https://kit.fontawesome.com/69a72fc2bd.js" crossorigin="anonymous"></script>
<body>
    <?php include 'header1.php'?>
    <div class="interfaceDados">
        <div class="containerDados">
        
            <h2>Dados Cadastrados</h2>
            <?php  
                $nome = $_POST['txnome'];
                $email = $_POST['email'];
                $telefone = $_POST['tel'];
                $cpf = $_POST['txcpf'];

                echo "<p><strong>Nome:</strong> $nome</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Telefone:</strong> $telefone</p>";
                echo "<p><strong>CPF:</strong> $cpf</p>";
            ?>
        </div>
    </div>
</body>
</html>