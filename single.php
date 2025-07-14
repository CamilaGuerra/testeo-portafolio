<?php get_header(); ?>

<div class="container-fluid fondo-pro jaja">
    <h2><?php the_title();?></h2>
</div>

<div class="container contenido-single">
        <div class="row">
                <h6 class="single-strong d-flex"><strong>Servicios: </strong><?php the_category();?>
                    
                </h6>
                <h6 class="cliente"><strong>Cliente: </strong><?php the_field('nombre_del_cliente');?></h6>
                <h6><strong>Herramientas: </strong></h6>
            <ul class="d-flex justify-content-start lista-herramientas" >
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
</div>    

<div class="separador"></div>

<div class="container-fluid">
  
    <div class="row row-img d-flex justify-content-center">
        <div class="col-4 columna-1">
            <!--img fancybox -->
            <?php 
                $image = get_field('imagen_uno');
                $image_url = $image['sizes']['medium'];
                if( !empty($image) ): ?>
                <a class="fancybox" data-caption="<?php the_field('nombre_de_empresapyme'); ?>"
                data-fancybox="informacion" href="<?php echo $image['url']; ?>">
                <img src="<?php echo $image_url; ?>" />
                </a>
            <?php endif; ?>
        </div>
        <div class="col-4 columna-2">
                <!--img fancybox -->
                <?php 
                    $image = get_field('imagen_dos');
                    $image_url = $image['sizes']['medium'];
                    if( !empty($image) ): ?>
                    <a class="fancybox" data-caption="<?php the_field('nombre_de_empresapyme'); ?>"
                    data-fancybox="informacion" href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image_url; ?>" />
                    </a>
                <?php endif; ?>
            </div>
    </div>

    <div class="container">
        <div class="row columna12 text-start">
            <div class="col-12 ">
                <p><?php the_field('descripcion_de_proyecto'); ?></p>
            </div>
        </div>
    </div>
    <div class="container-fluid fondobajo">
        <div class="container ">
            <div class="row info-2 columna12">
                <div class="col-12 ">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-2">
            <a class="btn botonatras" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver Atrás</a>
        </div>
    </div>
</div>

<div class="separador-2"></div>

<div class="container-fluid">
    <div class="container">
        <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
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
            </div>
            <div class="owl-nav">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
            </div>
            <div class="owl-dots">
                <div class="owl-dot active"><span></span></div>
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot"><span></span></div>
            </div>
        </div>
    </div>
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>