<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link href="/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <title>K-BYTE STORE</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="logo">
                <a href="index.php"><img src="./img/LOGO3.png" width="30px" /> <a href="index.php"><img src="./img/LOGO2.png" width="199px" /></a>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="index.php">INÍCIO</a></li>
                </ul>
            </div>
        </div>
    </main>
    <br><br><br>
    <div class="container">
        <?php
        session_start();

        $produto = $_GET['pId'];
        echo
        '<script>
            var x = "' . $produto . '";
        </script>';
        ?>
        <div class="row">
            <div class="col" id="imagem">
                
            </div>
            <div class="col border border-dark rounded infoProduto">

                <h6 class="mt-4">
                    <p id="nome"></p>
                </h6>
                <p class="mt-3" id="descricao"></p>

                <h6>12% de desconto no cartão</h6>
                <h5 class="text-success">
                    <p id="precos"></p>
                </h5>
                <small class="text-danger">8x sem juros no cartão</small>
            </div>
            <div class="botoesProduto">
                <button class="btn btn-success text-dark bg-transparent" type="submit" title="Comprar"><span class="oi oi-cart"></span> Comprar</button>
                <a href="index.php" class="btn"><button type="button" class="btn btn-success text-dark bg-transparent"><span class="oi oi-chevron-left"></span> Cancelar</button></a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/info.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>

</html>