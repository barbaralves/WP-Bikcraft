<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bikcraft - Conheça o portfólio de clientes</title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
    
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Bikcraft - Conheça o portfólio de clientes"/>
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
    <meta property="og:url" content="http://bikcraft.com/portfolio.html"/>
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
                    <li><a href="portfolio.html" class="menu-ativo">Portfólio</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="introducao-interna interna-portfolio">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown">Portfólio</h1>
            <p data-anime="800" class="fadeInDown">Conheça os projetos que amamos mostrar</p>
        </div>
    </section>
    <!-- Fim introdução -->

    <section class="container fadeInDown" data-slide="quote" data-anime="1200">
        <blockquote class="quote-cliente">
            <p>"Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo."</p>
            <cite>Barbara Moss</cite>
        </blockquote>
        <blockquote class="quote-cliente">
            <p>"Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição."</p>
            <cite>Jhony Rato</cite>
        </blockquote>
        <blockquote class="quote-cliente">
            <p>"Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental. Nunca vida nada igual."</p>
            <cite>Bernardo</cite>
        </blockquote>
    </section>

    <section class="portfolio">
        <div class="container" data-slide="portfolio">
            <ul class="portfolio-lista">
                <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
            </ul>
            <ul class="portfolio-lista">
                <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
            </ul>
        </div>
    </section>
    <!-- Fim portfoólio -->

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
                        <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="Faceboook Bikcraft"></a></li>
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
    <script src="./js/simple-slide.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>