<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');

// Selecionando fotos
$stmt = $pdo->query('SELECT id, nome, tipo, tamanho FROM fotos');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Salvar imagem no banco de dados com PHP/MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/main.css"/>
</head>

<body>

<div class="container">

    <h1>Salvar imagem no banco de dados com PHP/MySQL</h1>

    <p>
        <a class="btn btn-success" href="cadastro.html">Cadastrar</a>
    </p>

    <div class="row">

        <?php while ($foto = $stmt->fetchObject()): ?>

            <div class="col-sm-6 col-md-4">

                <div class="thumbnail">

                    <img src="imagem.php?id=<?php echo $foto->id ?>" />

                    <div class="caption">
                        <strong>Nome:</strong> <?php echo $foto->nome ?> <br/>
                        <strong>Tipo:</strong> <?php echo $foto->tipo ?> <br/>
                        <strong>Tamanho:</strong> <?php echo $foto->tamanho ?> bytes <br/>
                    </div>

                </div>

            </div>

        <?php endwhile ?>

    </div>

</div>

</body>
</html>