<?php get_header(); ?>

<main>
    <section class="slider" style="background-image: url(<?php echo get_theme_file_uri('/assets/Slider.png') ?>);">
        <div class="slider-recipiente recipiente">
            <img src="./assets/flecha-izquierda.png" clase="slider-flecha" id="antes">
            <img src="./assets/flecha-derecha.png" clase="slider-flecha" id="despues">
            
            <section class="slider-cuerpo slider-cuerpo-mostrar" data-id="1">
                <img src="./assets/Slider.png" alt="imagen" class="slider-img">
            </section>

            <section class="slider-cuerpo" data-id="2">
                <img src="./assets/Slider.png" alt="imagen">
            </section>

            <section class="slider-cuerpo" data-id="3">
                <img src="./assets/Slider.png" alt="imagen">
            </section>           

        </div>
    </section>
    <section class="produtos-destaque">
        <h2 class="subtitulos">Produtos em Destaque</h2>
        <div class="recipiente-produto">
            <div class="produto-des">
                <img src="<?php echo get_theme_file_uri( '/assets/pro-01.png' ) ?>" alt="">
                <p>Ralo de alto escoamento em aço Tamanho 60x60cm</p>
                <a href="">VER PRODUTO</a>
            </div>
            <div class="produto-des">
                <img src="<?php echo get_theme_file_uri( '/assets/pro-02.png' ) ?>" alt="">
                <p>Esteira para Silo em Aço Inox Tamanho sob encomenda</p>
                <a href="">VER PRODUTO</a>
            </div>
            <div class="produto-des">
                <img src="<?php echo get_theme_file_uri( '/assets/pro-01.png' ) ?>" alt="">
                <p>Ralo de alto escoamento em aço Tamanho 60x60cm</p>
                <a href="">VER PRODUTO</a>
            </div>
            <div class="produto-des">
                <img src="<?php echo get_theme_file_uri( '/assets/pro-02.png' ) ?>" alt="">
                <p>Esteira para Silo em Aço Inox Tamanho sob encomenda</p>
                <a href="">VER PRODUTO</a>
            </div>
        </div>
    </section>
    <section class="servico">
        <h2 class="subtitulos">Nossa Máquinas</h2>
        <div class="recipiente-servico">
            <img src="<?php echo get_theme_file_uri( '/assets/pro-02.png' ) ?>" alt="">
            <div class="recipiente-text">
                <h3>Nome do Serviço</h3>
                <p>Descrição do Serviço</p>
            </div>
        </div>
    </section>
    <section class="orcamento">
        <button class="orcamento-boton">Solicite agora seu orcamento!</button>
    </section>
</main>

<?php get_footer(); ?>
