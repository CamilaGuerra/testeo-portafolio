<?php get_header(); ?>

<?php
/*
Template Name: Portafolio Seo
*/
?>

<div class="container-fluid fondo-pro">
    <h2 class="fondo-pro-h2"><?php the_title();?></h2>
</div>

<div class="container porta-web">
    <div class="row fondo-titulo carta">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=seo&showposts=6&paged=$paged"); ?>
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
        <div class="paginacion">
            <?php wp_pagenavi(); ?>
        </div>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>