<section class="main-content" style="background-repeat:no-repeat ;background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/Fondo.png"  ?>)">
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
    <div class="contenedor-secundario parceiros-contenedor padding">
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

<section class="contenedor-principal eventos" style="background-repeat:no-repeat; background-image: url(<?php echo get_theme_file_uri( ) . "/assets/img/fondo-1.png"  ?>)">


    <div class="contenedor-secundario">
        <div class="titulo-general-blanco">
            <h2 >Galeria de Eventos</h2>
        </div>

        <?php get_template_part( 'template-parts/part', 'galeria'); ?>

        <button class="btn-green">Todos os eventos</button>  

    </div>
</section>

<section class="contenedor-principal ambiental">
    
    <img src="<?= get_theme_file_uri() . "/assets/img/arbol.png"?>" alt="">

    <div class="contenedor-secundario alinear-final padding">
        <div class="info">
            <div class="titulo-general-blanco-morado">
                <h2 >Responsabilidade Ambiental</h2>
            </div>
            <p><strong>Siviero Cereais e Insumos Agrícolas</strong> é uma empresa que se preocupa com a questão de proteção do meio ambiente. Por isso, através de toda a sua equipe técnica, que está em constante treinamento, busca orientar os empresários rurais acerca das melhores práticas agrícolas que conciliam a conservação do meio ambiente a uma boa produção que possibilite um bom retorno econômico, ou seja, estimulando o desenvolvimento sustentável.<br><br>      

            Há também grande preocupação em orientar o empresário rural acerca do uso dos equipamentos para o manejo de produtos agrotóxicos e o cuidado com o recolhimento das embalagens dando uma destinação às mesmas conforme calendário e pontos de coleta determinados pela <strong>ARIAS (Associação de Revendas de Insumos Agrícolas do Sudoeste do Paraná).</strong></p>
            <button class="btn-purple">Calendário de coletaS 2022</button>
        </div>
    </div>

</section>




<?php 

get_footer();

?>
 