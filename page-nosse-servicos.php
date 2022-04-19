<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Nossos serviços']); ?>

<section class="contenedor-principal padding">
    <div class="contenedor-secundario servicio padding-responsive">
        <div class="columnas">
            <div class="titulo-general-morado"><h2>Armazenagem</h2></div>
            <p class="texto-parrafo">Preocupada com a qualidade dos produtos fez com que a empresa investisse ano a ano no desenvolvimento de soluções para a armazenagem possuindo todos os seus armazéns em condições de prestar um excelente serviço para a manutenção da qualidade do produto, inclusive prestando serviço para o Governo Federal.</p>
        </div>
        <img src="<?php echo get_theme_file_uri() . "/assets/img/servico01.png" ?>" alt="" class="img-fluid">
    </div>
</section>
<section class="contenedor-principal padding">
    <div class="contenedor-secundario servicio padding-responsive">
        <div class="columnas">
            <div class="titulo-general-morado"><h2>Assitência Técnica</h2></div>
            <p class="texto-parrafo">Disponibilizamos de profissionais capacitados para dar toda a assistência aos seus clientes, informações sobre o mercado, recomendações de cultivo e técnicas de manejo.
                
            <br><br>Os engenheiros agrônomos e técnicos agrícolas orientam e acompanham os clientes na coleta de análise de solo, orientam quanto à maneira mais correta de adubação e aplicação de defensivos. Este contato próximo com os clientes contribui de forma quantitativa e qualitativa no aumento da produção.</p>
        </div>
        <img src="<?php echo get_theme_file_uri() . "/assets/img/servico02.png" ?>" alt="">
    </div>
</section>

<?php 

get_footer();

?>
 