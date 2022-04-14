<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siviero</title>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!--Meta datos de Wordpress-->
    <?php wp_head() ?>   
  
</head>
<body>
         <header>              
              <div>
                   <!-- Logo -->
                   <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_theme_file_uri() . "./assets/img/Logo.png" ?>" alt="Logo"></a>
                   
                   <?php wp_nav_menu('menuPrincipal'); ?>
                   
                   <div class="tempo" id="tempo">
                        <span class="previsao">Previsao do Tempo</span>
                        <span class="cidade" id="cidade">Francisco Beltrao</span>
                        <img src="<?php echo get_theme_file_uri() . "/assets/img/clima.png" ?>" alt="clima">
                        <span class="temperatura" id="temperatura">30º</span>
                   </div> 
              </div>
         </header>
