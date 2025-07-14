<?php get_header(); ?>

<div class="fondo-1">
    <div class="container-md container-1">
        <div class="row align-items-center">

            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=intro&showposts=1"); ?>
            <?php while (have_posts()) : the_post(); ?>
    
            <div class="col-6 intro-arriba">
                <h5 class="arriba-1" >¡Hola! Soy </h5>
                <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
                <h5 class="arriba-2" > Desarrolladora y Diseñadora Web </h5>
                <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
            </div>

            <div class="col-6 yo">
                <div class="img-redonda">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>

<div class="servicios">
    <div class="container-fluid">
        <div class="row align-items-center">

            <h2> Servicios que Ofrezco </h2>

            <div class="huhu d-flex align-content-center flex-wrap justify-content-center" id="box">

                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=servicios&showposts"); ?>
                <?php while (have_posts()) : the_post(); ?>

                
                    <div class="col-4 servi-1 text-center">
                        <?php 
                        $image = get_field('imagen_1');
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <h3 class="titulo-1"><?php the_field('titulo_del_servicio'); ?></h3>
                        <p class="parra-1"><?php the_field('descripcion_corta_1'); ?></p>
                    </div>
                

                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
    </div>
</div>


<div class="container-2 text-center">
    <div class="container">
        
        <h2 class="ulti"> Últimos Proyectos</h2>
        <div class="row">

            <div class="container porta-web">
                <div class="row fondo-titulo carta">
                    <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=portafolio-sitios&showposts=3"); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="card">
                        <div class="img-porta">
                            <?php 
                                $image = get_field('imagen_uno');
                                if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="card-body text-center fragil">
                            <h2 class="card-title"> <?php the_title(); ?> </h2>
                            <p> <?php the_excerpt(); ?> </p>
                            <h5><?php the_category(); ?></h5>

                            <ul class="d-flex justify-content-center lista-herrami">
                                <li>
                                    <?php 
                                        $image = get_field('herramienta_1');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                        $image = get_field('herramienta_2');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                        $image = get_field('herramienta_3');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                        $image = get_field('herramienta_4');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                        $image = get_field('herramienta_5');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php 
                                        $image = get_field('herramienta_6');
                                        if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </li>
                            </ul>
                            
                        </div>
                    
                    <div class="card-footer">
                        <div class="botoon"> <small><a href="<?php the_permalink(); ?>">Saber Más</a></small> </div>
                    </div> 
                </div>

                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
    </div>
        <div class="vermas text-center">
            <a href="http://localhost/portafolio/portafolio-sitios/" class="btn">Ver más</a>
        </div>
    </div>
</div>    


<div class="container metodologia justify-content-center text-center">

    <h2>Metodologías</h2>

    <div class="row">
            <div class="d-flex justify-content-around align-items-center ">
                <div class="col-3 align-items-center">
                    <p><i class="fa-solid fa-user-secret"></i></p>
                    <h3>Investigación</h3>
                </div>
                <div class="col-3">
                    <p><i class="fa-solid fa-sitemap"></i></p>
                    <h3>Arquitectura de la Información</h3>
                </div>
                <div class="col-3">
                    <p><i class="fa-solid fa-laptop-code"></i></p>
                    <h3>Diseño de Interfaz</h3>
                </div>
                <div class="col-3">
                    <p><i class="fa-solid fa-server"></i></p>
                    <h3>Última Revisión</h3>
                </div>                
            </div>
        
    </div>
</div>







<?php get_footer(); ?>