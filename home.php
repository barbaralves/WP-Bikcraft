<?php get_header(); ?>

<section class="introducao-interna introducao-blog">
    <div class="container">
        <h1 data-anime="400" class="fadeInDown">Blog</h1>
        <p data-anime="800" class="fadeInDown">As principais notícias sobre Bicicletas</p>
    </div>
</section>

<div class="container blog-container">
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="grid-16 blog-post fadeInDown" data-anime="1200">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </article>

    <?php endwhile; ?>

        <div class="nav-blog grid-16 fadeInDown" data-anime="1600">
            <?php next_posts_link('← Posts Antigos'); ?>
            <?php previous_posts_link('Posts Novos →'); ?>
        </div>

    <?php else: endif; ?>
</div>

<?php get_footer(); ?> 