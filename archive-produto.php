<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Nosso Produtos']); ?>

<section class="contenedor-principal">
    <div class="contenedor-secundario padding padding-responsive">
        <div class="produtos-contenedor">
            <?php while(have_posts()): the_post(); ?>
                <div class="produto-item">
                    <div class="titulo-general-morado"><h2><?= the_title(); ?></h2></div>
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>



<?php 

get_footer();

?>
 