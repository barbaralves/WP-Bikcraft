<?php
//Template Name: Produtos
get_header();
?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

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
    
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>