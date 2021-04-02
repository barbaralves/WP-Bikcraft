<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bikcraft - Conheça as linhas Passeio, Retrô e Esporte</title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
    
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Bikcraft - Conheça as linhas Passeio, Retrô e Esporte"/>
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
    <meta property="og:url" content="http://bikcraft.com/produtos.html"/>
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
                    <li><a href="produtos.html" class="menu-ativo">Produtos</a></li>
                    <li><a href="portfolio.html">Portfólio</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="introducao-interna interna-produtos">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown">Produtos</h1>
            <p data-anime="800" class="fadeInDown">Conheça todos os nossos produtos</p>
        </div>
    </section>
    <!-- Fim introdução -->

    <section class="container produto-item fadeInDown" data-anime="1200">
        <div class="grid-11">
            <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
            <h2>Passeio</h2>
        </div>
        <div class="grid-5 produto-icone">
            <img src="img/produtos/passeio.svg" alt="Icone Passeio">
        </div>
        <div class="grid-8">
            <img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
        </div>
        <div class="grid-8 produto-info">
            <p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
            <ul>
                <li>Conforto</li>
                <li>Praticidade</li>
                <li>Design</li>
                <li>Versatilidade</li>
            </ul>
        </div>
    </section>
    <!-- Fim passeio -->

    <section class="container produto-item">
        <div class="grid-11">
            <img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
            <h2>Esporte</h2>
        </div>
        <div class="grid-5 produto-icone">
            <img src="img/produtos/esporte.svg" alt="Icone Esporte">
        </div>
        <div class="grid-8">
            <img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte">
        </div>
        <div class="grid-8 produto-info">
            <p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desempenho supera qualquer uma da categoria.</p>
            <ul>
                <li>Precisão</li>
                <li>Velocidade</li>
                <li>Design</li>
                <li>Versatilidade</li>
            </ul>
        </div>
    </section>

    <section class="container produto-item">
        <div class="grid-11">
            <img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retro">
            <h2>Retro</h2>
        </div>
        <div class="grid-5 produto-icone">
            <img src="img/produtos/retro.svg" alt="Icone Retro">
        </div>
        <div class="grid-8">
            <img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retro">
        </div>
        <div class="grid-8 produto-info">
            <p>O passado volta para lembrarmos o que devemos fazer no futuro. A Bikcraft Retrô é uma bicicleta estiloza, feita para você que gosta do clássico, mas que não abre mão do conforto.</p>
            <ul>
                <li>Conforto</li>
                <li>Velocidade</li>
                <li>Design</li>
                <li>Versatilidade</li>
            </ul>
        </div>
    </section>

    <section class="orcamento">
        <div class="container">
            <h2 class="subtitulo">Orçamento</h2>
            <form id="form-orcamento" method="POST" action="./enviar.php" class="form grid-8 formphp">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone">

                <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                <input type="text" class="nao-aparece" name="leaveblank">
                <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                <input type="text" class="nao-aparece" name="dontchange" value="http://">

                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
                <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
            </form>
            <div class="orcamento-dados grid-8">
                <h3>Dados</h3>
                <span>+55 21 93223 3232</span>
                <span>orcamento@bikcraft.com</span>
                <h3>Monte a sua Bikcraft</h3>
                <p>Escolha as especificações:</p>
                <ul>
                    <li>- Cores</li>
                    <li>- Estilo</li>
                    <li>- Medidas</li>
                    <li>- Acessórios</li>
                    <li>- E Outros</li>
                </ul>
            </div>
        </div>
    </section>

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
    <script src="./js/simple-form.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>