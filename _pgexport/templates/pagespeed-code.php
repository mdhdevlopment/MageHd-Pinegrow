<?php
/*
 Template Name: Page Speed
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<section class="hero-banner py-120 relative"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-11/12"> 
                <h1 class="hero-title"> <?php _e( 'Page Speed Test', 'mage_hd_theme' ); ?> </h1> 
                <div class="hero-content mb-5"> 
                    <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'mage_hd_theme' ); ?> 
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="test-diagnosis py-120 relative border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Page speed test diagnosis', 'mage_hd_theme' ); ?></h3> 
        <div class="medium-content-text text-center"> 
            <?php _e( 'Est minima odit et cupiditate laborum qui sint dolor! Et aspernatur architecto ut libero vitae qui saepe possimus eum itaque voluptates ea.', 'mage_hd_theme' ); ?> 
        </div>             
        <div class="speed-content-section"> 
            <div class="speed-view-btn-warpper"> 
                <div class="speed-view-btn active" id="desktopView">
                    <?php _e( 'Desktop', 'mage_hd_theme' ); ?>
                </div>                     
                <div class="speed-view-btn" id="mobileView">
                    <?php _e( 'Mobile', 'mage_hd_theme' ); ?>
                </div>                     
            </div>                 
            <div class="desktop-content speed-content" id="desktopView"> 
                <h2><?php _e( 'Desktop Results', 'mage_hd_theme' ); ?></h2> 
                <div id="desktopResult"></div>                     
            </div>                 
            <div class="mobile-content speed-content" id="mobileView"> 
                <h2><?php _e( 'Mobile Results', 'mage_hd_theme' ); ?></h2> 
                <div id="mobileResult"></div>                     
            </div>                 
        </div>             
    </div>         
</section>               
<section class="recog-section py-120 relative"> 
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left" alt="cirle-left"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-right.svg" class="cirle-right" alt="cirle-right"> 
    </div>         
</section>     
<section class="why-us-section py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center pb-60"><?php echo get_field( 'why_magehd_title' ); ?></h3> 
        <div class="large-content-text text-center">
            <?php echo get_field( 'why_magehd_content' ); ?>
        </div>             
        <?php echo get_field( 'why_magehd_video' ); ?> 
    </div>         
</section>     
<section class="project py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'Check out or recent website projects', 'mage_hd_theme' ); ?></h3> 
        <div class="blog-category py-120"> 
            <button class="border-btn web-deisgn active" id="all"> 
                <?php _e( 'All', 'mage_hd_theme' ); ?> 
            </button>                 
            <button class="border-btn web-deisgn" id="category-digital-marketing"> 
                <?php _e( 'Digital Marketing', 'mage_hd_theme' ); ?> 
            </button>                 
            <button class="border-btn web-deisgn" id="category-web-development"> 
                <?php _e( 'Web Development', 'mage_hd_theme' ); ?> 
            </button>                 
        </div>             
        <div class="project-main-wrapper flex flex-wrap justify-between gap-5"> 
            <?php
                $partners_query_args = array(
                    'post_type' => 'partners',
                    'posts_per_page' => 4,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'name'
                )
            ?>
            <?php $partners_query = new WP_Query( $partners_query_args ); ?>
            <?php if ( $partners_query->have_posts() ) : ?>
                <?php while ( $partners_query->have_posts() ) : $partners_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'project-detail md:w-6/12' ); ?>> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'project-cover-img'
                        ), 'both', null ) ?> 
                        <h4 class="project-title"><?php the_title(); ?></h4><a href="<?php echo esc_url( get_permalink() ); ?>" class="explore-more"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> </a> 
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
        <div class="view-all-btn-warp"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="border-btn view-all-btn"> <span><?php _e( 'View All', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
    </div>         
</section>     
<section class="client-testimonial-section py-120 relative border-y border-#F2F2F2"> 
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
                            <img class="quote-icon" alt="quote-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.svg"/> 
                        </div>                             
                        <div class="testimonial-comment large-content-text">
                            <?php the_content(); ?>
                        </div>                             
                        <div class="testimonial-info"> 
                            <h4 class="testimonial-name"><?php the_title(); ?></h4><a href="#" class="testimonial-web-link large-content-text"><?php echo get_field( 'website_url' ); ?></a> 
                        </div>                             
                    </div>                         
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
        <?php endif; ?> 
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left" alt="cirle-left"> 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-right.svg" class="cirle-right" alt="cirle-right"> 
</section>     
<section class="contact-us-before-footer py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="contact-us-before-footer-col contact-us-before-footer-col flex flex-wrap justify-center"> 
            <h3 class="large-inner-heading text-center">  <?php _e( 'let’s create remarkable experience for your business', 'mage_hd_theme' ); ?> </h3><a href="/contact-us/" class="bg-blue-btn view-all-btn"> <span><?php _e( 'Contact us', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
    </div>         
</section>    

<?php get_footer(); ?>