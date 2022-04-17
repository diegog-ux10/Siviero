<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Galeria de eventos']); ?>
<section class="contenedor-principal">
    <div class="contenedor-secundario columnas padding">
        <div class="titulo-general-morado">
            <h2>Todos os Eventos</h2>
        </div>
        <div class="contenedor-galeria-home contenedor-de-eventos">
        <?php while(have_posts()):
            the_post(); ?>
            <div class="item-evento">                
                <a href="<?php the_permalink(); ?>">
                    <img src="<?= get_the_post_thumbnail_url(); ?>">
                </a>                
                <a href="<?php the_permalink(); ?>">
                    <p><?php the_title(); ?></p>
                </a>
                <small><?= get_field('fecha'); ?></small>
            </div>
        <?php endwhile; ?>  
        </div>
    </div>
</section>

<?php 

get_footer();

?>
 