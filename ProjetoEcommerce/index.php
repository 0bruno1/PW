<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisitos Funcionais</title>
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/header1.css"> 
    <link rel="stylesheet" href="css/footer.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/69a72fc2bd.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header1.php';?>
        <div class="container">
            <h1 class="TituloRequisitos">Requisitos funcionais<br> do <br> nosso projeto.</h1>
            <section class="seçãoTabelaRequisitos">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">número</th>
                        <th scope="col">Requisito Funcional</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>O projeto deve apresentar os produtos para compra</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">2</th>
                            <td>O projeto deve permitir a busca por produtos</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">3</th>
                            <td>O projeto deve permitir a filtração de produtos por preço</td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>O projeto deve permitir a instalação de cookies para recomendação de produtos</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
</body>
</html>