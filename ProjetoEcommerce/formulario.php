<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/stylesFormulario.css">
    <link rel="stylesheet" href="css/header1.css">
    <script src="https://kit.fontawesome.com/69a72fc2bd.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header1.php'?>
    <h1>Faça seu cadastro aqui</h1>
    <div class="formInterface">
        <form action="cadastroDados.php" method="POST">
            <label for=""> Nome:</label>
            <input type="text" name="txnome" id="txnome" required>

            <label for="">E-mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="">Telefone:</label>
            <input type="tel" name="tel" id="tel" required>

            <label for="">CPF:</label>
            <input type="text" name="txcpf" id="txcpf" required>

            <label for="">Criar Senha:</label>
            <input type="password" name="pwCriarSenha" id="pwCriarSenha" required>

            <label for="">Confirmar Senha:</label>
            <input type="password" name="pwConfirmarSenha" id="pwConfirmarSenha" required>
            
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
