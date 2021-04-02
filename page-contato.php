<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bikcraft - Contato - 21 23232-4343</title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
    
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Bikcraft - Contato - 21 23232-4343"/>
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
    <meta property="og:url" content="http://bikcraft.com/contato.html"/>
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
                    <li><a href="contato.html" class="menu-ativo">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="introducao-interna interna-contato">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown">Contato</h1>
            <p data-anime="800" class="fadeInDown">Tire suas dúvidas com a gente</p>
        </div>
    </section>
    <!-- Fim introdução -->

    <section class="contato container fadeInDown" data-anime="1200"> 
        <form id="form-orcamento" method="POST" action="./enviar.php" class="contato-form grid-8 formphp">
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
            <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
        </form>
        <div class="contato-dados grid-8">
            <h3>Dados</h3>
            <span>+55 21 93223 3232</span>
            <span>contato@bikcraft.com</span>
            <span>Rua Ali Perto - Botafogo</span>
            <span>Rio de Janeiro - RJ - Brasil</span>
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt=""></a></li>
                <li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt=""></a></li>
                <li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt=""></a></li>
            </ul>
        </div>
    </section>
    <!-- Fim contatos -->

    <section class="container contato-mapa">
        <a href="http://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
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