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
        </div>
    </section>
    <!-- Fim portfoólio -->

    <?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
    <!-- Fim qualidade -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>