<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/71d3d31d68.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--CSS boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <!-- Css personal -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body>


    <!--  MENU AVANZADO-->

    <?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-lightd-flex d-flex mb-3">

        <div class="logo p-2">
            <a href="<?php echo home_url() ?>"><?php echo $custom_logo ?></a>
        </div>

        <div class="unooo p-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon"></span>
            </button>

            <?php
	        wp_nav_menu( array(
	        'theme_location'  => 'menu',
	        'depth'           => 2,
	        'container'       => 'div',
	        'container_id'    => 'navbarSupportedContent',
	        'container_class' => 'collapse navbar-collapse',
	        'menu_class'      => 'nav navbar-nav ms-auto',
	        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	        'walker'          => new WP_Bootstrap_Navwalker()
	        ) );
        ?>
        </div>
        <div class="redes-1 ms-auto"> 
            <a target="_blank" href="https://www.instagram.com/kmy.stfu/" class="icon"><i class="fa-brands fa-square-instagram"></i></a>
            <a target="_blank" href="https://wa.me/56988354737" class="icon"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/camila-guerra-vidal-52587b223/" class="icon"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        
        

    </nav>
