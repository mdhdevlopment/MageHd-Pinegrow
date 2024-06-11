<?php
/*
 Template Name: About Us
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<section class="hero-banner py-120 relative"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <h1 class="hero-title"><?php echo get_field( 'banner_title' ); ?></h1> 
                <div class="hero-content mb-5">
                    <?php echo get_field( 'banner_content' ); ?>
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="result-driven py-120 relative"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="flex flex-row sm:flex result-driven-row"> 
            <div class="sm:w-12/12 md:w-6/12"> 
                <h3 class="large-inner-heading pb-5"><?php echo get_field( 'result_driven_service_title' ); ?></h3> 
                <div class="large-content-text">
                    <?php echo get_field( 'result_driven_service_content' ); ?>
                </div>                     
            </div>                 
            <div class="sm:w-12/12 md:w-6/12"> 
                <img class="result-driven-img" alt="" src="<?php echo PG_Image::getUrl( get_field( 'result_driven_service_image' ), 'large' ) ?>"/> 
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="recog-section py-120 border-y border-#F2F2F2 relative"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"> <?php _e( 'Our recognitions', 'mage_hd_theme' ); ?></h3> 
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
<section class="our-mission py-120 relative"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="flex flex-row sm:flex gap-5"> 
            <div class="sm:w-12/12 md:w-6/12"> 
                <img class="our-mission-img" alt="" src="<?php echo PG_Image::getUrl( get_field( 'our_mission_image' ), 'large' ) ?>"/> 
            </div>                 
            <div class="sm:w-12/12 md:w-6/12"> 
                <h3 class="large-inner-heading pb-5"><?php echo get_field( 'our_mission_title' ); ?></h3> 
                <div class="large-content-text flex flex-col gap-5">
                    <?php echo get_field( 'our_mission_content' ); ?>
                </div>                     
            </div>                 
        </div>             
    </div>         
</section>     
<section class="web-design py-120 border-y border-#F2F2F2">
    <div class="max-w-[90vw] mx-auto w-full lg:container">
        <h3 class="large-inner-heading text-center"><?php _e( 'Services we', 'mage_hd_theme' ); ?><br> <?php _e( 'provide', 'mage_hd_theme' ); ?></h3>
        <div class="about-webservice owl-carousel mt-28">
            <?php
                $service_query_args = array(
                    'category_name' => 'web-development',
                    'post_type' => 'service',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $service_query = new WP_Query( $service_query_args ); ?>
            <?php if ( $service_query->have_posts() ) : ?>
                <?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'webdesign item' ); ?>>
                        <div class="webservice-info flex flex-col flex-wrap	 gap-8">
                            <div class="serial-count">
                                <?php echo get_field( 'serial_count' ); ?>
                            </div>
                            <h4 class="medium-inner-heading"><?php the_title(); ?></h4>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="border-btn"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>     
<section class="client-testimonial-section py-120 relative"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Client’s Testimonials', 'mage_hd_theme' ); ?></h3> 
        <div class="large-content-text text-center"> 
            <?php _e( 'Our clients love our services because they appreciate the quality of work that we deliver and the attentive customer service that they receive. They also enjoy the convenience of our fast turnaround times, which helps them meet their deadlines.', 'mage_hd_theme' ); ?>
        </div>             
    </div>         
    <div class="testimonial-wrapper owl-carousel"> 
        <?php
            $testimonial_query_args = array(
                'post_type' => 'testimonial',
                'nopaging' => true,
                'order' => 'DESC',
                'orderby' => 'date'
            )
        ?>
        <?php $testimonial_query = new WP_Query( $testimonial_query_args ); ?>
        <?php if ( $testimonial_query->have_posts() ) : ?>
            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                <?php PG_Helper_v2::rememberShownPost(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class( 'item testimonial-item' ); ?>> 
                    <div class="testimonial-img"> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'testimonial-image-icon'
                        ), 'both', null ) ?> 
                    </div>                         
                    <div class="testimonial-list"> 
                        <div class="quote-warp"> 
                            <img class="quote-icon" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.svg"/> 
                        </div>                             
                        <div class="testimonial-comment large-content-text">
                            <?php the_content(); ?>
                        </div>                             
                        <div class="testimonial-info"> 
                            <h4 class="testimonial-name"><?php the_title(); ?></h4> <a href="#" class="testimonial-web-link large-content-text"><?php echo get_field( 'website_url' ); ?></a> 
                        </div>                             
                    </div>                         
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
        <?php endif; ?> 
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-right.svg" class="cirle-right"> 
</section>     
<section class="contact-us-before-footer py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="contact-us-before-footer-col contact-us-before-footer-col flex flex-wrap justify-center"> 
            <h3 class="large-inner-heading text-center">  <?php _e( 'let’s create remarkable experience for your business', 'mage_hd_theme' ); ?> </h3> <a href="/contact-us/" class="bg-blue-btn view-all-btn"> <span><?php _e( 'Contact us', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
    </div>         
</section>         

<?php get_footer(); ?>