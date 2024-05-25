<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <div class="hero-title"> 
                    <?php echo single_cat_title(); ?> 
                </div>                     
                <div class="hero-content mb-5"> 
                    <?php echo category_description(); ?> 
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="blog-section py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="blog-content-wrap flex flex-wrap justify-between gap-5">
            <?php
                $service_query_args = array(
                    'post__not_in' => PG_Helper_v2::getShownPosts(),
                    'post_type' => 'service',
                    'posts_per_page' => 100,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'date',
                    'tax_query' => array_filter( array(PG_Helper_v2::getTaxonomyQuery( 'category', 'web-design' )) )
                )
            ?>
            <?php $service_query = new WP_Query( $service_query_args ); ?>
            <?php if ( $service_query->have_posts() ) : ?>
                <?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post md:w-6/12' ); ?>> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'blog-img'
                        ), 'both', null ) ?> 
                        <h4 class="medium-inner-heading"><?php the_title(); ?></h4> 
                        <p class="medium-content-text"><?php echo get_the_excerpt(); ?></p> <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more"><?php _e( 'Read More', 'mage_hd_theme' ); ?></a> 
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
    </div>         
</section>     
<section class="recog-section py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"> <?php _e( 'Our recognitions', 'mage_hd_theme' ); ?> </h3> 
        <div class="recog-list"> 
            <div class="recog-list-logo flex justify-center gap-5"> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/BBB-logo.svg"/> 
            </div>                 
            <div class="recog-list-logo flex justify-center gap-5"> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-florida.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-us.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-black-owned.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-tampa.svg"/> 
            </div>                 
        </div>             
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-right.svg" class="cirle-right"> 
    </div>         
</section>    

<?php get_footer(); ?>