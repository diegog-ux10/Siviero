<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Galeria de Eventos']); ?>

<section class="contenedor-principal">
    <div class="contenedor-secundario padding columnas">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" style="color: purple">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_home_url() . "/eventos" ?>" style="color: purple">Galeria de Eventos</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
        <div class="titulo-general-morado">
            <h2><?php the_title(); ?></h2>
        </div>
        <a href="<?php echo get_the_post_thumbnail_url(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid" data-toggle="lightbox" data-gallery="example-gallery"></a>
        <?php 
            $images = get_field('galeria'); // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <ul class="contenedor-galeria">
                    <?php foreach( $images as $image_url ): ?>
                        <li class="imagen-galeria">
                            <a href="<?php echo $image_url  ?>" data-toggle="lightbox" data-gallery="example-gallery"><img src="<?php echo $image_url ?>" alt=""></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo get_home_url() . "/eventos" ?>">Galeria de Eventos</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ol>
            </nav>
    </div>
</section>


<?php get_footer(); ?>