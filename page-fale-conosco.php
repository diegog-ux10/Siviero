<?php get_template_part( 'template-parts/part', 'banner', ['title' => 'Fale Conosco']); ?>

<section class="contenedor-principal contacto">
    <div class="contenedor-secundario informacion">
        <div class="columnas columna-izquierda">
        <h2>Endereço</h2>
            <p>Rua Vicente Setembrino Balottin, Nº 64<br>
                Dist. Ind. Ulderico Sabadin - Bairro Padre Ulrico<br>
                CEP 85.604 - 446<br>
                Francisco Beltrão - PR</p>
            <h2>Telefone</h2>
                <span>46-3055-5882</span><span>46-3055-5832</span><span><a href="https://wa.link/mgxg8j" target="_blank">46 98801 2888</a></span>
            <h2>Email</h2>
                <a href="mailto:contato@vlcmetalurgica.com.br" style="color: #666666"><p>contato@vlcmetalurgica.com.br</p></a>
        </div>
    </div>

    <div class="contenedor-formulario">
    <h2>Formulário de Contato</h2>
    <?php echo do_shortcode('[contact-form-7 id="112" title="Formulario de contacto 1"]');?>
    </div>
</section>


<script src="<?php echo get_theme_file_uri(  ) . "/assets/js/forms.min.js" ?>"></script>
<?php get_footer(); ?>
 