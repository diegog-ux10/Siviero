<?php
    //Query para retornar solo los Eventos que tenga seleccionada la opcion de mostrar em home
    $today = date('dmy');
    $eventos = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'event',
        'meta_key' => 'evento_home',
        'meta_value' => true,
    ))
?>


<div class="contenedor-galeria-home">
    <?php while($eventos->have_posts()):
    $eventos->the_post(); ?>

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