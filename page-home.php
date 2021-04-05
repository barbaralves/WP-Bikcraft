<?php
//Template Name: Home
get_header();
?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="introducao">
        <div class="container">
            <h1><?php the_field('titulo_introducao'); ?></h1>
            <blockquote class="quote-externo">
                <p><?php the_field('quote_introducao'); ?></p>
                <cite><?php the_field('citacao_introducao'); ?></cite>
            </blockquote>
            <a href="/sites/bikcraft/produtos" class="btn">Orçamento</a>
        </div>
    </section>
    <!-- Fim introdução -->

    <section class="produtos container">
        <h2 class="subtitulo">Produtos</h2>
        <ul class="produtos-lista">
            <li class="grid-1-3">
                <div class="produtos-icone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft Passeio">
                </div>
                <h3>Passeio</h3>
                <p>Muito melhor do que passear pela orla a vidros fechados.</p>
            </li>

            <li class="grid-1-3">
                <div class="produtos-icone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft Passeio">
                </div>
                <h3>Esporte</h3>
                <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
            </li>
        
            <li class="grid-1-3">
                <div class="produtos-icone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft Passeio">
                </div>
                <h3>Retro</h3>
                <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
            </li>
        </ul>

        <div class="call">
            <p><?php the_field('chamada_produtos'); ?></p>
            <a href="/sites/bikcraft/produtos/" class="btn btn-preto">Produtos</a>
        </div>
    </section>
    <!-- Fim dos produtos -->

    <section class="portfolio">
        <div class="container">
            <h2 class="subtitulo">Portfólio</h2>
            <?php include(TEMPLATEPATH . "/inc/cliente-portfolio.php"); ?>
            <div class="call">
                <p><?php the_field('chamada_portfolio'); ?></p>
                <a href="/sites/bikcraft/portfolio/" class="btn">Portfólio</a>
            </div>
        </div>
    </section>
    <!-- Fim portfoólio -->

    <section class="qualidade container">
        <h2 class="subtitulo">Qualidade</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft-qualidade.svg" alt="Bikcraft">
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

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>