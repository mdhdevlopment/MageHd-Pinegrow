<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative; padding: 60px 0;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex flex-col"> 
            <h1 class="hero-title"><?php the_title(); ?></h1>
            <div class="hero-content mb-5"> <span><?php echo get_the_excerpt(); ?></span> 
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="blog-content  service-post-content py-120 border-y border-#F2F2F2">
    <div class="service-feature-img-wrapper">
        <?php echo PG_Image::getPostImage( null, 'full', array(
                'class' => 'service-feature-img'
        ), 'both', null ) ?> 
    </div>
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex flex-col gap-10"> 
            <h2 class="hero-title"><?php the_title(); ?></h2> 
            <div class="flex flex-col gap-10 medium-content-text" style="font-family: 'Questrial', sans-serif; font-size: 20px; font-weight: 500; line-height: 30px; color: #F2F2F2;">
                <?php the_content(); ?>
            </div>                 
        </div>
    </div>
</section>     
<section class="recog-section py-120 border-y border-#F2F2F2" style="position: relative;"> 
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
<section class="featured py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container" style="vertical-align: middle; justify-content: center; display: flex; flex-direction: column; align-items: center;"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'We Featured IN', 'mage_hd_theme' ); ?></h3> 
        <div class="featured-list" style="display: flex; vertical-align: middle; align-items: center; justify-content: center; gap: 20px; margin-top: 80px;"> 
            <?php
                $industry_partners_query_args = array(
                    'post__not_in' => PG_Helper_v2::getShownPosts(),
                    'post_type' => 'industry_partners',
                    'posts_per_page' => 5,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $industry_partners_query = new WP_Query( $industry_partners_query_args ); ?>
            <?php if ( $industry_partners_query->have_posts() ) : ?>
                <?php while ( $industry_partners_query->have_posts() ) : $industry_partners_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'featured-logo' ); ?>> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'capa-2-icon'
                        ), 'both', null ) ?> 
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
    </div>         
</section>    

<?php get_footer(); ?>