<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Fale Conosco']); ?>

<section class="contenedor-principal contacto">
    <div class="contenedor-secundario informacion padding padding-responsive">
        <div class="columnas columna-izquierda">
            <div class="titulo-general-morado-sin-margen"><h3>Endereço</h3></div>
            <p>Avenida Nossa Senhora da Luz,<br>
            Nº 2005 - Centro<br>
            Clevelândia/PR<br></p>
            <div class="titulo-general-morado-sin-margen"><h3>Telefone</h3></div>
            <span>(46) 3252-8350</span>
            <div class="titulo-general-morado-sin-margen"><h3>Email</h3></div>
                <a href="mailto:contato@siviero.com.br" style="color: #666666"><p>contato@siviero.com.br</p></a>
        </div>
        <div class="contenedor-formulario columna-derecha">
        <div class="titulo-general-morado-sin-margen"><h3>Endereço</h3></div>
            <?php echo do_shortcode('[contact-form-7 id="112" title="Formulario de contacto 1"]');?>
        </div>
    </div>

    
</section>



<?php get_footer(); ?>
 