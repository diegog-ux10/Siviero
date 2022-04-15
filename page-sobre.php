<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Sobre nós']); ?>

<section class="contenedor-principal">
    <div class="contenedor-secundario columnas padding">
        <div class="titulo-general-morado"><h2>A empresa</h2></div>
        <p class="texto-parrafo">Siviero Cereais e Insumos Agrícolas é uma empresa que busca o constante aperfeiçoamento de suas técnicas para melhor atender o seu cliente. Com 30 anos no mercado está sempre atenta às últimas tendências do mercado oferecendo aos seus parceiros (produtores) sempre o melhor negócio, serviços e produtos .


       <br><br>A empresa está expandindo suas atividades para as principais cidades do Sudoeste do Paraná e agora também para a região Oeste Catarinense, especificamente São Domingos, Galvão, Jupia, Abelardo Luz, Água Doce.


       <br><br>O principal motivo para conquistarmos clientes é que a empresa Siviero Cereais e Insumos Agricolas, além de estar em constante aperfeiçoamento, proporciona ao seu cliente comodidade, economia e segurança, aumentando cada vez mais os ganhos do produtor rural. A confiança adquirida ao longo dos anos junto aos seus clientes é fruto de um trabalho sério, inovador e de credibilidade dos serviços prestados.</p>

        <video src="https://www.youtube.com/watch?v=cAutVjryE6kk"></video>

    </div>

</section>

<section class="contenedor-principal">
    <div class="contenedor-secundario columnas padding">
        <div class="titulo-general-morado"><h2>Infra estrutura</h2></div>
        <p class="texto-parrafo">A empresa, cuja matriz está no município de Clevelândia, possui silos para armazenagem de cereais, moegas para descarga, equipadas com tombador hidráulico, armazéns para a armazenagem de cereais e fertilizantes, entre outros produtos comercializados.


        <br><br>Possui também barracão próprio para a armazenagem de insumos, escritório, balança e uma sede esportiva, visando uma melhor integração com os clientes e colaboradores.


        <br><br>A Siviero conta com uma unidade no município de Palmas, com ampla estrutura para armazenagem e recebimento de cereais, sede esportiva dentre outros, além de uma unidade de recebimento no município de Mariópolis, com escritório, moegas, sendo uma equipada com tombador hidráulico, silos, barracão para armazenagem de insumos e cereais.


        <br><br>Buscando ampliar seus negócios, recentemente inaugurou mais uma filial no município de São Domingos estado de Santa Catarina, atuando na comercialização de insumos.</p>
        

    </div>

</section>

<section class="contenedor-principal">
    <div class="contenedor-secundario columnas padding">
        <div class="titulo-general-morado"><h2>Área de Atuação</h2></div>
        <p class="texto-parrafo">A empresa atua na região sudoeste do Paraná e oeste Catarinense, mais precisadamente nos municípios de Clevelândia, Mariópolis, Honório Serpa, Palmas e Mangueirinha, todas no estado do Paraná. Também atua nos municípios de São Domingos, Ipuaçu, Bom Jesus, Ouro Verde, Abelardo Luz, Galvão e Jupiá, Água Doce, no estado de Santa Catarina.</p>

    </div>

</section>

<section class="contenedor-principal">

<?php
    //Corregir por el correspondiente
    $today = date('dmy');
    $unidades = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'event',
        'meta_key' => 'evento_home',
        'meta_value' => true,
    ))
?>  

    <div class="contenedor-secundario padding columnas">

    <div class="titulo-general-morado"><h2>Unidades</h2></div>

        <div class="contenedor-galeria-home">
            <?php while($unidades->have_posts()):
            $unidades->the_post(); ?>

                <div class="item-evento">                
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?= get_the_post_thumbnail_url(); ?>">
                    </a>                
                    <a href="<?php the_permalink(); ?>">
                        <p><?php the_title(); ?></p>
                    </a>
                    <small style="color: #666666;"><?= get_field('fecha'); ?></small>
                </div>
            <?php endwhile; ?>                   
        </div>    

    </div>   

</section>



<?php get_footer(); ?>
 