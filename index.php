<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

<article>
    <section class="introducao-interna introducao-geral">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="container conteudo-geral fadeInDown" data-anime="800">
        <div class="grid-8">
            <?php the_content(); ?>
        </div>
    </section>
</article>

<?php endwhile; else: ?>

    <section class="introducao-interna introducao-geral">
        <div class="container fadeInDown" data-anime="800">
            <h1>Página não encontrada.</h1>
        </div>
    </section>

<?php endif; ?>

<?php get_footer(); ?>