var nomes = [
    "Placa Mãe Asus TUF H310M-Plus Gaming, Chipset H310, Intel LGA 1151, mATX, DDR4", // [0]
    "Placa Mãe Asus Rog Strix Z490-I Gaming Wi-fi, Chipset Z490, Intel LGA 1200, Mini-ITX, DDR4", // [1]
    "Placa Mãe ASRock B450M Steel Legend, Chipset B450, AMD AM4, mATX, DDR4", // [2]
    "Placa Mãe ASUS ROG STRIX X570-F Gaming, Chipset X570, AMD AM4, ATX, DDR4, 90MB1160-M0EAY0", // [3]
    "Processador Intel Core i5 9400F 2.90GHz (4.10GHz Turbo), 9ª Geração, 6-Core 6-Thread, LGA 1151, BX80684I59400F, S/ Vídeo", // [4]
    "Processador Intel Core i7 11700K 3.6GHz (5.0GHz Turbo), 11ª Geração, 8-Cores 16-Threads, LGA 1200, BX8070811700K",   // [5]
    "Processador AMD Ryzen 5 3600x 3.8ghz (4.4ghz Turbo), 6-cores 12-threads, Cooler Wraith Spire, AM4, YD360XBBAFBOX, S/ Video", // [6]
    "Processador AMD Ryzen 7 5800X 3.8GHz (4.7GHz Turbo), 8-Cores 16-Threads, AM4, Sem Cooler", // [7]
    "Memória DDR4 Crucial Ballistix, 8GB, 2666MHz, Red, BL8G26C16U4R", // [8]
    "Memória DDR4 Corsair Vengeance LPX, 8GB 2666MHz, CMK8GX4M1A2666C16", // [9]
    "Memória DDR4 Kingston HyperX Fury, 16GB 2666MHz, Black, HX426C16FB3/16", // [10]
    "Memória DDR4 Corsair Dominator Platinum RGB, 32GB (4x8GB), 3600MHz, CMT32GX4M4C3600C18", // [11]
    "Placa de Vídeo Asus GeForce TUF3 GTX 1660 OC, 6GB GDDR5, 192Bit, TUF3-GTX1660-O6G-GAMING", // [12]
    "Placa de Vídeo Zotac GeForce RTX 2070 Super Gaming Twin Fan, 8GB GDDR6, 256Bit", // [13]
    "Placa de Vídeo Asus GeForce RTX 2060 Advanced EVO Dual, 6GB, GDDR6, 192bit, DUAL-RTX2060-A6G-EVO", // [14]
    "Placa de Vídeo Asus, ROG Strix, Geforce RTX 3070 Ti, OC, 8GB, GDDR6, 256bit, LHR, 90YV0GW0-M0NA00", // [15]
]
var precos = [
    "R$ 688,51",   // [0]
    "R$ 2.747,00", // [1]
    "R$ 918,39",   // [2]
    "R$ 2.948,28", // [3]
    "R$ 1.089,90", // [4]
    "R$ 3.217,24", // [5]
    "R$ 1.617,33", // [6]
    "R$ 3.129,00", // [7]
    "R$ 449,00",   // [8]
    "R$ 319,00",   // [9]
    "R$ 896,44",   // [10]
    "R$ 2.907,93", // [11]
    "R$ 1.799,00", // [12]
    "R$ 2.589,00", // [13]
    "R$ 2.099,00", // [14]
    "R$ 9.299,00"  // [15]
]
var descricoes = [
    "As placas-mãe da TUF Gaming são especialmente projetadas e testadas para sobreviver e prosperar em condições em que outras placas teriam dificuldades. Projetadas com componentes de alta durabilidade, essas placas-mãe oferecem estabilidade inabalável para longas sessões de jogos.",   // [0]
    "A ROG Strix Z490-I Gaming ajuda você a tirar o máximo proveito de sua construção de jogos com fornecimento de energia classificado e refrigeração otimizada. Os controles inteligentes permitem gerenciar facilmente as configurações de overclocking, refrigeração e rede, fornecendo tudo o que você precisa para aproveitar todo o potencial de sua compilação para obter um desempenho de jogo de primeira linha.", // [1]
    "Placas-mãe de Steel Legend oferecem um desempenho estonteante e estética superior para comandar sua própria maneira de iluminação RGB e com um controle muito abrangente para executar os LEDs RGB Embutidos.",   // [2]
    "A placa-mãe ROG Strix X570-F Gaming oferece a experiência ROG quintessencial com uma combinação atraente de recursos, opções de resfriamento abrangentes e estilo inegável que fornecem a base ideal para a construção de um poderoso sistema de jogos ATX. Rematado com uma nova estética de design futurista com iluminação RGB integrada e um padrão de texto cibernético, ROG Strix X570-F Gaming equipa você com tudo que você precisa para construir uma arma formidável para se destacar do resto.", // [3]
    "A tecnologia Intel® Turbo Boost aumenta dinamicamente a frequência do processador conforme necessário ao desfrutar de expansão térmica e de energia para fornecer um aumento de velocidade quando necessário, além de mais eficiência de energia quando você não precisa.", // [4]
    "Os processadores para desktop Intel® Core™ da 11ª Geração reimaginam o desempenho e o ajuste para jogabilidade de elite com uma nova arquitetura de CPU, aceleração baseada em IA, recursos de overclock aprimorados, 1 velocidades de memória de até DDR4-3200, 20 vias de PCIe 4.0 para CPU e muito mais.", // [5]
    "Velocidades mais elevadas, mais memória e largura de banda mais ampla do que as gerações anteriores. Processadores AMD Ryzen™ de 3ª geração com núcleo “Zen 2” de 7 nm² define o padrão para alto desempenho: tecnologia de fabricação exclusiva, histórico de produtividade no chip e desempenho global revolucionário para jogos.", // [6]
    "O Ryzen 7 5800X conta com 8 núcleos otimizados para plataformas de jogos de alto FPS. Os processadores AMD Ryzen série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.", // [7]
    "A memória essencial dos jogos Ballistix foi projetada para overclocking de alto desempenho e é ideal para jogadores e entusiastas de desempenho que buscam ir além dos limites padrão.",   // [8]
    "A memória VENGEANCE LPX foi projetada para overclocking de alto desempenho. O dissipador de calor é feito de alumínio puro para dissipação de calor mais rápida e o PCB com oito camadas ajuda a controlar o calor e fornece folga para overclocking superior.",   // [9]
    "Uma memória de última geração, é assim que podemos definir as novas HyperX FURY DDR4. Com uma velocidade incrível e um novo dissipador atualizado, com certeza o gamer irá sempre performar em alto nível. A nova família HyperX Fury DDR4 é compatível com as mais recentes CPUs Intel e AMD.",   // [10]
    "O Coroamento de 25 Anos desenvolvendo memórias de classe mundial, Há bastante tempo, a CORSAIR DOMINATOR é sinônimo de memória premium de alto desempenho. Todo esse legado e experiência resultou na memória DDR4 mais avançada que já desenvolvemos.", // [11]
    "A GeForce® GTX 1660 é construída com o desempenho gráfico inovador da premiada arquitetura NVIDIA Turing ™. Transmita o seu jogo com o codificador de hardware dedicado da GTX 1660 que é otimizado para o software Open Broadcaster (OBS).", // [12]
    "A GeForce® RTX 2070 SUPER™ é equipada com tecnologia da premiada arquitetura NVIDIA Turing™ e tem uma GPU super-rápida com mais cores e clocks para liberar sua produtividade criativa e domínio dos games. Chegou a hora de se equipar com superpoderes.", // [13]
    "Oferecendo a mais recente experiência de jogo NVIDIA Turing™ em sua forma mais pura, a ASUS Dual GeForce RTX ™ 2060 EVO combina desempenho e simplicidade como nenhuma outra. Aproveitando as tecnologias avançadas de refrigeração derivadas de placas de vídeo STRIX, a ASUS Dual GeForce® RTX 2060 opta pela qualidade sobre o estilo, a escolha perfeita para uma construção bem balanceada.", // [14]
    "NVIDIA Ampere Streaming Multiprocessors: Base de construção para a GPU mais rápida e eficiente do mundo, o totalmente novo Ampere SM traz duas vezes a taxa de transferência FP32 e maior eficiência de energia."  // [15]
]
var images = [
"<img src='./img/placamae1.png' id='imagem' width='500px' />", // [0]
"<img src='./img/placamae2.png' id='imagem' width='500px' />", // [1]
"<img src='./img/placamae3.jpg' id='imagem' width='500px' />", // [2]
"<img src='./img/placamae4.png' id='imagem' width='500px' />", // [3]
"<img src='./img/processa1.jpg' id='imagem' width='500px' />", // [4]
"<img src='./img/processa2.jpg' id='imagem' width='500px' />", // [5]
"<img src='./img/processa3.jpg' id='imagem' width='500px' />", // [6]
"<img src='./img/processa4.jpg' id='imagem' width='500px' />", // [7]
"<img src='./img/memoria1.jpg'  id='imagem' width='500px' />",  // [8]
"<img src='./img/memoria2.jpg'  id='imagem' width='500px' />",  // [9]
"<img src='./img/memoria3.jpg'  id='imagem' width='500px' />",  // [10]
"<img src='./img/memoria4.png'  id='imagem' width='500px' />",  // [11]
"<img src='./img/placav1.jpg'   id='imagem' width='500px' />",   // [12]
"<img src='./img/placav2.jpg'   id='imagem' width='500px' />",   // [13]
"<img src='./img/placav3.png'   id='imagem' width='500px' />",   // [14]
"<img src='./img/placav4.jpg'   id='imagem' width='500px' />"    // [15]
]

document.getElementById("imagem").innerHTML = images[x];
document.getElementById("nome").innerHTML = nomes[x];
document.getElementById("descricao").innerHTML = descricoes[x];
document.getElementById("precos").innerHTML = precos[x];