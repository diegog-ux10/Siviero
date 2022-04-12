<section class="main-content" style="background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/Fondo.png"  ?>)">
<!-- Horientacionn vertival -->


<?php 

get_header();

?>

<div class="contenedor-1">
    <!-- horientacion horizontal -->
    <h1>Há 30 anos, sempre o melhor negocio!</h1>
    <div id="cotizacion">
        <div class="contenedor-2">
            <h3>Cotação do Dia</h3>
            <span>09/03</span>
        </div>
        <ul>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
            <li><p>Soja Comercial</p><span>R$195,00</span><small>Saca</small></li>
        </ul>
        
    </div>
</div>
</section>
<section class="contenedor-principal">
    <div class="contenedor-secundario parceiros-contenedor">
       <div class="titulo-general-morado"><h2 >Parceiros Siviero</h2></div>
        <div>
            <div>
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt=""><img src="" alt="">
            </div>
            <div>
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt="">
                <img src="<?php echo get_theme_file_uri() . "/assets/img/parceiros.png" ?>" alt=""><img src="" alt="">
            </div>
        </div>
    </div>
</section>

<section class="contenedor-principal eventos" style="background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/fondo-1.png"  ?>)">

<!-- Eventos Query -->


    <div class="contenedor-secundario">
        <div class="titulo-general-blanco">
            <h2 >Galeria de Eventos</h2>
        </div>

        <?php get_template_part( 'template-parts/part', 'galeria'); ?>

        <button class="btn-green">Todos os eventos</button>            
    </div>
</section>




<?php 

get_footer();

?>
 