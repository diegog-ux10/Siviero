<section class="main-content" style="background-repeat:no-repeat ;background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/Fondo.png"  ?>)">
<!-- Horientacionn vertival -->


<?php 

get_header();

?>

<div class="contenedor-1 padding-responsive">
    <!-- horientacion horizontal -->
    <h1>Há 30 anos, sempre o melhor negocio!</h1>
    <div class="cotizacion">
        <div class="contenedor-2">
            <h3>Cotação do Dia</h3>
            <span><?php echo date('d/m') ?></span>
        </div>
        <ul>
            
            <?php 
            
            $cotizaciones = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'cotizacion',
            ))

            ?>

            <?php while($cotizaciones->have_posts()):
                $cotizaciones->the_post(); ?>

                <li>
                    <p><?php the_title(); ?></p>
                    <span class="<?= get_field('cambio'); ?>"><?= "R$" . get_field('precio'); ?></span>
                    <small>Saca</small>
                </li>

            <?php endwhile; ?>
        </ul>
        
    </div>
</div>
</section>
<section class="contenedor-principal">

    <div class="contenedor-secundario parceiros-contenedor padding padding-responsive">
        <div class="titulo-general-morado">
           <h2 >Parceiros Siviero</h2>
         </div>
        <div class="padding-responsive parceiros"> 

            <?php 
            $images = get_field('parceiro', 'options');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <ul >
                    <?php foreach( $images as $image_id ): ?>
                        <li>
                            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="contenedor-principal eventos" style="background-repeat:no-repeat; background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/fondo-1.png"  ?>)">


    <div class="contenedor-secundario padding-responsive">
        <div class="titulo-general-blanco">
            <h2 >Galeria de Eventos</h2>
        </div>

        <?php get_template_part( 'template-parts/part', 'galeria'); ?>

        <a href="<?php echo get_home_url() . "/eventos" ?>" class="enlace"><button class="btn-green">Todos os eventos</button></a>  

    </div>
</section>

<section class="contenedor-principal ambiental">
    
    <img src="<?= get_theme_file_uri() . "/assets/img/arbol.png"?>" alt="">

    <div class="contenedor-secundario alinear-final padding padding-responsive">
        <div class="info">
            <div class="titulo-general-blanco-morado">
                <h2 >Responsabilidade Ambiental</h2>
            </div>
            <p><strong>Siviero Cereais e Insumos Agrícolas</strong> é uma empresa que se preocupa com a questão de proteção do meio ambiente. Por isso, através de toda a sua equipe técnica, que está em constante treinamento, busca orientar os empresários rurais acerca das melhores práticas agrícolas que conciliam a conservação do meio ambiente a uma boa produção que possibilite um bom retorno econômico, ou seja, estimulando o desenvolvimento sustentável.<br><br>      

            Há também grande preocupação em orientar o empresário rural acerca do uso dos equipamentos para o manejo de produtos agrotóxicos e o cuidado com o recolhimento das embalagens dando uma destinação às mesmas conforme calendário e pontos de coleta determinados pela <strong>ARIAS (Associação de Revendas de Insumos Agrícolas do Sudoeste do Paraná).</strong></p>
            <a download="Calendário de coletaS 2022.pdf" href="http://localhost/wordpress/wp-content/uploads/2022/04/858679904884.pdf" target="_blank"><button class="btn-purple" >Calendário de coletaS 2022</button></a>
        </div>
    </div>

</section>





<?php 

get_footer();

?>
 