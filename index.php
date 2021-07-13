<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

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
        <h3>K-BYTE STORE</h3>
        <hr>
        <p>Melhores Preços em PC Gamer, Placa de Video, Hardware, Processador AMD e Intel, Monte seu Computador Gamer Com a Melhor Entrega do Brasil.</p>
        <hr>

        <h3>PRODUTOS</h3>
        <hr>
        <div class="row placamae">
            <div class="col mb-4">
                <?php
                    $produto = '';
                    session_start();
                    $_SESSION['pId'] = $produto;
                ?>
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="0">
                    <img src="./img/placamae1.png" alt="Placa Mãe Asus TUF H310M-Plus Gaming, Chipset H310, Intel LGA 1151, mATX, DDR4" width="250px" />
                    <h6>Placa Mãe Asus TUF H310M-Plus Gaming, Chipset H310, Intel LGA 1151, mATX, DDR4</h6>
                    <p class="text">R$ <b>688,51</b></p>
                    
                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
            </div>
            <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="1">

                    <img src="./img/placamae2.png" alt="Placa Mãe Asus Rog Strix Z490-I Gaming Wi-fi, Chipset Z490, Intel LGA 1200, Mini-ITX, DDR4" width="250px" />
                    <h6>Placa Mãe Asus Rog Strix Z490-I Gaming Wi-fi, Chipset Z490, Intel LGA 1200, Mini-ITX, DDR4</h6>
                    <p class="text">R$ <b>2.747,00</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
            </div>
            <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="2">

                    <img src="./img/placamae3.jpg" alt="Placa Mãe ASRock B450M Steel Legend, Chipset B450, AMD AM4, mATX, DDR4" width="250px" />
                    <h6>Placa Mãe ASRock B450M Steel Legend, Chipset B450, AMD AM4, mATX, DDR4</h6>
                    <p class="text">R$ <b>918,39</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
            </div>
            <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="3">

                    <img src="./img/placamae4.png" alt="Placa Mãe ASUS ROG STRIX X570-F Gaming, Chipset X570, AMD AM4, ATX, DDR4, 90MB1160-M0EAY0" width="250px" />
                    <h6>Placa Mãe ASUS ROG STRIX X570-F Gaming, Chipset X570, AMD AM4, ATX, DDR4</h6>
                    <p class="text">R$ <b>2.948,28</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
            </div>
            <div class="row processa">
                <div class="col mb-4">
                    <form method="get" action="infoproduto.php">
                        <input type="hidden" name="pId" value="4">

                        <img src="./img/processa1.jpg" alt="Processador Intel Core i5 9400F 2.90GHz (4.10GHz Turbo), 9ª Geração, 6-Core 6-Thread, LGA 1151, BX80684I59400F, S/ Vídeo" width="250px" />
                        <h6>Processador Intel Core i5 9400F 2.90GHz (4.10GHz Turbo), 9ª Geração, 6-Core 6-Thread, LGA 1151</h6>
                        <p class="text">R$ <b>1.089,90</b></p>

                        <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                            <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                        </a>
                </form>
                </div>
                <div class="col mb-4">
                    <form method="get" action="infoproduto.php">
                        <input type="hidden" name="pId" value="5">

                        <img src="./img/processa2.jpg" alt="Processador Intel Core i7 11700K 3.6GHz (5.0GHz Turbo), 11ª Geração, 8-Cores 16-Threads, LGA 1200, BX8070811700K" width="250px" />
                        <h6>Processador Intel Core i7 11700K 3.6GHz (5.0GHz Turbo), 11ª Geração, 8-Cores 16-Threads, LGA 1200</h6>
                        <p class="text">R$ <b>3.217,24</b></p>

                        <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                            <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                        </a>
                </form>
                </div>
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="6">

                    <img src="./img/processa3.jpg" alt="Processador AMD Ryzen 5 3600x 3.8ghz (4.4ghz Turbo), 6-cores 12-threads, Cooler Wraith Spire, AM4, YD360XBBAFBOX, S/ Video" width="250px" />
                    <h6>Processador AMD Ryzen 5 3600x 3.8ghz (4.4ghz Turbo), 6-cores 12-threads, Cooler Wraith Spire, AM4</h6>
                    <p class="text">R$ <b>1.617,33</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
                <div class="col mb-4">
                    <form method="get" action="infoproduto.php">
                        <input type="hidden" name="pId" value="7">

                        <img src="./img/processa4.jpg" alt="Processador AMD Ryzen 7 5800X 3.8GHz (4.7GHz Turbo), 8-Cores 16-Threads, AM4, Sem Cooler" width="250px" />
                        <h6>Processador AMD Ryzen 7 5800X 3.8GHz (4.7GHz Turbo), 8-Cores 16-Threads, AM4, Sem Cooler</h6>
                        <p class="text">R$ <b>3.129,00</b></p>

                        <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                            <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                        </a>
                </form>
                </div>
            </div>
            <div class="row memoria">
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="8">

                    <img src="./img/memoria1.jpg" alt="Memória DDR4 Crucial Ballistix, 8GB, 2666MHz, Red, BL8G26C16U4R" width="250px" />
                    <h6>Memória DDR4 Crucial Ballistix, 8GB, 2666MHz, Red, BL8G26C16U4R</h6>
                    <p class="text">R$ <b>449,00</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="9">

                    <img src="./img/memoria2.jpg" alt="Memória DDR4 Corsair Vengeance LPX, 8GB 2666MHz, CMK8GX4M1A2666C16" width="250px" />
                    <h6>Memória DDR4 Corsair Vengeance LPX, 8GB 2666MHz, CMK8GX4M1A2666C16</h6>
                    <p class="text">R$ <b>319,00</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="10">

                    <img src="./img/memoria3.jpg" alt="Memória DDR4 Kingston HyperX Fury, 16GB 2666MHz, Black, HX426C16FB3/16" width="250px" />
                    <h6>Memória DDR4 Kingston HyperX Fury, 16GB 2666MHz, Black, HX426C16FB3/16</h6>
                    <p class="text">R$ <b>896,44</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="11">

                    <img src="./img/memoria4.png" alt="Memória DDR4 Corsair Dominator Platinum RGB, 32GB (4x8GB), 3600MHz, CMT32GX4M4C3600C18" width="250px" />
                    <h6>Memória DDR4 Corsair Dominator Platinum RGB, 32GB (4x8GB), 3600MHz, CMT32GX4M4C3600C18</h6>
                    <p class="text">R$ <b>2.907,93</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
            </div>
            <div class="row placav">
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="12">

                    <img src="./img/placav1.jpg" alt="Placa de Vídeo Asus GeForce TUF3 GTX 1660 OC, 6GB GDDR5, 192Bit, TUF3-GTX1660-O6G-GAMING" width="250px" />
                    <h6>Placa de Vídeo Asus GeForce TUF3 GTX 1660 OC, 6GB GDDR5, 192Bit, TUF3-GTX1660-O6G-GAMING</h6>
                    <p class="text">R$ <b>1.799,00</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
                <div class="col mb-4">
                <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="13">

                    <img src="./img/placav2.jpg" alt="Placa de Vídeo Zotac GeForce RTX 2070 Super Gaming Twin Fan, 8GB GDDR6, 256Bit" width="250px" />
                    <h6>Placa de Vídeo Zotac GeForce RTX 2070 Super Gaming Twin Fan, 8GB GDDR6, 256Bit</h6>
                    <p class="text">R$ <b>2.589,00</b></p>

                    <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                        <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                    </a>
                </form>
                </div>
                <div class="col mb-4">
                    <form method="get" action="infoproduto.php">
                    <input type="hidden" name="pId" value="14">

                        <img src="./img/placav3.png" alt="Placa de Vídeo Asus GeForce RTX 2060 Advanced EVO Dual, 6GB, GDDR6, 192bit, DUAL-RTX2060-A6G-EVO" width="250px" />
                        <h6>Placa de Vídeo Asus GeForce RTX 2060 Advanced EVO Dual, 6GB, GDDR6, 192bit</h6>
                        <p class="text">R$ <b>2.099,00</b></p>

                        <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                            <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                        </a>
                    </form>
                </div>
                <div class="col mb-4">
                    <form method="get" action="infoproduto.php">
                        <input type="hidden" name="pId" value="15">

                        <img src="./img/placav4.jpg" alt="Placa de Vídeo Asus, ROG Strix, Geforce RTX 3070 Ti, OC, 8GB, GDDR6, 256bit, LHR, 90YV0GW0-M0NA00" width="250px" />
                        <h6>Placa de Vídeo Asus, ROG Strix, Geforce RTX 3070 Ti, OC, 8GB, GDDR6, 256bit, LHR</h6>
                        <p class="text">R$ <b>9.299,00</b></p>

                        <a href="infoproduto.php?pId=<?php echo $produto?>" id="placamae1">
                            <button type="submit" class="btn btn-success bg-transparent text-success">Ver Mais</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>

</html>