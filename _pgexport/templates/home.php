<?php
/*
 Template Name: Home
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<section class="home-banner hero-banner"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <h1 class="hero-title"><?php echo get_field( 'banner_title' ); ?></h1> 
                <div class="hero-content mb-5">
                    <?php echo get_field( 'banner_content' ); ?>
                </div>
                <a href="<?php echo esc_url( get_field( 'banner_button_link' ) ); ?>" class="blue-btn"> <span><?php echo get_field( 'banner_button_text' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" alt="cirle-left" class="cirle-left"> 
</section>     
<section class="home-video-section py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container video-container"> 
        <?php echo get_field( 'feature_video' ); ?> 
    </div>         
</section>     
<section class="featured py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container featured-container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'We Featured IN', 'mage_hd_theme' ); ?></h3> 
        <div class="featured-list"> 
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
                <img class="result-driven-img" alt="result-driven-img" src="<?php echo PG_Image::getUrl( get_field( 'result_driven_service_image' ), 'large' ) ?>"/> 
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left" alt="cirle-left"> 
</section>     
<section class="digitalservices py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Digital Marketing Services', 'mage_hd_theme' ); ?></h3> 
        <div class="large-content-text text-center">
            <?php echo category_description( '217,1' ); ?>
        </div>             
    </div>         
    <div class="digital-inner-section relative"> 
        <div class="max-w-[90vw] mx-auto w-full lg:container"> 
            <div class="flex flex-row sm:flex digitalservices-inner-row"> 
                <div class="digitalservices-col sm:w-12/12 md:w-6/12"> 
                    <?php
                        $service_query_args = array(
                            'category_name' => 'digital-marketing',
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
                            <div id="post-<?php the_ID(); ?>" <?php post_class( 'digitalservices-list' ); ?>> 
                                <h4 class="medium-inner-heading"><?php the_title(); ?></h4> 
                                <div class="medium-content-text">
                                    <?php echo get_the_excerpt(); ?>
                                </div>                                     <a href="<?php echo esc_url( get_permalink() ); ?>" class="border-btn"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
                    <?php endif; ?> 
                </div>                     
            </div>                 
        </div>             
        <div class="sm:w-12/12 md:w-6/12"> 
            <img class="digital-img" alt="digital-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-img.svg"/> 
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
<section class="web-design py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Web Design & Development Services', 'mage_hd_theme' ); ?></h3> 
        <div class="large-content-text text-center">
            <?php echo category_description( '218,6' ); ?>
        </div>             
    </div>         
    <div class="webservice-wrapper owl-carousel"> 
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
                        <p class="medium-content-text"><?php echo get_the_excerpt(); ?></p> <a href="<?php echo esc_url( get_permalink() ); ?>" class="border-btn"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
                    </div>                         
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
        <?php endif; ?> 
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
                        <h4 class="project-title"><?php the_title(); ?></h4>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="explore-more"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> </a> 
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
                            <h4 class="testimonial-name"><?php the_title(); ?></h4>
                            <a href="#" class="testimonial-web-link large-content-text"><?php echo get_field( 'website_url' ); ?></a> 
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
            <h3 class="large-inner-heading text-center">  <?php _e( 'let’s create remarkable experience for your business', 'mage_hd_theme' ); ?> </h3>
            <a href="/contact-us/" class="bg-blue-btn view-all-btn"> <span><?php _e( 'Contact us', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
    </div>         
</section>     
<section class="blog-section py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'Recent Blog Posts', 'mage_hd_theme' ); ?></h3> 
        <div class="blog-content-wrap flex flex-wrap justify-between gap-5"> 
            <?php
                $post_query_args = array(
                    'post__not_in' => PG_Helper_v2::getShownPosts(),
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $post_query = new WP_Query( $post_query_args ); ?>
            <?php if ( $post_query->have_posts() ) : ?>
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
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
<section class="home-faqs py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Frequently Asked Questions', 'mage_hd_theme' ); ?></h3> 
        <div class="large-content-text text-center"> 
            <?php _e( 'Lorem ipsum is simply dummy text of the printing and typesetting', 'mage_hd_theme' ); ?>
            <?php _e( 'industry.', 'mage_hd_theme' ); ?> 
        </div>             
        <?php
            $faqs_query_args = array(
                'post_type' => 'faqs',
                'nopaging' => true,
                'order' => 'DESC',
                'orderby' => 'date'
            )
        ?>
        <?php $faqs_query = new WP_Query( $faqs_query_args ); ?>
        <?php if ( $faqs_query->have_posts() ) : ?>
            <?php while ( $faqs_query->have_posts() ) : $faqs_query->the_post(); ?>
                <?php PG_Helper_v2::rememberShownPost(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class( 'faq-wrap' ); ?>> 
                    <h4 class="accordion medium-inner-heading"><?php the_title(); ?></h4> 
                    <div class="accordion-content large-content-text">
                        <?php the_content(); ?>
                    </div>                         
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
        <?php endif; ?> 
    </div>         
</section>    

<?php get_footer(); ?>