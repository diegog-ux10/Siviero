<section class="banner" style="background-repeat:no-repeat; background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/Fondo.png"  ?>)">

<?php get_header();?>


    <div class="contenedor-secundario padding-responsive banner-titulo">
        <div class="titulo-general-blanco">        
            <h2>
            <?php 
                if($args["title"]):    
                    echo $args["title"];
                else:        
                    the_title();
                endif; 
            ?>
            </h2>
        </div>
    </div>



</section>