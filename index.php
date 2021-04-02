<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bikcraft - Bicicletas Personalizadas</title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
    
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Bikcraft - Bicicletas Personalizadas"/>
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
    <meta property="og:url" content="http://bikcraft.com"/>
    <meta property="og:image" content="http://bikcraft.com/img/og-image.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    
    <link rel="stylesheet" href="css/style.css">
    <script>
        document.documentElement.classList.add("js");
    </script>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.html" class="grid-4">
                <img src="img/bikcraft.svg" alt="Bikcraft">
            </a>
            <nav class="grid-12 header_menu">
                <ul>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="produtos.html">Produtos</a></li>
                    <li><a href="portfolio.html">Portfólio</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="introducao">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
            <blockquote data-anime="800" class="fadeInDown quote-externo">
                <p>"não tenha nada em sua casa que você considere útil ou acredita ser bonito"</p>
                <cite>WILLIAM MORRIS</cite>
            </blockquote>
            <a data-anime="1200" href="produtos.html" class="btn">Orçamento</a>
        </div>
    </section>
    <!-- Fim introdução -->

    <section class="produtos container fadeInDown" data-anime="1600">
        <h2 class="subtitulo">Produtos</h2>
        <ul class="produtos-lista">
            <li class="grid-1-3">
                <div class="produtos-icone">
                    <img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
                </div>
                <h3>Passeio</h3>
                <p>Muito melhor do que passear pela orla a vidros fechados.</p>
            </li>

            <li class="grid-1-3">
                <div class="produtos-icone">
                    <img src="img/produtos/esporte.svg" alt="Bikcraft Passeio">
                </div>
                <h3>Esporte</h3>
                <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
            </li>
        
            <li class="grid-1-3">
                <div class="produtos-icone">
                    <img src="img/produtos/retro.svg" alt="Bikcraft Passeio">
                </div>
                <h3>Retro</h3>
                <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
            </li>
        </ul>

        <div class="call">
            <p>Clique aqui e veja os detalhes dos produtos</p>
            <a href="produtos.html" class="btn btn-preto">Produtos</a>
        </div>
    </section>
    <!-- Fim dos produtos -->

    <section class="portfolio">
        <div class="container">
            <h2 class="subtitulo">Portfólio</h2>
            <ul class="portfolio-lista">
                <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
            </ul>
            <div class="call">
                <p>Conheça mais o nosso portfólio</p>
                <a href="portfolio.html" class="btn">Portfólio</a>
            </div>
        </div>
    </section>
    <!-- Fim portfoólio -->

    <section class="qualidade container">
        <h2 class="subtitulo">Qualidade</h2>
        <img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
        <ul class="qualidade-lista">
            <li class="grid-1-3">
                <h3>Durabilidade</h3>
                <p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
            </li>
            <li class="grid-1-3">
                <h3>Design</h3>
                <p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
            </li>
            <li class="grid-1-3">
                <h3>Sustentabilidade</h3>
                <p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
            </li>
        </ul>
        <div class="call">
            <p>Conheça mais a nossa história</p>
            <a href="sobre.html" class="btn btn-preto">Sobre</a>
        </div>
    </section>
    <!-- Fim qualidade -->

    <div class="quebra">
        <blockquote class="quote-externo container">
            <p>"O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."</p>
            <cite>WILLIAM MORRIS</cite>
        </blockquote>
    </div>

    <footer>
        <div class="footer">
            <div class="container">
                <div class="grid-8 footer-historia">
                    <h3>Nossa História</h3>
                    <p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa.</p>    
                </div>
                <div class="grid-4 footer-contato">
                    <h3>Contato</h3>
                    <ul>
                        <li>- 21 23232-4343</li>
                        <li>- contato@bikcraft.com</li>
                        <li>- Botafogo - RJ</li>
                    </ul>
                </div>
                <div class="grid-4 footer-rede">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="Facebook Bikcraft"></a></li>
                        <li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt="Instagram Bikcraft"></a></li>
                        <li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt="Twitter Bikcraft"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Fim informações da loja -->

        <div class="copy">
            <div class="container">
                <p class="grid-16">Bikcraft 2021 - Alguns direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="./js/simple-anime.js"></script>
    <script src="./js/script.js"></script>
    
</body>
</html>