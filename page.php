<?php get_header(); ?>

	<?php while(have_posts()) {
        the_post(  ); ?>

        <section class="imagem-superior" style="background-image: url(<?php echo get_theme_file_uri('/assets/IMG/imagen-superior.png') ?>);">
            <div class="page-title"><h1><?php the_title(); ?></h1></div>
        </section>
		<div class="wrapper-content">
        <section class="nossa-historia">
            <?php the_content() ?>
        </section>
		</div>
        
    <?php } ?>
    
    <section class="orcamento">
        <button class="orcamento-boton">Solicite agora seu orcamento!</button>
    </section>
	</div>

<?php get_footer(); ?>
