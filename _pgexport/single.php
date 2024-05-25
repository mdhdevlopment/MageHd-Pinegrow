<?php get_header(); ?>

<section class="hero-banner" style="position: relative; padding: 60px 0;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex flex-col"> 
            <h1 class="hero-title"><?php the_title(); ?></h1> 
            <div class="hero-content mb-5">
                <?php the_time( get_option( 'date_format' ) ); ?>
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="blog-content py-120">
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex flex-col gap-10"> 
            <?php echo PG_Image::getPostImage( null, 'full', null, 'both', null ) ?> 
            <div class="flex flex-col gap-10 medium-content-text" style="font-family: 'Questrial', sans-serif; font-size: 20px; font-weight: 500; line-height: 30px; color: #F2F2F2;">
                <?php the_content(); ?>
            </div>                 
            <div class="single-post-social-list flex justify-center gap-4"> <a href="<?php echo get_theme_mod( 'facebook', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="" class="social-icon"></a>
                <a href="<?php echo get_theme_mod( 'twitter', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="" class="social-icon"></a>
                <a href="<?php echo get_theme_mod( 'linkedin', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="" class="social-icon"></a>
                <a href="<?php echo get_theme_mod( 'instagram', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="" class="social-icon"></a>
            </div>                 
        </div>
    </div>
</section>
<section class="blog-section py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'Recent Blog Posts', 'mage_hd_theme' ); ?></h3> 
        <div class="blog-content-wrap flex flex-wrap justify-between gap-5"> 
            <?php
                $service_query_args = array(
                    'post__not_in' => PG_Helper_v2::getShownPosts(),
                    'post_type' => 'service',
                    'posts_per_page' => 2,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'ignore_sticky_posts' => true,
                    'order' => 'ASC',
                    'orderby' => 'rand'
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
                        <h4 class="medium-inner-heading"><?php the_title(); ?></h4> <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more"><?php _e( 'Read More', 'mage_hd_theme' ); ?></a> 
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